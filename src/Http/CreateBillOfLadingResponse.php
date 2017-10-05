<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Dhl\Http;

use SimpleXMLElement;
use Omniship\Common\Bill\Create;

class CreateBillOfLadingResponse extends AbstractResponse
{

    /**
     * @return Create
     */
    public function getData()
    {
        $result = new Create();
        /** @var $xml SimpleXMLElement */
        $xml = $this->getXml();
        if(!is_null($this->getCode()) || (!empty($xml->Note) && !empty($xml->Note->ActionNote) && (string)$xml->Note->ActionNote != 'Success')) {
            return $result;
        }

        $result->setBolId((string)$xml->AirwayBillNumber);
        $result->setBillOfLadingType($result::PDF);
        $result->setBillOfLadingSource((string)$xml->LabelImage->OutputImage);
        $result->setEstimatedDeliveryDate(null);
        $result->setPickupDate($this->getRequest()->getShipmentDate());
        $result->setTotal(!empty($xml->ShippingCharge) ? (float)$xml->ShippingCharge : null);
        $result->setInsurance(0);
        $result->setCashOnDelivery(0);
        $result->setCurrency((string)$xml->CurrencyCode);

        return $result;
    }
}