<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 12.5.2017 г.
 * Time: 18:03 ч.
 */

namespace Omniship\Dhl\Http;

use Omniship\Dhl\Helper\Data;

class ServicesRequest extends AbstractRequest
{
    /**
     * @return array
     */
    public function getData() {
        return [];
    }

    /**
     * @param mixed $data
     * @return ServicesResponse
     */
    public function sendData($data) {
        return $this->createResponse(Data::globalProductCodes());
    }

    /**
     * @param $data
     * @return ServicesResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new ServicesResponse($this, $data);
    }
}