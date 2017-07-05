<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Dhl\Http;

use Dhl\KnownTrackingRequest;

class ValidateCredentialsRequest extends AbstractRequest
{
    /**
     * @return KnownTrackingRequest
     */
    public function getData() {
        $tracking = new KnownTrackingRequest();
        $tracking->setRequest($this->getHeaderRequestType());
        $tracking->setLanguageCode('EN');
        $tracking->setAWBNumber(['0000000001']);
        $tracking->setLevelOfDetails('ALL_CHECK_POINTS');
        return $tracking;
    }

    /**
     * @param $data
     * @return ValidateCredentialsResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new ValidateCredentialsResponse($this, $data);
    }

}