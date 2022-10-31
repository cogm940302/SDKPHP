<?php

namespace MIT\SdkClient\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class ParentPgs {
    private $data0;
    private $data;

    

    /**
     * Get the value of data0
     */ 
    public function getData0()
    {
        return $this->data0;
    }

    /**
     * Set the value of data0
     *
     * @return  self
     */ 
    public function setData0($data0)
    {
        $this->data0 = $data0;

        return $this;
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