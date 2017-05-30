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
use Dhl\DCTRequestdatatypes\DCTDutiableType;
use Dhl\DCTRequestdatatypes\DCTFromType;
use Dhl\DCTRequestdatatypes\DCTToType;
use Dhl\DCTRequestdatatypes\QtdShpExChrgType;
use Dhl\DCTRequestdatatypes\QtdShpType;

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

        $piece = new PieceType();
        $piece->setPieceID(1);
        $piece->setWeight(0.1);
        $request->addToPieces($piece);
        $request->setNumberOfPieces([1]);

        $address = $this->getAddress();
        $dimension_unit = 'CM';
        $weight_unit = 'KG';

        $request->setDimensionUnit($dimension_unit); //IN, CM
        $request->setWeightUnit($weight_unit); //KG, LB

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

        if($address && $address->getCountry()) {
            $request->setPaymentCountryCode($address->getCountry()->getIso2());
        }

        // Request Paperless trade
        $qtd_shp_ex_chrg = new QtdShpExChrgType();
        $qtd_shp_ex_chrg->setSpecialServiceType('WY');

        $qtd_shp = new QtdShpType();
        $qtd_shp->setQtdShpExChrg([$qtd_shp_ex_chrg]);

        $request->setQtdShp([$qtd_shp]);

        return $request;
    }
}