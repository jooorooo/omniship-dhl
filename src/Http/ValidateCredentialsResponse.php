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
        if(empty($this->getXml()->AWBInfo->Status->ActionStatus)) {
            return true;
        }
        return (string)$this->getXml()->AWBInfo->Status->ActionStatus == 'success';
    }

}