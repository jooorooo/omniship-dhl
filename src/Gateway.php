<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 14:33 ч.
 */

namespace Omniship\Dhl;

use Carbon\Carbon;
use Omniship\Common\Address;
use Omniship\Dhl\Http\CancelBillOfLadingRequest;
use Omniship\Dhl\Http\CreateBillOfLadingRequest;
use Omniship\Dhl\Http\RequestCourierRequest;
use Omniship\Dhl\Http\ServicesRequest;
use Omniship\Dhl\Http\ShippingQuoteRequest;
use Omniship\Dhl\Http\TrackingParcelRequest;
use Omniship\Common\AbstractGateway;
use Omniship\Dhl\Http\TrackingParcelsRequest;
use Omniship\Dhl\Http\ValidateAddressRequest;
use Omniship\Dhl\Http\ValidateCredentialsRequest;

class Gateway extends AbstractGateway
{

    private $name = 'Dhl';

    const TRACKING_URL = 'http://www.dhl.com/en/express/tracking.html?AWB=%s&brand=DHL';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getDefaultParameters()
    {
        return array(
            'username' => '',
            'password' => '',
            'shipper_account_number' => '',
            'billing_account_number' => '',
            'duty_account_number' => '',
        );
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->getParameter('username');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setUsername($value)
    {
        return $this->setParameter('username', $value);
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->getParameter('password');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPassword($value)
    {
        return $this->setParameter('password', $value);
    }

    /**
     * @return mixed
     */
    public function getShipperAccountNumber()
    {
        return $this->getParameter('shipper_account_number');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setShipperAccountNumber($value)
    {
        return $this->setParameter('shipper_account_number', $value);
    }

    /**
     * @return mixed
     */
    public function getBillingAccountNumber()
    {
        return $this->getParameter('billing_account_number');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setBillingAccountNumber($value)
    {
        return $this->setParameter('billing_account_number', $value);
    }

    /**
     * @return mixed
     */
    public function getDutyAccountNumber()
    {
        return $this->getParameter('duty_account_number');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setDutyAccountNumber($value)
    {
        return $this->setParameter('duty_account_number', $value);
    }

    /**
     * @param array $parameters
     * @return ServicesRequest
     */
    public function getServices(array $parameters = [])
    {
        return $this->createRequest(ServicesRequest::class, $this->getParameters() + $parameters);
    }

    /**
     * @param array|ShippingQuoteRequest $parameters
     * @return ShippingQuoteRequest
     */
    public function getQuotes($parameters = [])
    {
        if ($parameters instanceof ShippingQuoteRequest) {
            return $parameters;
        }
        if (!is_array($parameters)) {
            $parameters = [];
        }
        return $this->createRequest(ShippingQuoteRequest::class, $this->getParameters() + $parameters);
    }

    /**
     * @param string $bol_id
     * @return TrackingParcelRequest
     */
    public function trackingParcel($bol_id)
    {
        return $this->createRequest(TrackingParcelRequest::class, $this->setBolId($bol_id)->getParameters());
    }

    /**
     * @param array $bol_ids
     * @return TrackingParcelsRequest
     */
    public function trackingParcels(array $bol_ids = [])
    {
        return $this->createRequest(TrackingParcelsRequest::class, $this->setBolId($bol_ids)->getParameters());
    }

    /**
     * @param array|CreateBillOfLadingRequest $parameters
     * @return CreateBillOfLadingRequest
     */
    public function createBillOfLading($parameters = [])
    {
        if ($parameters instanceof CreateBillOfLadingRequest) {
            return $parameters;
        }
        if (!is_array($parameters)) {
            $parameters = [];
        }
        return $this->createRequest(CreateBillOfLadingRequest::class, $this->getParameters() + $parameters);
    }

    /**
     * @param $bol_id
     * @param null $cancelComment
     * @return CancelBillOfLadingRequest
     */
//    public function cancelBillOfLading($bol_id, $cancelComment=null) {
//        $this->setBolId((float)$bol_id)->setCancelComment($cancelComment);
//        return $this->createRequest(CancelBillOfLadingRequest::class, $this->getParameters());
//    }

    /**
     * @param $bol_id
     * @param null|Carbon $date_start
     * @param null|Carbon $date_end
     * @return RequestCourierRequest
     */
    public function requestCourier($bol_id, Carbon $date_start = null, Carbon $date_end = null)
    {
        return $this->createRequest(RequestCourierRequest::class, $this->setBolId(array_map('floatval', (array)$bol_id))->setStartDate($date_start)->setEndDate($date_end)->getParameters());
    }

    /**
     * @param array $parameters
     * @param null|bool $test_mode
     *      if set null get mode from currently instance
     * @return ValidateCredentialsRequest
     */
    public function validateCredentials(array $parameters = [], $test_mode = null)
    {
        $instance = new Gateway();
        $instance->setConnectionOptions($this->getConnectionOptions());
        $instance->initialize($parameters);
        $instance->setTestMode(is_null($test_mode) ? $this->getTestMode() : (bool)$test_mode);
        return $instance->createRequest(ValidateCredentialsRequest::class, $instance->getParameters());
    }

    /**
     * @param Address $address
     * @return ValidateAddressRequest
     */
    public function validateAddress(Address $address)
    {
        return $this->createRequest(ValidateAddressRequest::class, $this->setAddress($address)->getParameters());
    }

    /**
     * @param $parcel_id
     * @return string
     */
    public function trackingUrl($parcel_id)
    {
        return sprintf(static::TRACKING_URL, $parcel_id);
    }

    /**
     * Supports Insurance
     *
     * @return boolean True if this gateway supports the Insurance
     */
    public function supportsInsurance()
    {
        return true;
    }

    /**
     * Supports Declared
     *
     * @return boolean True if this gateway supports the Declared
     */
    public function supportsDeclared()
    {
        return true;
    }

}