<?php

namespace MIT\SdkClient\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class PaymentResponse {
        private $reference;

        private $response;

/**    @SerializedName("foliocpagos") */
        private $folio;

/**    @SerializedName("auth") */
        private $authorization;

/**    @SerializedName("cd_response") */
        private $responseCode;

/**    @SerializedName("cd_error") */
        private $errorCode;

/**    @SerializedName("nb_error") */
        private $errorDescription;

        private $time;

        private $date;

/**    @SerializedName("nb_company") */
        private $companyName;

/**    @SerializedName("nb_merchant") */
        private $merchantName;

/**    @SerializedName("cc_type") */
        private $ccType;

/**    @SerializedName("tp_operation") */
        private $operacion;

/**    @SerializedName("cc_name") */
        private $name;

/**    @SerializedName("cc_number") */
        private $ccNumber;

/**    @SerializedName("amount") */
        private $amount;

/**    @SerializedName("id_url") */
        private $idUrl;

/**    @SerializedName("email") */
        private $email;

/**    @SerializedName("cc_mask") */
        private $ccMask;

/**    @SerializedName("datos_adicionales") */
        private $datosAdicionales;

        /**
         * Get the value of reference
         */ 
        public function getReference()
        {
                return $this->reference;
        }

        /**
         * Set the value of reference
         *
         * @return  self
         */ 
        public function setReference($reference)
        {
                $this->reference = $reference;

                return $this;
        }

        /**
         * Get the value of response
         */ 
        public function getResponse()
        {
                return $this->response;
        }

        /**
         * Set the value of response
         *
         * @return  self
         */ 
        public function setResponse($response)
        {
                $this->response = $response;

                return $this;
        }

        /**
         * Get the value of folio
         */ 
        public function getFolio()
        {
                return $this->folio;
        }

        /**
         * Set the value of folio
         *
         * @return  self
         */ 
        public function setFolio($folio)
        {
                $this->folio = $folio;

                return $this;
        }

        /**
         * Get the value of authorization
         */ 
        public function getAuthorization()
        {
                return $this->authorization;
        }

        /**
         * Set the value of authorization
         *
         * @return  self
         */ 
        public function setAuthorization($authorization)
        {
                $this->authorization = $authorization;

                return $this;
        }

        /**
         * Get the value of responseCode
         */ 
        public function getResponseCode()
        {
                return $this->responseCode;
        }

        /**
         * Set the value of responseCode
         *
         * @return  self
         */ 
        public function setResponseCode($responseCode)
        {
                $this->responseCode = $responseCode;

                return $this;
        }

        /**
         * Get the value of errorCode
         */ 
        public function getErrorCode()
        {
                return $this->errorCode;
        }

        /**
         * Set the value of errorCode
         *
         * @return  self
         */ 
        public function setErrorCode($errorCode)
        {
                $this->errorCode = $errorCode;

                return $this;
        }

        /**
         * Get the value of errorDescription
         */ 
        public function getErrorDescription()
        {
                return $this->errorDescription;
        }

        /**
         * Set the value of errorDescription
         *
         * @return  self
         */ 
        public function setErrorDescription($errorDescription)
        {
                $this->errorDescription = $errorDescription;

                return $this;
        }

        /**
         * Get the value of time
         */ 
        public function getTime()
        {
                return $this->time;
        }

        /**
         * Set the value of time
         *
         * @return  self
         */ 
        public function setTime($time)
        {
                $this->time = $time;

                return $this;
        }

        /**
         * Get the value of date
         */ 
        public function getDate()
        {
                return $this->date;
        }

        /**
         * Set the value of date
         *
         * @return  self
         */ 
        public function setDate($date)
        {
                $this->date = $date;

                return $this;
        }

        /**
         * Get the value of companyName
         */ 
        public function getCompanyName()
        {
                return $this->companyName;
        }

        /**
         * Set the value of companyName
         *
         * @return  self
         */ 
        public function setCompanyName($companyName)
        {
                $this->companyName = $companyName;

                return $this;
        }

        /**
         * Get the value of merchantName
         */ 
        public function getMerchantName()
        {
                return $this->merchantName;
        }

        /**
         * Set the value of merchantName
         *
         * @return  self
         */ 
        public function setMerchantName($merchantName)
        {
                $this->merchantName = $merchantName;

                return $this;
        }

        /**
         * Get the value of ccType
         */ 
        public function getCcType()
        {
                return $this->ccType;
        }

        /**
         * Set the value of ccType
         *
         * @return  self
         */ 
        public function setCcType($ccType)
        {
                $this->ccType = $ccType;

                return $this;
        }

        /**
         * Get the value of operacion
         */ 
        public function getOperacion()
        {
                return $this->operacion;
        }

        /**
         * Set the value of operacion
         *
         * @return  self
         */ 
        public function setOperacion($operacion)
        {
                $this->operacion = $operacion;

                return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of ccNumber
         */ 
        public function getCcNumber()
        {
                return $this->ccNumber;
        }

        /**
         * Set the value of ccNumber
         *
         * @return  self
         */ 
        public function setCcNumber($ccNumber)
        {
                $this->ccNumber = $ccNumber;

                return $this;
        }

        /**
         * Get the value of amount
         */ 
        public function getAmount()
        {
                return $this->amount;
        }

        /**
         * Set the value of amount
         *
         * @return  self
         */ 
        public function setAmount($amount)
        {
                $this->amount = $amount;

                return $this;
        }

        /**
         * Get the value of idUrl
         */ 
        public function getIdUrl()
        {
                return $this->idUrl;
        }

        /**
         * Set the value of idUrl
         *
         * @return  self
         */ 
        public function setIdUrl($idUrl)
        {
                $this->idUrl = $idUrl;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of ccMask
         */ 
        public function getCcMask()
        {
                return $this->ccMask;
        }

        /**
         * Set the value of ccMask
         *
         * @return  self
         */ 
        public function setCcMask($ccMask)
        {
                $this->ccMask = $ccMask;

                return $this;
        }

        /**
         * Get the value of datosAdicionales
         */ 
        public function getDatosAdicionales()
        {
                return $this->datosAdicionales;
        }

        /**
         * Set the value of datosAdicionales
         *
         * @return  self
         */ 
        public function setDatosAdicionales($datosAdicionales)
        {
                $this->datosAdicionales = $datosAdicionales;

                return $this;
        }
}