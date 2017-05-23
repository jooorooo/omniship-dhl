<?php

namespace Dhl;

/**
 * Class representing BookPURequest
 */
class BookPURequest
{

    /**
     * @property float $schemaVersion
     */
    private $schemaVersion = null;

    /**
     * @property \Dhl\DataTypesGlobal\RequestType $request
     */
    private $request = null;

    /**
     * @property string $regionCode
     */
    private $regionCode = null;

    /**
     * @property \Dhl\PickupDataTypesGlobal\RequestorType $requestor
     */
    private $requestor = null;

    /**
     * @property \Dhl\PickupDataTypesGlobal\PlaceType $place
     */
    private $place = null;

    /**
     * @property \Dhl\PickupDataTypesGlobal\PickupType $pickup
     */
    private $pickup = null;

    /**
     * @property \Dhl\PickupDataTypesGlobal\ContactType $pickupContact
     */
    private $pickupContact = null;

    /**
     * @property \Dhl\PickupDataTypesGlobal\ShipmentDetailsType[] $shipmentDetails
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
     * @return \Dhl\DataTypesGlobal\RequestType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \Dhl\DataTypesGlobal\RequestType $request
     * @return self
     */
    public function setRequest(\Dhl\DataTypesGlobal\RequestType $request)
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
     * @return \Dhl\PickupDataTypesGlobal\RequestorType
     */
    public function getRequestor()
    {
        return $this->requestor;
    }

    /**
     * Sets a new requestor
     *
     * @param \Dhl\PickupDataTypesGlobal\RequestorType $requestor
     * @return self
     */
    public function setRequestor(\Dhl\PickupDataTypesGlobal\RequestorType $requestor)
    {
        $this->requestor = $requestor;
        return $this;
    }

    /**
     * Gets as place
     *
     * @return \Dhl\PickupDataTypesGlobal\PlaceType
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Sets a new place
     *
     * @param \Dhl\PickupDataTypesGlobal\PlaceType $place
     * @return self
     */
    public function setPlace(\Dhl\PickupDataTypesGlobal\PlaceType $place)
    {
        $this->place = $place;
        return $this;
    }

    /**
     * Gets as pickup
     *
     * @return \Dhl\PickupDataTypesGlobal\PickupType
     */
    public function getPickup()
    {
        return $this->pickup;
    }

    /**
     * Sets a new pickup
     *
     * @param \Dhl\PickupDataTypesGlobal\PickupType $pickup
     * @return self
     */
    public function setPickup(\Dhl\PickupDataTypesGlobal\PickupType $pickup)
    {
        $this->pickup = $pickup;
        return $this;
    }

    /**
     * Gets as pickupContact
     *
     * @return \Dhl\PickupDataTypesGlobal\ContactType
     */
    public function getPickupContact()
    {
        return $this->pickupContact;
    }

    /**
     * Sets a new pickupContact
     *
     * @param \Dhl\PickupDataTypesGlobal\ContactType $pickupContact
     * @return self
     */
    public function setPickupContact(\Dhl\PickupDataTypesGlobal\ContactType $pickupContact)
    {
        $this->pickupContact = $pickupContact;
        return $this;
    }

    /**
     * Adds as shipmentDetails
     *
     * @return self
     * @param \Dhl\PickupDataTypesGlobal\ShipmentDetailsType $shipmentDetails
     */
    public function addToShipmentDetails(\Dhl\PickupDataTypesGlobal\ShipmentDetailsType $shipmentDetails)
    {
        $this->shipmentDetails[] = $shipmentDetails;
        return $this;
    }

    /**
     * isset shipmentDetails
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetShipmentDetails($index)
    {
        return isset($this->shipmentDetails[$index]);
    }

    /**
     * unset shipmentDetails
     *
     * @param scalar $index
     * @return void
     */
    public function unsetShipmentDetails($index)
    {
        unset($this->shipmentDetails[$index]);
    }

    /**
     * Gets as shipmentDetails
     *
     * @return \Dhl\PickupDataTypesGlobal\ShipmentDetailsType[]
     */
    public function getShipmentDetails()
    {
        return $this->shipmentDetails;
    }

    /**
     * Sets a new shipmentDetails
     *
     * @param \Dhl\PickupDataTypesGlobal\ShipmentDetailsType[] $shipmentDetails
     * @return self
     */
    public function setShipmentDetails(array $shipmentDetails)
    {
        $this->shipmentDetails = $shipmentDetails;
        return $this;
    }


}

