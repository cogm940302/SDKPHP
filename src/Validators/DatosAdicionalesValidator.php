<?php

namespace MIT\SdkClient\Validators;

class DatosAdicionalesValidator {

    function validate($data) {
        if(is_null($data->getId()) || $data->getId() < 0) { 
            return 'El dataItem.id debe ser un valor valido';
        }
        if(is_null($data->getLabel()) || strlen($data->getLabel()) < 1 || strlen($data->getLabel()) > 60) { 
            return 'El dataItem.label debe tener longitud entre 1 y 60';
        }
        if(is_null($data->getValue()) || strlen($data->getValue()) < 1 || strlen($data->getValue()) > 100) { 
            return 'El dataItem.value debe tener longitud entre 1 y 100';
        }
        return '';
    }
}