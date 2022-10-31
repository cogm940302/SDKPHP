<?php

namespace MIT\SdkClient\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class PaymentData {
    private $business;
/**    @SerializedName("nb_fpago") */
    private $paymentMethod;
    private $version = "IntegraWPP";
    private $url;
    private $data3ds;
/**    @SerializedName("datos_adicionales") */
    private $additionalData;


    /**
     * Get the value of business
     */ 
    public function getBusiness()
    {
        return $this->business;
    }

    /**
     * Set the value of business
     *
     * @return  self
     */ 
    public function setBusiness($business)
    {
        $this->business = $business;

        return $this;
    }

    /**
     * Get the value of paymentMethod
     */ 
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set the value of paymentMethod
     *
     * @return  self
     */ 
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Get the value of version
     */ 
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set the value of version
     *
     * @return  self
     */ 
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */ 
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get the value of data3ds
     */ 
    public function getData3ds()
    {
        return $this->data3ds;
    }

    /**
     * Set the value of data3ds
     *
     * @return  self
     */ 
    public function setData3ds($data3ds)
    {
        $this->data3ds = $data3ds;

        return $this;
    }

    /**
     * Get the value of additionalData
     */ 
    public function getAdditionalData()
    {
        return $this->additionalData;
    }

    /**
     * Set the value of additionalData
     *
     * @return  self
     */ 
    public function setAdditionalData($additionalData)
    {
        $this->additionalData = $additionalData;

        return $this;
    }
}
