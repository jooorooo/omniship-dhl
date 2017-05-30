<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Dhl\Http;

use Carbon\Carbon;
use Omniship\Common\ShippingServiceBag;
use Omniship\Dhl\Helper\Errors;

class ShippingServicesResponse extends AbstractResponse
{

    /**
     * @return ShippingServiceBag
     */
    public function getData()
    {
        $result = new ShippingServiceBag();
        if(!is_null($this->getCode())) {
            return $result;
        }

        if(!empty($this->getXml()->GetQuoteResponse->BkgDetails->QtdShp)) {
            $bkg_details = $this->getXml()->GetQuoteResponse->BkgDetails;
            foreach($bkg_details->QtdShp AS $quote) {
                $quote = json_decode(json_encode($quote), true);
                if(!empty($quote['ShippingCharge'])) {
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
                        'exchange_rate' => $quote['ExchangeRate']
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
}