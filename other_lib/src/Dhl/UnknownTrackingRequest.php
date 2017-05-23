<?php

namespace Dhl;

/**
 * Class representing UnknownTrackingRequest
 */
class UnknownTrackingRequest
{

    /**
     * @property \Dhl\DataTypes\RequestType $request
     */
    private $request = null;

    /**
     * @property string $languageCode
     */
    private $languageCode = null;

    /**
     * @property integer $accountNumber
     */
    private $accountNumber = null;

    /**
     * @property \Dhl\DataTypes\ReferenceType[] $shipperReference
     */
    private $shipperReference = array(
        
    );

    /**
     * @property \Dhl\DataTypes\ShipmentDateType $shipmentDate
     */
    private $shipmentDate = null;

    /**
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * Gets as request
     *
     * @return \Dhl\DataTypes\RequestType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \Dhl\DataTypes\RequestType $request
     * @return self
     */
    public function setRequest(\Dhl\DataTypes\RequestType $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as languageCode
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Sets a new languageCode
     *
     * @param string $languageCode
     * @return self
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
        return $this;
    }

    /**
     * Gets as accountNumber
     *
     * @return integer
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets a new accountNumber
     *
     * @param integer $accountNumber
     * @return self
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Adds as shipperReference
     *
     * @return self
     * @param \Dhl\DataTypes\ReferenceType $shipperReference
     */
    public function addToShipperReference(\Dhl\DataTypes\ReferenceType $shipperReference)
    {
        $this->shipperReference[] = $shipperReference;
        return $this;
    }

    /**
     * isset shipperReference
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetShipperReference($index)
    {
        return isset($this->shipperReference[$index]);
    }

    /**
     * unset shipperReference
     *
     * @param scalar $index
     * @return void
     */
    public function unsetShipperReference($index)
    {
        unset($this->shipperReference[$index]);
    }

    /**
     * Gets as shipperReference
     *
     * @return \Dhl\DataTypes\ReferenceType[]
     */
    public function getShipperReference()
    {
        return $this->shipperReference;
    }

    /**
     * Sets a new shipperReference
     *
     * @param \Dhl\DataTypes\ReferenceType[] $shipperReference
     * @return self
     */
    public function setShipperReference(array $shipperReference)
    {
        $this->shipperReference = $shipperReference;
        return $this;
    }

    /**
     * Gets as shipmentDate
     *
     * @return \Dhl\DataTypes\ShipmentDateType
     */
    public function getShipmentDate()
    {
        return $this->shipmentDate;
    }

    /**
     * Sets a new shipmentDate
     *
     * @param \Dhl\DataTypes\ShipmentDateType $shipmentDate
     * @return self
     */
    public function setShipmentDate(\Dhl\DataTypes\ShipmentDateType $shipmentDate)
    {
        $this->shipmentDate = $shipmentDate;
        return $this;
    }

    /**
     * Gets as countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }


}

