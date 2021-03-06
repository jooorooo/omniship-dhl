<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Dhl\Http;

use Carbon\Carbon;
use Omniship\Common\ShippingQuoteBag;
use Omniship\Consts;
use Omniship\Dhl\Helper\Data;
use Omniship\Dhl\Helper\Errors;

class ShippingQuoteResponse extends AbstractResponse
{

    /**
     * @return ShippingQuoteBag
     */
    public function getData()
    {
        $result = new ShippingQuoteBag();
        if(!is_null($this->getCode())) {
            return $result;
        }

        if(!empty($this->getXml()->GetQuoteResponse->BkgDetails->QtdShp)) {
            $bkg_details = $this->getXml()->GetQuoteResponse->BkgDetails;
            foreach($bkg_details->QtdShp AS $quote) {
                $quote = json_decode(json_encode($quote), true);
                if(!empty($quote['ShippingCharge']) && $quote['ShippingCharge'] > 0) {
                    if(!$this->allowedServices($quote['GlobalProductCode'])) {
                        continue;
                    }

                    $result->push([
                        'id' => $quote['GlobalProductCode'],
                        'name' => $quote['ProductShortName'],
                        'description' => $quote['LocalProductName'],
                        'price' => $quote['ShippingCharge'],
                        'pickup_date' => $quote['PickupDate'] ? Carbon::createFromFormat('Y-m-d', $quote['PickupDate'], $this->request->getSenderTimeZone()) : null,
                        'pickup_time' => $quote['PickupCutoffTime'] ? Carbon::createFromFormat($this->parseTime($quote['PickupCutoffTime']), $quote['PickupCutoffTime'], $this->request->getSenderTimeZone()) : null,
                        'delivery_date' => $quote['DeliveryDate'] ? Carbon::createFromFormat('Y-m-d', $quote['DeliveryDate'], $this->request->getReceiverTimeZone()) : null,
                        'delivery_time' => $quote['DeliveryTime'] ? Carbon::createFromFormat($this->parseTime($quote['DeliveryTime']), $quote['DeliveryTime'], $this->request->getReceiverTimeZone()) : null,
                        'currency' => $quote['CurrencyCode'],
                        'tax' => $quote['TotalTaxAmount'],
                        'insurance' => 0,
                        'cash_on_delivery' => 0,
                        'exchange_rate' => $quote['ExchangeRate'],
                        'payer' => $this->getRequest()->getPayer() ? : Consts::PAYER_SENDER,
                        'allowance_fixed_time_delivery' => $this->getRequest()->getGateway()->supportPriorityTime(),
                        'allowance_cash_on_delivery' => $this->getRequest()->getGateway()->supportsCashOnDelivery(),
                        'allowance_insurance' => $this->getRequest()->getGateway()->supportsInsurance()
                    ]);
                }
            }
        }
        return $result;
    }

    /**
     * @param $value
     * @return string
     */
    protected function parseTime($value) {
        if(preg_match('~^(P)?(T)?([\d]{1,2})(H)(([\d]{1,2})(M))?$~', $value, $match)) {
            return implode([
                $match[1] ? ('\\' . $match[1]) : '',
                $match[2] ? ('\\' . $match[2]) : '',
                'H\H',
                !empty($match[6]) ? ('i' . '\\' . $match[7]) : ''
            ]);
        }
        return '\P\TH\Hi\M';
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

    /**
     * @param $id
     * @return bool
     */
    protected function allowedServices($id) {
        $allowed_services = $this->getRequest()->getAllowedServices();
        if(is_null($allowed_services) || empty($allowed_services)) {
            return true;
        }
        return array_search($id, $allowed_services) !== false;
    }
}