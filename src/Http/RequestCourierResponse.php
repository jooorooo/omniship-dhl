<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Dhl\Http;

use Carbon\Carbon;
use Omniship\Common\RequestCourier;

class RequestCourierResponse extends AbstractResponse
{

    /**
     * @return bool
     */
    public function getData()
    {
        if(!is_null($this->getCode())) {
            return false;
        }

        $timezone = null;
        if(!is_null($address = $this->getRequest()->getAddress())) {
            $timezone = $address->getTimeZone();
        }
        
        $request = new RequestCourier([
            'request_id' => (string)$this->getXml()->ConfirmationNumber,
            'pickup_date' => Carbon::createFromFormat('H:i', (string)$this->getXml()->ReadyByTime, $timezone)
        ]);

        return $request;
    }

}