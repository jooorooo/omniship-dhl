<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Dhl\Http;

use Omniship\Common\ServiceBag;
use Omniship\Consts;
use Omniship\Helper\Collection;
use Omniship\Message\AbstractResponse AS BaseAbstractResponse;

class ServicesResponse extends BaseAbstractResponse
{
    /**
     * @return ServiceBag
     */
    public function getData()
    {
        $result = new ServiceBag();

        if($this->data instanceof Collection) {
            foreach($this->data AS $service) {
                $result->push([
                    'id' => $service['GlobalProductCode'],
                    'name' => $service['GlobalProductName'],
                    'support_fixed_time' => Consts::SERVICE_NULL,
                    'support_cash_on_delivery' => Consts::SERVICE_NULL,
                    'support_insurance' => Consts::SERVICE_NULL,
                    'support_back_documents' => Consts::SERVICE_NULL,
                    'support_back_receipt' => Consts::SERVICE_NULL,
                    'support_to_be_called' => Consts::SERVICE_NULL,
                ]);
            }
        }
        return $result;
    }
}