<?php

namespace Dhl\DataTypes;

/**
 * Class representing PlaceType
 *
 * 
 * XSD Type: Place
 */
class PlaceType
{

    /**
     * @property string $residenceOrBusiness
     */
    private $residenceOrBusiness = null;

    /**
     * @property string $companyName
     */
    private $companyName = null;

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
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * @property string $divisionCode
     */
    private $divisionCode = null;

    /**
     * @property string $division
     */
    private $division = null;

    /**
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * Gets as residenceOrBusiness
     *
     * @return string
     */
    public function getResidenceOrBusiness()
    {
        return $this->residenceOrBusiness;
    }

    /**
     * Sets a new residenceOrBusiness
     *
     * @param string $residenceOrBusiness
     * @return self
     */
    public function setResidenceOrBusiness($residenceOrBusiness)
    {
        $this->residenceOrBusiness = $residenceOrBusiness;
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


}

