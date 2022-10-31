<?php

namespace MIT\SdkClient\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class BusinessData {
/**    @SerializedName("id_company") */
    private $idCompany;
/**    @SerializedName("id_branch") */
    private  $idBranch;
    private  $user;
    private  $pwd;

    

    /**
     * Get the value of idCompany
     */ 
    public function getIdCompany()
    {
        return $this->idCompany;
    }

    /**
     * Set the value of idCompany
     *
     * @return  self
     */ 
    public function setIdCompany($idCompany)
    {
        $this->idCompany = $idCompany;

        return $this;
    }

    /**
     * Get the value of idBranch
     */ 
    public function getIdBranch()
    {
        return $this->idBranch;
    }

    /**
     * Set the value of idBranch
     *
     * @return  self
     */ 
    public function setIdBranch($idBranch)
    {
        $this->idBranch = $idBranch;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of pwd
     */ 
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set the value of pwd
     *
     * @return  self
     */ 
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

}