<?php

namespace MIT\SdkClient\Validators;

class BusinessDataValidator {
    public function validate($businessData) {
        if(is_null($businessData->getIdBranch()) || $businessData->getIdBranch() == '' ) { 
            return 'El businessData.idBranch no debe ser null ni vacio';
        }
        if(is_null($businessData->getIdCompany()) || $businessData->getIdCompany() == '' ) { 
            return 'El businessData.idCompany no debe ser null ni vacio';
        }
        if(is_null($businessData->getUser()) || $businessData->getUser() == '' ) { 
            return 'El businessData.user no debe ser null ni vacio';
        }
        if(is_null($businessData->getPwd()) || $businessData->getPwd() == '' ) { 
            return 'El businessData.pwd no debe ser null ni vacio';
        }
        return '';
    }

}
