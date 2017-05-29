<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Dhl\Http;

use Dhl\Entity\GB\ShipmentResponse;
use Omniship\Common\Bill\Create;

class CreateBillOfLadingResponse extends AbstractResponse
{

    /**
     * @return Create
     */
    public function getData()
    {
        $result = new Create();
        /** @var $xml ShipmentResponse */
        $xml = $this->getXml();
        if(!is_null($this->getCode()) || !empty($xml->Note->ActionNote) && (string)$xml->Note->ActionNote != 'Success') {
            return $result;
        }

        $result->setBolId($xml->AirwayBillNumber);
        $result->setBillOfLadingType($result::PDF);
        $result->setBillOfLadingSource($xml->LabelImage->OutputImage);
        $result->setEstimatedDeliveryDate(null);
        $result->setPickupDate($this->getRequest()->getTakingDate());
        $result->setTotal(!empty($xml->ShippingCharge) ? (float)$xml->ShippingCharge : null);

        return $result;
    }
}