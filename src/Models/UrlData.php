<?php

namespace MIT\SdkClient\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class UrlData {

    private $reference;
    private $amount;
    private $moneda;
    private $canal = 'W';
/**    @SerializedName("omitir_notif_default") */
    private $omitNotification;
/**    @SerializedName("promociones") */
    private $promotions;
/**    @SerializedName("id_promotion") */
    private $idPromotion;
/**    @SerializedName("st_correo") */
    private $stEmail;
/**    @SerializedName("fh_vigencia") */
    private $expirationDate = null;
/**    @SerializedName("mail_cliente") */
    private $clientEmail;
/**    @SerializedName("prepago") */
    private $prepaid; // 0 | 1
    

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
     * Get the value of moneda
     */ 
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set the value of moneda
     *
     * @return  self
     */ 
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get the value of canal
     */ 
    public function getCanal()
    {
        return $this->canal;
    }

    /**
     * Set the value of canal
     *
     * @return  self
     */ 
    public function setCanal($canal)
    {
        $this->canal = $canal;

        return $this;
    }

    /**
     * Get the value of omitNotification
     */ 
    public function getOmitNotification()
    {
        return $this->omitNotification;
    }

    /**
     * Set the value of omitNotification
     *
     * @return  self
     */ 
    public function setOmitNotification($omitNotification)
    {
        $this->omitNotification = $omitNotification;

        return $this;
    }

    /**
     * Get the value of promotions
     */ 
    public function getPromotions()
    {
        return $this->promotions;
    }

    /**
     * Set the value of promotions
     *
     * @return  self
     */ 
    public function setPromotions($promotions)
    {
        $this->promotions = $promotions;

        return $this;
    }

    /**
     * Get the value of idPromotion
     */ 
    public function getIdPromotion()
    {
        return $this->idPromotion;
    }

    /**
     * Set the value of idPromotion
     *
     * @return  self
     */ 
    public function setIdPromotion($idPromotion)
    {
        $this->idPromotion = $idPromotion;

        return $this;
    }

    /**
     * Get the value of stEmail
     */ 
    public function getStEmail()
    {
        return $this->stEmail;
    }

    /**
     * Set the value of stEmail
     *
     * @return  self
     */ 
    public function setStEmail($stEmail)
    {
        $this->stEmail = $stEmail;

        return $this;
    }

    /**
     * Get the value of expirationDate
     */ 
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set the value of expirationDate
     *
     * @return  self
     */ 
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get the value of clientEmail
     */ 
    public function getClientEmail()
    {
        return $this->clientEmail;
    }

    /**
     * Set the value of clientEmail
     *
     * @return  self
     */ 
    public function setClientEmail($clientEmail)
    {
        $this->clientEmail = $clientEmail;

        return $this;
    }

    /**
     * Get the value of prepaid
     */ 
    public function getPrepaid()
    {
        return $this->prepaid;
    }

    /**
     * Set the value of prepaid
     *
     * @return  self
     */ 
    public function setPrepaid($prepaid)
    {
        $this->prepaid = $prepaid;

        return $this;
    }

    public function setPromotionsValues($promotion) {
        $this->promotions = implode(" ",$promotion);
    }
}