<?php

namespace Dhl\PickupDataTypesGlobal;

/**
 * Class representing PlaceType
 *
 * Pickup place
 * XSD Type: Place
 */
class PlaceType
{

    /**
     * Type Of Location B=Business R=Residence C= Business/Residence
     *
     * @property string $locationType
     */
    private $locationType = null;

    /**
     * Unless location type is residence, company name is required
     *
     * @property string $companyName
     */
    private $companyName = null;

    /**
     * @property string $address1
     */
    private $address1 = null;

    /**
     * @property string $address2
     */
    private $address2 = null;

    /**
     * Example : front desk
     *
     * @property string $packageLocation
     */
    private $packageLocation = null;

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * two letter state code is required if location is within the US
     *
     * @property string $stateCode
     */
    private $stateCode = null;

    /**
     * @property string $divisionName
     */
    private $divisionName = null;

    /**
     * Two letter ISO country code
     *
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * Required if country is US
     *
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * Place route code, first 2 Uppercase charaters and follow by 2 digits
     *
     * @property string $routeCode
     */
    private $routeCode = null;

    /**
     * Gets as locationType
     *
     * Type Of Location B=Business R=Residence C= Business/Residence
     *
     * @return string
     */
    public function getLocationType()
    {
        return $this->locationType;
    }

    /**
     * Sets a new locationType
     *
     * Type Of Location B=Business R=Residence C= Business/Residence
     *
     * @param string $locationType
     * @return self
     */
    public function setLocationType($locationType)
    {
        $this->locationType = $locationType;
        return $this;
    }

    /**
     * Gets as companyName
     *
     * Unless location type is residence, company name is required
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
     * Unless location type is residence, company name is required
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
     * Gets as address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Sets a new address1
     *
     * @param string $address1
     * @return self
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * Gets as address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Sets a new address2
     *
     * @param string $address2
     * @return self
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
        return $this;
    }

    /**
     * Gets as packageLocation
     *
     * Example : front desk
     *
     * @return string
     */
    public function getPackageLocation()
    {
        return $this->packageLocation;
    }

    /**
     * Sets a new packageLocation
     *
     * Example : front desk
     *
     * @param string $packageLocation
     * @return self
     */
    public function setPackageLocation($packageLocation)
    {
        $this->packageLocation = $packageLocation;
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
     * Gets as stateCode
     *
     * two letter state code is required if location is within the US
     *
     * @return string
     */
    public function getStateCode()
    {
        return $this->stateCode;
    }

    /**
     * Sets a new stateCode
     *
     * two letter state code is required if location is within the US
     *
     * @param string $stateCode
     * @return self
     */
    public function setStateCode($stateCode)
    {
        $this->stateCode = $stateCode;
        return $this;
    }

    /**
     * Gets as divisionName
     *
     * @return string
     */
    public function getDivisionName()
    {
        return $this->divisionName;
    }

    /**
     * Sets a new divisionName
     *
     * @param string $divisionName
     * @return self
     */
    public function setDivisionName($divisionName)
    {
        $this->divisionName = $divisionName;
        return $this;
    }

    /**
     * Gets as countryCode
     *
     * Two letter ISO country code
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
     * Two letter ISO country code
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
     * Gets as postalCode
     *
     * Required if country is US
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
     * Required if country is US
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
     * Gets as routeCode
     *
     * Place route code, first 2 Uppercase charaters and follow by 2 digits
     *
     * @return string
     */
    public function getRouteCode()
    {
        return $this->routeCode;
    }

    /**
     * Sets a new routeCode
     *
     * Place route code, first 2 Uppercase charaters and follow by 2 digits
     *
     * @param string $routeCode
     * @return self
     */
    public function setRouteCode($routeCode)
    {
        $this->routeCode = $routeCode;
        return $this;
    }


}

