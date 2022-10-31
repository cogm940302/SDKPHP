<?php

namespace MIT\SdkClient\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;


class GenUrlResponse {
/**    @SerializedName("cd_response") */
     private  $cdResponse;
/**    @SerializedName("nb_response") */
     private  $nbResponse;
/**    @SerializedName("nb_url") */
     private  $nbUrl;

    

     /**
      * Get the value of cdResponse
      */ 
     public function getCdResponse()
     {
          return $this->cdResponse;
     }

     /**
      * Set the value of cdResponse
      *
      * @return  self
      */ 
     public function setCdResponse($cdResponse)
     {
          $this->cdResponse = $cdResponse;

          return $this;
     }

     /**
      * Get the value of nbResponse
      */ 
     public function getNbResponse()
     {
          return $this->nbResponse;
     }

     /**
      * Set the value of nbResponse
      *
      * @return  self
      */ 
     public function setNbResponse($nbResponse)
     {
          $this->nbResponse = $nbResponse;

          return $this;
     }

     /**
      * Get the value of nbUrl
      */ 
     public function getNbUrl()
     {
          return $this->nbUrl;
     }

     /**
      * Set the value of nbUrl
      *
      * @return  self
      */ 
     public function setNbUrl($nbUrl)
     {
          $this->nbUrl = $nbUrl;

          return $this;
     }
}
