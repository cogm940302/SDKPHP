<?php

namespace MIT\SdkClient\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class DatosAdicionalesData {

    private $data = [];
    public function append($aditionalData) {
        array_push($this->data, $aditionalData);
    }


    /**
     * Get the value of data
     */ 
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */ 
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}