<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Dhl\Http;

use Carbon\Carbon;
use Dhl\CancelPURequest;

class CancelBillOfLadingRequest extends AbstractRequest
{
    /**
     * @return CancelPURequest
     */
    public function getData() {
        $cancel_request = new CancelPURequest();
        $cancel_request->setRequest($this->getHeaderRequestTypeGlobal());
        $cancel_request->setRegionCode($this->getOtherParameters('region') ? : 'AM');
        $cancel_request->setConfirmationNumber($this->getBolId());
        $cancel_request->setRequestorName('CLOUDCART');
        $cancel_request->setCountryCode('CA');
        $cancel_request->setPickupDate(Carbon::now());
        $cancel_request->setReason('007');
        $cancel_request->setCancelTime(Carbon::now()->format('H:i'));

        return $cancel_request;
    }

    /**
     * @param $data
     * @return CancelBillOfLadingResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new CancelBillOfLadingResponse($this, $data);
    }

}