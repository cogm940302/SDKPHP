<?php

namespace MIT\SdkClient\Validators;

class D3DSValidator {

    function validate($d3ds) {
        if($d3ds->getEmail() != null ) {
            if(strlen($d3ds->getEmail()) < 1 ) {
                return 'El d3dsdata.email no puede ser vacio';
            }
        }
        if($d3ds->getPhone() != null ) {
            if(strlen($d3ds->getPhone()) < 1 ) {
                return 'El d3dsdata.phone no puede ser vacio';
            }
        }
        if($d3ds->getAddress() != null ) {
            if(strlen($d3ds->getAddress()) < 1 ) {
                return 'El d3dsdata.address no puede ser vacio';
            }
        }
        if($d3ds->getCity() != null ) {
            if(strlen($d3ds->getCity()) < 1 ) {
                return 'El d3dsdata.city no puede ser vacio';
            }
        }
        if($d3ds->getState() != null ) {
            if(strlen($d3ds->getState()) < 2 ) {
                return 'El d3dsdata.state no puede ser vacio';
            }
        }
        if($d3ds->getZipCode() != null ) {
            if(strlen($d3ds->getZipCode()) < 1 ) {
                return 'El d3dsdata.zipCode no puede ser vacio';
            }
        }
        if($d3ds->getCountryCode() != null ) {
            if(strlen($d3ds->getCountryCode()) < 3 ) {
                return 'El d3dsdata.countyCode no puede ser vacio';
            }
        }
        return '';
    }


}
