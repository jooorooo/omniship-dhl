<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 12.5.2017 г.
 * Time: 18:07 ч.
 */

namespace Omniship\Dhl\Http;

use Carbon\Carbon;
use Dhl\Entity\AM\TrackingResponse;
use Omniship\Common\Component;
use Omniship\Common\EventBag;
use Omniship\Common\TrackingBag;
use Omniship\Common\TrackingMultipleBag;
use Omniship\Dhl\Helper\Errors;

class TrackingParcelsResponse extends AbstractResponse
{

    /**
     * @var \SimpleXMLElement
     */
    protected $xml;

    /**
     * @return TrackingBag
     */
    public function getData()
    {
        $results = new TrackingMultipleBag();
        if(!is_null($this->getCode())) {
            return $results;
        }

        if(!empty($this->getXml()->AWBInfo)) {
            foreach($this->getXml()->AWBInfo AS $quote) {
                $bol_id = (string)$quote->AWBNumber;
                if($results->has($bol_id)) {
                    $result = $results->get($bol_id);
                } else {
                    $result = new TrackingBag();
                }
                if(!empty($quote->Status->Condition->ConditionCode)) {
                    $result->push([
                        'error' => (string)$quote->Status->Condition->ConditionData,
                        'error_code' => (string)$quote->Status->Condition->ConditionCode,
                    ]);
                } else {
                    $quote = json_decode(json_encode($shipment_info = $quote->ShipmentInfo), true);
                    $result->push([
                        'id' => md5(json_encode([$quote['OriginServiceArea'], $quote['DestinationServiceArea'], $quote['ShipperName'], $quote['ShipmentDate']])),
                        'name' => $quote['OriginServiceArea']['Description'],
                        'events' => $this->_getEvents($shipment_info),
                        'shipment_date' => Carbon::createFromFormat('Y-m-d\TH:i:s', $quote['ShipmentDate']),
                        'estimated_delivery_date' => !empty($quote['EstDlvyDateUTC']) ? Carbon::createFromFormat('Y-m-d\TH:i:s', $quote['EstDlvyDateUTC'], 'UTC') : null,
                        'origin_service_area' => new Component(['id' => $quote['OriginServiceArea']['ServiceAreaCode'], 'name' => $quote['OriginServiceArea']['Description']]),
                        'destination_service_area' => new Component(['id' => $quote['DestinationServiceArea']['ServiceAreaCode'], 'name' => $quote['DestinationServiceArea']['Description']]),
                    ]);
                }
                $results->put($bol_id, $result);
            }
        }
        return $results;
    }

    /**
     * @param \SimpleXMLElement $xml
     * @return EventBag
     */
    protected function _getEvents(\SimpleXMLElement $xml)
    {
        $result = new EventBag();
        if($xml->ShipmentEvent) {
            foreach($xml->ShipmentEvent AS $event) {
                $code = (string)$event->ServiceEvent->EventCode;
                $message = (string)$event->ServiceEvent->Description;
                if($code == 'OK') {
                    $message .= ' ' . (string)$xml->ConsigneeName;
                }
                $result->push(new Component([
                    'id' => $code,
                    'name' => $message,
                ]));
            }
        }
        return $result;
    }

}