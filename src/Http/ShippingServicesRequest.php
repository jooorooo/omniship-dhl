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
use Omniship\Common\ItemBag;

class ShippingServicesRequest extends AbstractRequest
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
        if(!is_null($dutiable = $this->_getDutiable())) {
            $quote->setDutiable($dutiable);
        }

        $request = new DCTRequest();
        $request->setGetQuote($quote);

        return $request;
    }

    /**
     * @param $data
     * @return ShippingServicesResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new ShippingServicesResponse($this, $data);
    }

    /**
     * @return DCTFromType
     */
    protected function _getFrom() {
        $request = new DCTFromType();
        $address = $this->getSenderAddress();
        if($address && !is_null($country = $address->getCountry())) {
            $request->setCountryCode($country->getIso2());
        }
        if($address && !is_null($city = $address->getCity())) {
            $request->setCity($city->getName());
        }
        if($address) {
            $request->setPostalcode($address->getPostCode());
        }
//        $request->setSuburb();
//        $request->setVatNo();
        return $request;
    }

    /**
     * @return DCTToType
     */
    protected function _getTo() {
        $request = new DCTToType();
        if(!is_null($country = $this->getReceiverAddress()->getCountry())) {
            $request->setCountryCode($country->getIso2());
        }
        if(!is_null($city = $this->getReceiverAddress()->getCity())) {
            $request->setCity($city->getName());
        }
        $request->setPostalcode($this->getReceiverAddress()->getPostCode());
//        $request->setSuburb();
//        $request->setVatNo();
        return $request;
    }

    /**
     * @return DCTDutiableType|null
     */
    protected function _getDutiable() {
        $da = $this->getDeclaredAmount();
        $request = null;
        if($da && $da > 0) {
            $request = new DCTDutiableType();
            $request->setDeclaredCurrency($this->getDeclaredCurrency());
            $request->setDeclaredValue($da);
        }
        return $request;
    }

    /**
     * @return BkgDetailsType
     */
    protected function _getBkgDetails() {
        $request = new BkgDetailsType();
        $request->setDate($this->getShipmentDate() ? $this->getShipmentDate() : Carbon::now());

        /** @var $items ItemBag */
        $items = $this->getItems();
        if($items->count()) {
            $total = 0;
            foreach($items->all() as $item) {
                for($i=1; $i<=$item->getQuantity(); $i++) {
                    $piece = new PieceType();
                    $piece->setPieceID($item->getId());
                    if ($item->getHeight() && $item->getDepth() && $item->getWidth()) {
                        $piece->setHeight($item->getHeight());
                        $piece->setDepth($item->getDepth());
                        $piece->setWidth($item->getWidth());
                    }
                    $piece->setWeight($item->getWeight());
                    $request->addToPieces($piece);
                    $total++;
                }
            }
            $request->setNumberOfPieces([$total]);
        }

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

//        $request->setReadyTimeGMTOffset('+01:00');
        $request->setDimensionUnit($this->getDimensionUnit()); //IN, CM
        $request->setWeightUnit($this->getWeightUnit()); //KG, LB

        $sender_address = $this->getReceiverAddress();
        $request->setIsDutiable('N');
        if($sender_address && $country = $sender_address->getCountry()) {
            $request->setPaymentCountryCode($country->getIso2());
            $receiver_address = $this->getReceiverAddress();
            if($receiver_address && $rcountry = $receiver_address->getCountry()) {
                $request->setIsDutiable($rcountry->getIso2() != $country->getIso2() ? 'Y' : 'N');
            }
        }

        if(($cod = $this->getCashOnDeliveryAmount()) > 0) {
//            $request->setCODAccountNumber($this->getBillingAccountNumber());
            $request->setCODAmount($cod);
            $request->setCODCurrencyCode($this->getCashOnDeliveryCurrency());
        }

        if(($ia = $this->getInsuranceAmount()) > 0) {
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