<?php

namespace Dhl;

/**
 * Class representing ModifyPURequest
 */
class ModifyPURequest
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
     * Confirmation number of the pickup that needs to be modified
     *
     * @property integer $confirmationNumber
     */
    private $confirmationNumber = null;

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
     * Contact information for pickup location
     *
     * @property \Dhl\PickupDataTypesGlobal\ContactType $pickupContact
     */
    private $pickupContact = null;

    /**
     * Origin Service Area
     *
     * @property string $originSvcArea
     */
    private $originSvcArea = null;

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
     * Gets as confirmationNumber
     *
     * Confirmation number of the pickup that needs to be modified
     *
     * @return integer
     */
    public function getConfirmationNumber()
    {
        return $this->confirmationNumber;
    }

    /**
     * Sets a new confirmationNumber
     *
     * Confirmation number of the pickup that needs to be modified
     *
     * @param integer $confirmationNumber
     * @return self
     */
    public function setConfirmationNumber($confirmationNumber)
    {
        $this->confirmationNumber = $confirmationNumber;
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
     * Contact information for pickup location
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
     * Contact information for pickup location
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
     * Gets as originSvcArea
     *
     * Origin Service Area
     *
     * @return string
     */
    public function getOriginSvcArea()
    {
        return $this->originSvcArea;
    }

    /**
     * Sets a new originSvcArea
     *
     * Origin Service Area
     *
     * @param string $originSvcArea
     * @return self
     */
    public function setOriginSvcArea($originSvcArea)
    {
        $this->originSvcArea = $originSvcArea;
        return $this;
    }


}

