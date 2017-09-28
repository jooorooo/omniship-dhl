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
use Omniship\Common\PieceBag;
use Omniship\Dhl\Helper\Convert;

class ShippingQuoteRequest extends AbstractRequest
{
    /**
     * @return DCTRequest
     */
    public function getData()
    {
        $quote = new GetQuoteAType();
        $quote->setRequest($this->getHeaderRequestType());

        $quote->setFrom($this->_getFrom());
        $quote->setTo($this->_getTo());
        $quote->setBkgDetails($this->_getBkgDetails());
        if (!is_null($dutiable = $this->_getDutiable())) {
            $quote->setDutiable($dutiable);
        }

        $request = new DCTRequest();
        $request->setGetQuote($quote);
//        exit(htmlspecialchars($request->toXML()));
        return $request;
    }

    /**
     * @param $data
     * @return ShippingQuoteResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new ShippingQuoteResponse($this, $data);
    }

    /**
     * @return DCTFromType
     */
    protected function _getFrom()
    {
        $request = new DCTFromType();
        $address = $this->getSenderAddress();
        if ($address && !is_null($country = $address->getCountry())) {
            $request->setCountryCode($country->getIso2());
        }
        //Required for countries where DHL has suburb level capability variation. Please refer to the Reference Data (DHL Country).
        if ($address && !is_null($state = $address->getState())) {
            $request->setSuburb($state->getName());
        }
        if ($address && !is_null($city = $address->getCity())) {
            $request->setCity($city->getName());
        }
        if ($address) {
            $request->setPostalcode($address->getPostCode());
        }

        //Shipper VAT Number is required for Brazil country with Brazil tax breakdown pricing in Quote service.
        if (!is_null($vat = $this->getOtherParameters('sender_vat'))) {
            $request->setVatNo($vat);
        }
        return $request;
    }

    /**
     * @return DCTToType
     */
    protected function _getTo()
    {
        $request = new DCTToType();
        $address = $this->getReceiverAddress();
        if ($address && !is_null($country = $address->getCountry())) {
            $request->setCountryCode($country->getIso2());
        }
        //Required for countries where DHL has suburb level capability variation. Please refer to the Reference Data (DHL Country).
        if ($address && !is_null($state = $address->getState())) {
            $request->setSuburb($state->getName());
        }
        if ($address && !is_null($city = $address->getCity())) {
            $request->setCity($city->getName());
        }
        if ($address) {
            $request->setPostalcode($address->getPostCode());
        }
//        $request->setVatNo('');

        return $request;
    }

    /**
     * @return DCTDutiableType|null
     */
    protected function _getDutiable()
    {
        $request = null;
        if (($da = $this->getDeclaredAmount()) > 0) {
            $request = new DCTDutiableType();
            $request->setDeclaredCurrency($this->getDeclaredCurrency());
            $request->setDeclaredValue($da);
        }
        return $request;
    }

    /**
     * @return BkgDetailsType
     */
    protected function _getBkgDetails()
    {
        $request = new BkgDetailsType();
        $request->setDate($this->getShipmentDate() ? $this->getShipmentDate() : Carbon::now());

        $request->addToNumberOfPieces($number_of_pieces = $this->getNumberOfPieces());
//        $request->setPaymentAccountNumber($this->getBillingAccountNumber());

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

        $convert = new Convert();
//        $request->setReadyTimeGMTOffset('+01:00');
        $request->setDimensionUnit(strtoupper($convert->validateLengthUnit($this->getDimensionUnit()))); //IN, CM
        $request->setWeightUnit(strtoupper($convert->validateWeightUnit($this->getWeightUnit()))); //KG, LB

        /** @var $pieces PieceBag */
        $pieces = $this->getPieces();
        if ($pieces->count()) {
            foreach ($pieces->all() as $item) {
                $piece = new PieceType();
                $piece->setPieceID($item->getId());
                if ($item->getHeight() && $item->getDepth() && $item->getWidth()) {
                    $piece->setHeight($convert->convertLengthUnit($item->getHeight(), $this->getDimensionUnit()));
                    $piece->setDepth($convert->convertLengthUnit($item->getDepth(), $this->getDimensionUnit()));
                    $piece->setWidth($convert->convertLengthUnit($item->getWidth(), $this->getDimensionUnit()));
                }
                $piece->setWeight($convert->convertWeightUnit($item->getWeight(), $this->getWeightUnit()));
                $request->addToPieces($piece);
            }
        } elseif($number_of_pieces == 1) {
            $piece = new PieceType();
            $piece->setWeight($this->getWeight());
            $piece->setPieceID(1);
            $request->addToPieces($piece);
        }

        $sender_address = $this->getSenderAddress();
        $request->setIsDutiable('N');
        $request->setPaymentCountryCode($sender_address->getCountry() ? $sender_address->getCountry()->getIso2() : null);
        if ($this->_getDutiable() && $sender_address && $country = $sender_address->getCountry()) {
            $receiver_address = $this->getReceiverAddress();
            if (!$this->getIsDocuments() && $receiver_address && $rcountry = $receiver_address->getCountry()) {
                $request->setIsDutiable($rcountry->getIso2() != $country->getIso2() ? 'Y' : 'N');
            }
        }

        if (($ia = $this->getInsuranceAmount()) > 0) {
            $request->setInsuredValue($ia);
            $request->setInsuredCurrency($this->getInsuranceCurrency());
        }

        // Request Paperless trade
        $qtd_shp_ex_chrg = new QtdShpExChrgType();
        $qtd_shp_ex_chrg->setSpecialServiceType('OSINFO');

        $qtd_shp = new QtdShpType();
        $qtd_shp->setQtdShpExChrg([$qtd_shp_ex_chrg]);

        $request->setQtdShp([$qtd_shp]);

        return $request;
    }
}