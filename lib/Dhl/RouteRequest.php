<?php

namespace Dhl;
use Dhl\Traits\Request;

/**
 * Class representing RouteRequest
 */
class RouteRequest
{

    use Request;

    /**
     * @property float $schemaVersion
     */
    private $schemaVersion = '1.0';

    /**
     * @property \Dhl\DataTypesGlobal\RequestType $request
     */
    private $request = null;

    /**
     * @property string $regionCode
     */
    private $regionCode = null;

    /**
     * Defines the type of routing to be done (O: Origin D: Destination)
     *
     * @property string $requestType
     */
    private $requestType = null;

    /**
     * @property string $address1
     */
    private $address1 = null;

    /**
     * @property string $address2
     */
    private $address2 = null;

    /**
     * @property string $address3
     */
    private $address3 = null;

    /**
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property string $division
     */
    private $division = null;

    /**
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * @property string $countryName
     */
    private $countryName = null;

    /**
     * @property string $originCountryCode
     */
    private $originCountryCode = null;

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
     * Gets as requestType
     *
     * Defines the type of routing to be done (O: Origin D: Destination)
     *
     * @return string
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * Sets a new requestType
     *
     * Defines the type of routing to be done (O: Origin D: Destination)
     *
     * @param string $requestType
     * @return self
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;
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
     * Gets as address3
     *
     * @return string
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * Sets a new address3
     *
     * @param string $address3
     * @return self
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;
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
     * Gets as originCountryCode
     *
     * @return string
     */
    public function getOriginCountryCode()
    {
        return $this->originCountryCode;
    }

    /**
     * Sets a new originCountryCode
     *
     * @param string $originCountryCode
     * @return self
     */
    public function setOriginCountryCode($originCountryCode)
    {
        $this->originCountryCode = $originCountryCode;
        return $this;
    }


}

