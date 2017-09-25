<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Dhl\Http;

class ValidateCredentialsResponse extends AbstractResponse
{

    /**
     * @return bool
     */
    public function getData()
    {
        if(!is_null($this->getCode())) {
            return false;
        }
        return is_null($this->getCode()) && is_null($this->getMessage());
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if(strpos(parent::getMessage(), 'No Shipments Found') === 0) {
            return null;
        }
        return parent::getMessage();
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if(parent::getCode() == 209) {
            return null;
        }
        return parent::getCode();
    }

}