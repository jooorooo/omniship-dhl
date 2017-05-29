<?php

namespace Dhl\DataTypesGlobal;
use Dhl\Traits\Request;

/**
 * Class representing ShipperType
 *
 * 
 * XSD Type: Shipper
 */
class ShipperType
{

    use Request;

    /**
     * Shipper's Account Number
     *
     * @property string $shipperID
     */
    private $shipperID = null;

    /**
     * @property string $companyName
     */
    private $companyName = null;

    /**
     * @property string $suiteDepartmentName
     */
    private $suiteDepartmentName = null;

    /**
     * @property string $registeredAccount
     */
    private $registeredAccount = null;

    /**
     * @property string[] $addressLine
     */
    private $addressLine = array(
        
    );

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property string $division
     */
    private $division = null;

    /**
     * @property string $divisionCode
     */
    private $divisionCode = null;

    /**
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * @property string $originServiceAreaCode
     */
    private $originServiceAreaCode = null;

    /**
     * @property string $originFacilityCode
     */
    private $originFacilityCode = null;

    /**
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * @property string $countryName
     */
    private $countryName = null;

    /**
     * @property string $federalTaxId
     */
    private $federalTaxId = null;

    /**
     * @property string $stateTaxId
     */
    private $stateTaxId = null;

    /**
     * @property \Dhl\DataTypesGlobal\ContactType $contact
     */
    private $contact = null;

    /**
     * @property string $suburb
     */
    private $suburb = null;

    /**
     * Gets as shipperID
     *
     * Shipper's Account Number
     *
     * @return string
     */
    public function getShipperID()
    {
        return $this->shipperID;
    }

    /**
     * Sets a new shipperID
     *
     * Shipper's Account Number
     *
     * @param string $shipperID
     * @return self
     */
    public function setShipperID($shipperID)
    {
        $this->shipperID = $shipperID;
        return $this;
    }

    /**
     * Gets as companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * @param string $companyName
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Gets as suiteDepartmentName
     *
     * @return string
     */
    public function getSuiteDepartmentName()
    {
        return $this->suiteDepartmentName;
    }

    /**
     * Sets a new suiteDepartmentName
     *
     * @param string $suiteDepartmentName
     * @return self
     */
    public function setSuiteDepartmentName($suiteDepartmentName)
    {
        $this->suiteDepartmentName = $suiteDepartmentName;
        return $this;
    }

    /**
     * Gets as registeredAccount
     *
     * @return string
     */
    public function getRegisteredAccount()
    {
        return $this->registeredAccount;
    }

    /**
     * Sets a new registeredAccount
     *
     * @param string $registeredAccount
     * @return self
     */
    public function setRegisteredAccount($registeredAccount)
    {
        $this->registeredAccount = $registeredAccount;
        return $this;
    }

    /**
     * Adds as addressLine
     *
     * @return self
     * @param string $addressLine
     */
    public function addToAddressLine($addressLine)
    {
        $this->addressLine[] = $addressLine;
        return $this;
    }

    /**
     * isset addressLine
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddressLine($index)
    {
        return isset($this->addressLine[$index]);
    }

    /**
     * unset addressLine
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddressLine($index)
    {
        unset($this->addressLine[$index]);
    }

    /**
     * Gets as addressLine
     *
     * @return string[]
     */
    public function getAddressLine()
    {
        return $this->addressLine;
    }

    /**
     * Sets a new addressLine
     *
     * @param string $addressLine
     * @return self
     */
    public function setAddressLine(array $addressLine)
    {
        $this->addressLine = $addressLine;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as division
     *
     * @return string
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Sets a new division
     *
     * @param string $division
     * @return self
     */
    public function setDivision($division)
    {
        $this->division = $division;
        return $this;
    }

    /**
     * Gets as divisionCode
     *
     * @return string
     */
    public function getDivisionCode()
    {
        return $this->divisionCode;
    }

    /**
     * Sets a new divisionCode
     *
     * @param string $divisionCode
     * @return self
     */
    public function setDivisionCode($divisionCode)
    {
        $this->divisionCode = $divisionCode;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as originServiceAreaCode
     *
     * @return string
     */
    public function getOriginServiceAreaCode()
    {
        return $this->originServiceAreaCode;
    }

    /**
     * Sets a new originServiceAreaCode
     *
     * @param string $originServiceAreaCode
     * @return self
     */
    public function setOriginServiceAreaCode($originServiceAreaCode)
    {
        $this->originServiceAreaCode = $originServiceAreaCode;
        return $this;
    }

    /**
     * Gets as originFacilityCode
     *
     * @return string
     */
    public function getOriginFacilityCode()
    {
        return $this->originFacilityCode;
    }

    /**
     * Sets a new originFacilityCode
     *
     * @param string $originFacilityCode
     * @return self
     */
    public function setOriginFacilityCode($originFacilityCode)
    {
        $this->originFacilityCode = $originFacilityCode;
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

    /**
     * Gets as countryName
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Sets a new countryName
     *
     * @param string $countryName
     * @return self
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * Gets as federalTaxId
     *
     * @return string
     */
    public function getFederalTaxId()
    {
        return $this->federalTaxId;
    }

    /**
     * Sets a new federalTaxId
     *
     * @param string $federalTaxId
     * @return self
     */
    public function setFederalTaxId($federalTaxId)
    {
        $this->federalTaxId = $federalTaxId;
        return $this;
    }

    /**
     * Gets as stateTaxId
     *
     * @return string
     */
    public function getStateTaxId()
    {
        return $this->stateTaxId;
    }

    /**
     * Sets a new stateTaxId
     *
     * @param string $stateTaxId
     * @return self
     */
    public function setStateTaxId($stateTaxId)
    {
        $this->stateTaxId = $stateTaxId;
        return $this;
    }

    /**
     * Gets as contact
     *
     * @return \Dhl\DataTypesGlobal\ContactType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * @param \Dhl\DataTypesGlobal\ContactType $contact
     * @return self
     */
    public function setContact(\Dhl\DataTypesGlobal\ContactType $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as suburb
     *
     * @return string
     */
    public function getSuburb()
    {
        return $this->suburb;
    }

    /**
     * Sets a new suburb
     *
     * @param string $suburb
     * @return self
     */
    public function setSuburb($suburb)
    {
        $this->suburb = $suburb;
        return $this;
    }


}

