<?php

namespace Dhl;

use Dhl\DataTypesGlobal\RequestType;
use Dhl\PickupDataTypesGlobal\RequestorType;
use Dhl\Traits\Request;
use Dhl\PickupDataTypesGlobal\PlaceType;
use Dhl\PickupDataTypesGlobal\PickupType;
use Dhl\PickupDataTypesGlobal\ContactType;
use Dhl\PickupDataTypesGlobal\ShipmentDetailsType;

/**
 * Class representing BookPURequest
 */
class BookPURequest
{

    use Request;

    /**
     * @property float $schemaVersion
     */
    private $schemaVersion = '2.0';

    /**
     * @property RequestType $request
     */
    private $request = null;

    /**
     * @property string $regionCode
     */
    private $regionCode = null;

    /**
     * @property RequestorType $requestor
     */
    private $requestor = null;

    /**
     * @property PlaceType $place
     */
    private $place = null;

    /**
     * @property PickupType $pickup
     */
    private $pickup = null;

    /**
     * @property ContactType $pickupContact
     */
    private $pickupContact = null;

    /**
     * @property ShipmentDetailsType[] $shipmentDetails
     */
    private $shipmentDetails = array(
        
    );

    /**
     * Gets as schemaVersion
     *
     * @return float
     */
    public function getSchemaVersion()
    {
        return $this->schemaVersion;
    }

    /**
     * Sets a new schemaVersion
     *
     * @param float $schemaVersion
     * @return self
     */
    public function setSchemaVersion($schemaVersion)
    {
        $this->schemaVersion = $schemaVersion;
        return $this;
    }

    /**
     * Gets as request
     *
     * @return RequestType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param RequestType $request
     * @return self
     */
    public function setRequest(RequestType $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as regionCode
     *
     * @return string
     */
    public function getRegionCode()
    {
        return $this->regionCode;
    }

    /**
     * Sets a new regionCode
     *
     * @param string $regionCode
     * @return self
     */
    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;
        return $this;
    }

    /**
     * Gets as requestor
     *
     * @return RequestorType
     */
    public function getRequestor()
    {
        return $this->requestor;
    }

    /**
     * Sets a new requestor
     *
     * @param RequestorType $requestor
     * @return self
     */
    public function setRequestor(RequestorType $requestor)
    {
        $this->requestor = $requestor;
        return $this;
    }

    /**
     * Gets as place
     *
     * @return PlaceType
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Sets a new place
     *
     * @param PlaceType $place
     * @return self
     */
    public function setPlace(PlaceType $place)
    {
        $this->place = $place;
        return $this;
    }

    /**
     * Gets as pickup
     *
     * @return PickupType
     */
    public function getPickup()
    {
        return $this->pickup;
    }

    /**
     * Sets a new pickup
     *
     * @param PickupType $pickup
     * @return self
     */
    public function setPickup(PickupType $pickup)
    {
        $this->pickup = $pickup;
        return $this;
    }

    /**
     * Gets as pickupContact
     *
     * @return ContactType
     */
    public function getPickupContact()
    {
        return $this->pickupContact;
    }

    /**
     * Sets a new pickupContact
     *
     * @param ContactType $pickupContact
     * @return self
     */
    public function setPickupContact(ContactType $pickupContact)
    {
        $this->pickupContact = $pickupContact;
        return $this;
    }

    /**
     * Adds as shipmentDetails
     *
     * @return self
     * @param ShipmentDetailsType $shipmentDetails
     */
    public function addToShipmentDetails(ShipmentDetailsType $shipmentDetails)
    {
        $this->shipmentDetails[] = $shipmentDetails;
        return $this;
    }

    /**
     * isset shipmentDetails
     *
     * @param mixed $index
     * @return boolean
     */
    public function issetShipmentDetails($index)
    {
        return isset($this->shipmentDetails[$index]);
    }

    /**
     * unset shipmentDetails
     *
     * @param mixed $index
     * @return void
     */
    public function unsetShipmentDetails($index)
    {
        if($this->issetShipmentDetails($index)) {
            unset($this->shipmentDetails[$index]);
        }
    }

    /**
     * Gets as shipmentDetails
     *
     * @return ShipmentDetailsType[]
     */
    public function getShipmentDetails()
    {
        return $this->shipmentDetails;
    }

    /**
     * Sets a new shipmentDetails
     *
     * @param ShipmentDetailsType[] $shipmentDetails
     * @return self
     */
    public function setShipmentDetails(array $shipmentDetails)
    {
        $this->shipmentDetails = $shipmentDetails;
        return $this;
    }


}

