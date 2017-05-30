<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Dhl\Http;

use Omniship\Dhl\Helper\Errors;

class ValidateAddressResponse extends AbstractResponse
{

    /**
     * @return bool
     */
    public function getData()
    {
        if(!is_null($this->getCode())) {
            return false;
        }

        return !empty($this->getXml()->GetQuoteResponse);
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        $code = parent::getCode();
        if($code && $error = Errors::capabilityAndQuoteService($code)) {
            return htmlspecialchars(!$this->getRequest()->getTestMode() && $error['Meaning'] ? $error['Meaning'] : $error['Message'], ENT_QUOTES, 'utf-8');
        }
        return parent::getMessage();
    }
}