<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 12.5.2017 г.
 * Time: 18:07 ч.
 */

namespace Omniship\Dhl\Http;

use Carbon\Carbon;
use Omniship\Common\Component;
use Omniship\Common\EventBag;
use Omniship\Common\TrackingBag;

class TrackingParcelResponse extends AbstractResponse
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
        $result = new TrackingBag();
        if(!is_null($this->getCode())) {
            return $result;
        }

        if(!empty($this->getXml()->AWBInfo)) {
            foreach($this->getXml()->AWBInfo AS $quote) {
                $quote = json_decode(json_encode($shipment_info = $quote->ShipmentInfo), true);
                $result->add([
                    'id' => md5(json_encode([$quote['OriginServiceArea'], $quote['DestinationServiceArea'], $quote['ShipperName'], $quote['ShipmentDate']])),
                    'name' => $quote['OriginServiceArea']['Description'],
                    'events' => $this->_getEvents($shipment_info),
                    'shipment_date' => Carbon::createFromFormat('Y-m-d\TH:i:s', $quote['ShipmentDate']),
                    'estimated_delivery_date' => !empty($quote['EstDlvyDateUTC']) ? Carbon::createFromFormat('Y-m-d\TH:i:s', $quote['EstDlvyDateUTC'], 'UTC') : null,
                    'origin_service_area' => new Component(['id' => $quote['OriginServiceArea']['ServiceAreaCode'], 'name' => $quote['OriginServiceArea']['Description']]),
                    'destination_service_area' => new Component(['id' => $quote['DestinationServiceArea']['ServiceAreaCode'], 'name' => $quote['DestinationServiceArea']['Description']]),
                ]);
            }
        }
        return $result;
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
                $result->add(new Component([
                    'id' => (string)$event->ServiceEvent->EventCode,
                    'name' => (string)$event->ServiceEvent->Description,
                ]));
            }
        }
        return $result;
    }

}