<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Dhl\Http;

use Carbon\Carbon;
use Dhl\DCTRequestdatatypes\PieceType;
use Dhl\DCTRequest;
use Dhl\DCTRequest\GetQuoteAType;
use Dhl\DCTRequestdatatypes\BkgDetailsType;
use Dhl\DCTRequestdatatypes\DCTFromType;
use Dhl\DCTRequestdatatypes\DCTToType;

class ValidateAddressRequest extends AbstractRequest
{
    /**
     * @return DCTRequest
     */
    public function getData() {
        $quote = new GetQuoteAType();
        $quote->setRequest($this->getHeaderRequestType());

        $quote->setFrom($this->_getFrom());
        $quote->setTo($this->_getTo());
        $quote->setBkgDetails($this->_getBkgDetails());

        $request = new DCTRequest();
        $request->setGetQuote($quote);

        return $request;
    }

    /**
     * @param $data
     * @return ValidateAddressResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new ValidateAddressResponse($this, $data);
    }

    /**
     * @return DCTFromType
     */
    protected function _getFrom() {
        $request = new DCTFromType();
        $request->setCountryCode('BG');
        $request->setCity('Sofia');
        $request->setPostalcode(1000);
        return $request;
    }

    /**
     * @return DCTToType
     */
    protected function _getTo() {
        $request = new DCTToType();
        $address = $this->getAddress();
        if($address && !is_null($country = $address->getCountry())) {
            $request->setCountryCode($country->getIso2());
        }
        //Required for countries where DHL has suburb level capability variation. Please refer to the Reference Data (DHL Country).
        if($address && !is_null($state = $address->getState())) {
            $request->setSuburb($state->getName());
        }
        if($address && !is_null($city = $address->getCity())) {
            $request->setCity($city->getName());
        }
        if($address) {
            $request->setPostalcode($address->getPostCode());
        }
        return $request;
    }

    /**
     * @return BkgDetailsType
     */
    protected function _getBkgDetails() {
        $request = new BkgDetailsType();
        $request->setDate($this->getShipmentDate() ? $this->getShipmentDate() : Carbon::now());

        $request->setDimensionUnit(strtoupper($this->findCountryData('DimensionalUnit'))); //IN, CM
        $request->setWeightUnit(strtoupper($this->findCountryData('WeightUnit'))); //KG, LB

        /*
         * Time when the shipment can
         * be picked up. Used to
         * calculate the available
         * capabilities and do a next day
         * skip if  all pickup times have
         * passed for the requested day.
         *
         * P indicates the period (required)
         * T indicates the start of a time
         * section
         * nH indicates the number of hours
         * nM indicates the number of
         * minutes
         *
         * Eg. PT10H21M
         */
        $request->setReadyTime(new \DateInterval('PT18H21M'));

        $address = $this->getAddress();
        if($address && $address->getCountry()) {
            $request->setPaymentCountryCode($address->getCountry()->getIso2());
        }

        return $request;
    }
}