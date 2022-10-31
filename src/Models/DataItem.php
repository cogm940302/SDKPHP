<?php

namespace MIT\SdkClient\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class DataItem {
    private $id;
    private $display;
    private $label;
    private $value;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
            return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
            $this->id = $id;

            return $this;
    }

    /**
     * Get the value of display
     */ 
    public function getDisplay()
    {
            return $this->display;
    }

    /**
     * Set the value of display
     *
     * @return  self
     */ 
    public function setDisplay($display)
    {
            $this->display = $display;

            return $this;
    }

    /**
     * Get the value of label
     */ 
    public function getLabel()
    {
            return $this->label;
    }

    /**
     * Set the value of label
     *
     * @return  self
     */ 
    public function setLabel($label)
    {
            $this->label = $label;

            return $this;
    }

    /**
     * Get the value of value
     */ 
    public function getValue()
    {
            return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
            $this->value = $value;

            return $this;
    }

    
}