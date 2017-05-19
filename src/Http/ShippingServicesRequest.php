<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Dhl\Http;

use Carbon\Carbon;
use Dhl\Datatype\AM\PieceType;
use Dhl\Entity\AM\GetQuote;
use Omniship\Common\ItemBag;

class ShippingServicesRequest extends AbstractRequest
{
    /**
     * @return GetQuote
     */
    public function getData() {
        $quote = new GetQuote();
        $quote->SiteID = $this->getUsername();
        $quote->Password = $this->getPassword();

        // Set values of the request
        $quote->MessageTime = Carbon::now()->format('Y-m-d\TH:i:sP');
        $quote->MessageReference = md5($this->getTransactionId());

        $quote->BkgDetails->Date = $this->getShipmentDate() ? $this->getShipmentDate()->format('Y-m-d') : Carbon::now()->format('Y-m-d');

        /** @var $items ItemBag */
        $items = $this->getItems();
        if($items) {
            foreach($items->all() as $item) {
                for($i=1; $i<=$item->getQuantity(); $i++) {
                    $piece = new PieceType();
                    $piece->PieceID = $item->getId();
                    if ($item->getHeight() && $item->getDepth() && $item->getWidth()) {
                        $piece->Height = $item->getHeight();
                        $piece->Depth = $item->getDepth();
                        $piece->Width = $item->getWidth();
                    }
                    $piece->Weight = $item->getWeight();
                    $quote->BkgDetails->addPiece($piece);
                }
            }
        }

        $quote->BkgDetails->ReadyTime = 'PT18H21M';
//        $quote->BkgDetails->ReadyTimeGMTOffset = '+01:00';
        $quote->BkgDetails->DimensionUnit = $this->getDimensionUnit();
        $quote->BkgDetails->WeightUnit = $this->getWeightUnit();
        $quote->BkgDetails->IsDutiable = $this->getDutiable() ? 'Y' : 'N';

        $quote->BkgDetails->PaymentCountryCode = $this->getReceiverAddress()->getCountry()->getIso2();

        if(($cod = $this->getCashOnDeliveryAmount()) > 0) {
//            $quote->BkgDetails->CODAccountNumber = '100000000001';
            $quote->BkgDetails->CODAmount = $cod;
            $quote->BkgDetails->CODCurrencyCode = $this->getCashOnDeliveryCurrency() ?: $this->getCurrency();
        }

        if(($ia = $this->getInsuranceAmount()) > 0) {
            $quote->BkgDetails->InsuredValue = $ia;
            $quote->BkgDetails->InsuredCurrency = $this->getInsuranceCurrency() ? : $this->getCurrency();
        }

        // Request Paperless trade
        $quote->BkgDetails->QtdShp->QtdShpExChrg->SpecialServiceType = 'OSINFO';

        $quote->From->CountryCode = $this->getSenderAddress()->getCountry()->getIso2();
        $quote->From->Postalcode = $this->getSenderAddress()->getPostCode();
        $quote->From->City = $this->getSenderAddress()->getCity()->getName();

        $quote->To->CountryCode = $this->getReceiverAddress()->getCountry()->getIso2();
        $quote->To->Postalcode = $this->getReceiverAddress()->getPostCode();
        $quote->To->City = $this->getReceiverAddress()->getCity()->getName();

        $da = $this->getDeclaredAmount();
        if($da && $da > 0) {
            $quote->Dutiable->DeclaredValue = $da;
            $quote->Dutiable->DeclaredCurrency = $this->getDeclaredCurrency() ? : $this->getCurrency();
        }

        return $quote;
    }

    /**
     * @param $data
     * @return ShippingServicesResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new ShippingServicesResponse($this, $data);
    }

}