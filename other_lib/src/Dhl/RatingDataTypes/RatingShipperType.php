<?php

namespace Dhl\RatingDataTypes;

/**
 * Class representing RatingShipperType
 *
 * 
 * XSD Type: RatingShipper
 */
class RatingShipperType
{

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * State name . T his field must be filled in if
     *  the country is USA
     *
     * @property string $division
     */
    private $division = null;

    /**
     * This field must be filled in if the counrty is
     *  USA
     *
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * @property string $countryCode
     */
    private $countryCode = null;

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
     * State name . T his field must be filled in if
     *  the country is USA
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
     * State name . T his field must be filled in if
     *  the country is USA
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
     * This field must be filled in if the counrty is
     *  USA
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
     * This field must be filled in if the counrty is
     *  USA
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

