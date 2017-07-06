<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Dhl\Http;

use Dhl\BookPURequest;
use Dhl\PickupDataTypesGlobal\RequestorType;
use Dhl\PickupDataTypesGlobal\PlaceType;
use Dhl\PickupDataTypesGlobal\PickupType;
use Dhl\PickupDataTypesGlobal\ContactType;

class RequestCourierRequest extends AbstractRequest
{
    /**
     * @return BookPURequest
     */
    public function getData()
    {
        $request_courier = new BookPURequest();
        $request_courier->setRequest($this->getHeaderRequestTypeGlobal());

        $request_courier->setRegionCode($this->getOtherParameters('region') ? : 'AM');

        $requester = new RequestorType;
        $requester->setAccountType('D');
        $requester->setAccountNumber($this->getShipperAccountNumber());

        $request_courier->setRequestor($requester);
        if(!is_null($place = $this->_getPlace())) {
            $request_courier->setPlace($place);
        }
        if(!is_null($pickup = $this->_getPickup())) {
            $request_courier->setPickup($pickup);
        }
        if(!is_null($contact = $this->_getPickupContact())) {
            $request_courier->setPickupContact($contact);
        }

        return $request_courier;
    }

    /**
     * @param $data
     * @return CreateBillOfLadingResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new RequestCourierResponse($this, $data);
    }

    /**
     * @return ContactType
     */
    protected function _getPickupContact() {
        $request = new ContactType();
        $sender_address = $this->getAddress();
        if($sender_address) {
            $request->setPersonName($sender_address->getFullName());
        }
        $request->setPhone($sender_address->getPhone());
        return $request;
    }

    /**
     * @return PickupType
     */
    protected function _getPickup() {
        $request = new PickupType();
        $request->setPickupDate($this->getStartDate());
        $request->setReadyByTime($this->getStartDate()->format('H:i'));
        $request->setCloseTime($this->getEndDate()->format('H:i'));
        return $request;
    }

    /**
     * @return PlaceType|null
     */
    protected function _getPlace() {
        $request = new PlaceType();

        $request->setLocationType('C');

        $shipping_address = $this->getAddress();
        if(!$shipping_address) {
            return null;
        }
        $request->setCompanyName($shipping_address->getCompanyName() ?: $shipping_address->getFullName());
        if($line = $shipping_address->getAddress1()) {
            $request->setAddress1($line);
        }
        if($line = $shipping_address->getAddress2()) {
            $request->setAddress2($line);
        }

        if (!is_null($city = $shipping_address->getCity())) {
            $request->setCity($city->getName());
            $request->setPackageLocation($city->getName());
        }
        $request->setPostalCode($shipping_address->getPostCode());
        if (!is_null($country = $shipping_address->getCountry())) {
            $request->setCountryCode($country->getIso2());
        }

        return $request;
    }

}