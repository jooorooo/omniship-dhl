<?php

namespace Dhl\RatingDataTypes;

/**
 * Class representing RatingConsigneeType
 *
 * 
 * XSD Type: RatingConsignee
 */
class RatingConsigneeType
{

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * State Name. Must be filled in if the country is
     *  USA
     *
     * @property string $division
     */
    private $division = null;

    /**
     * Must be filled in if country code is USA
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
     * State Name. Must be filled in if the country is
     *  USA
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
     * State Name. Must be filled in if the country is
     *  USA
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
     * Must be filled in if country code is USA
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
     * Must be filled in if country code is USA
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

