<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 12.5.2017 г.
 * Time: 18:03 ч.
 */

namespace Omniship\Dhl\Http;

use Carbon\Carbon;
use Dhl\DataTypes\RequestType;
use Dhl\DataTypes\ServiceHeaderType;
use Dhl\KnownTrackingRequest;

class TrackingParcelRequest extends AbstractRequest
{
    /**
     * @return KnownTrackingRequest
     */
    public function getData() {
        $tracking = new KnownTrackingRequest;
        $tracking->setRequest($this->getHeaderRequestType());

        $tracking->setLanguageCode($this->getLanguageCode());
//        $tracking->CountryCode = 'BG';
        $tracking->setAWBNumber([$this->getBolId()]);
        $tracking->setLevelOfDetails('ALL_CHECK_POINTS');
        $tracking->setPiecesEnabled('S');

        return $tracking;
    }

    /**
     * @param $data
     * @return ShippingQuoteResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new TrackingParcelResponse($this, $data);
    }
}