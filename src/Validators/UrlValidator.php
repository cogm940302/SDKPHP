<?php

namespace MIT\SdkClient\Validators;

class UrlValidator {

    function validate($data) {
        if(is_null($data->getAmount()) || $data->getAmount() < 0) { 
            return 'El urldata.monto debe ser valido';
        }
        if($data->getOmitNotification() != null && $data->getOmitNotification() < 0) { 
            return 'El urldata.omitNotification debe ser valido';
        }
        if($data->getStEmail() != null && $data->getStEmail() < 0) { 
            return 'El urldata.stEmail debe ser valido';
        }
        if(is_null($data->getMoneda()) || $data->getMoneda() == '' ) { 
            return 'El urldata.moneda no debe ser null ni vacio';
        }
        if(is_null($data->getReference()) || $data->getReference() == '' ) { 
            return 'El urldata.reference no debe ser null ni vacio';
        }
        return '';
    }

}