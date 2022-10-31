<?php

namespace MIT\SdkClient;

use MIT\SdkClient\AES\AesHelper;
use MIT\SdkClient\Http\HttpHelper;
use MIT\SdkClient\Models\ParentPgs;
use MIT\SdkClient\Models\GenUrlResponse;
use MIT\SdkClient\Models\PaymentResponse;
use MIT\SdkClient\ExceptionHandler\SdkException;
use MIT\SdkClient\Validators\BusinessDataValidator;
use MIT\SdkClient\Validators\D3DSValidator;
use MIT\SdkClient\Validators\DatosAdicionalesValidator;
use MIT\SdkClient\Validators\UrlValidator;

use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;



/**
 * Clase principal del SDK
 */
 class WppClient {

    private $endpoint; 
    private $id; 
    private $key;
    private $aesHelper;
    private $nameConverter;
    private $serializer;
    private $deserializer;

    /**
     * Constructor
     * @param endpoint: la URL del servicio
     * @param id: identificador de la peticion
     * @param key: llave para el cifrado y decifrado de los datos
     */
    public function __construct( $endpoint, $id, $key)
    {
        $this->endpoint = $endpoint;
        $this->id = $id;
        $this->aesHelper = new AESHelper($key);

        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        $metadataAwareNameConverter = new MetadataAwareNameConverter($classMetadataFactory);

        $this->serializer = new Serializer(
            [new ObjectNormalizer($classMetadataFactory, $metadataAwareNameConverter)],
            ['xml'=>new XmlEncoder()]
        );
    }

    /**
     * @param payment: objeto PaymentData.php con las propiedades para enviar la solicitud
     * @return url: retorna la url obtenida por el servicio
     * @throws SdkException: retorna excepcion en caso de error
     */
    public function getUrlPayment($payment)
    {
        $this->validateRequest($payment);
        $xmlContent = $this->buildRequest($payment);
        $httpHelper = new HttpHelper($this->endpoint);
        $xmlResponse = $httpHelper->post($xmlContent);
        if (!$this->is_base64($xmlResponse))
        {
            throw new SdkException("Error al enviar el XML: " + $xmlResponse, -2);
        }
        $xmlResponse = $this->aesHelper->decrypt($xmlResponse);
        $genUrlResponse = $this->serializer->deserialize($xmlResponse, GenUrlResponse::class, 'xml');
        return $genUrlResponse->getNbUrl();
    }

    /**
     * @param payment: objeto PaymentData.php con las propiedades para enviar la solicitud
     * @return xmlCipher: regresa la cadena cifrada lista para el envio
     */
    private function buildRequest($payment) {
        $parentPgs = new ParentPgs();
        $parentPgs->setData0($this->id);
        $xmlContent = $this->serializer->serialize($payment, 'xml', [AbstractObjectNormalizer::SKIP_NULL_VALUES => true, XmlEncoder::ROOT_NODE_NAME => 'P'] );
        $xmlContent = $this->aesHelper->encrypt($xmlContent);
        $parentPgs->setData($xmlContent);
        $xmlComplete = $this->serializer->serialize($parentPgs, 'xml', [AbstractObjectNormalizer::SKIP_NULL_VALUES => true, XmlEncoder::ROOT_NODE_NAME => 'pgs']);
        $xmlComplete = str_replace("<?xml version=\"1.0\"?>", "" , $xmlComplete);
        $xmlComplete = str_replace("<![CDATA[", "" , $xmlComplete);
        $xmlComplete = str_replace("]]>", "" , $xmlComplete);
        return $xmlComplete;
    }
    private function is_base64($s)
    {
        return (bool) preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $s);
    }

    private function validateRequest($payment) {

        $businessDataValidator = new BusinessDataValidator();
        $resultBusinessValidator = $businessDataValidator->validate($payment->getBusiness());
        if($resultBusinessValidator != '') {
            throw new SdkException($resultBusinessValidator , -1);
        }

        if ($payment->getData3ds() != null) { 
            $d3dsValidator = new D3DSValidator();
            $resultD3dsValidator = $d3dsValidator->validate($payment->getData3ds());
            if($resultD3dsValidator != '') {
                throw new SdkException($resultD3dsValidator , -1);
            }
        }

        $urlDataValidator = new UrlValidator();
        $resultUrlData = $urlDataValidator->validate($payment->getUrl());
        if($resultUrlData != '') {
            throw new SdkException($resultUrlData , -1);
        }

    }
    /**
     * @param bodyResponse: string de respuesta del servicio generador de ligas
     * @return paymentResponse: Objeto PaymentResponse.php 
     * @throws SdkException
     */

    public function processAfterPaymentResponse($bodyResponse)
    {
        $bodyResponse = $this->aesHelper->decrypt($bodyResponse);
        try{
            $paymentResponse = $this->serializer->deserialize($bodyResponse, PaymentResponse::class, 'xml');
            return $paymentResponse;
        } catch (\Exception $e) {
            throw new SdkException("Error al interpretar el XML: " . $bodyResponse , -1);
        }
    }
}
