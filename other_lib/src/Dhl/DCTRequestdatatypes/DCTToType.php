<?php

namespace Dhl\DCTRequestdatatypes;

/**
 * Class representing DCTToType
 *
 * 
 * XSD Type: DCTTo
 */
class DCTToType
{

    /**
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * @property string $postalcode
     */
    private $postalcode = null;

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property string $suburb
     */
    private $suburb = null;

    /**
     * @property string $vatNo
     */
    private $vatNo = null;

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
     * Gets as postalcode
     *
     * @return string
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * Sets a new postalcode
     *
     * @param string $postalcode
     * @return self
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;
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

    /**
     * Gets as vatNo
     *
     * @return string
     */
    public function getVatNo()
    {
        return $this->vatNo;
    }

    /**
     * Sets a new vatNo
     *
     * @param string $vatNo
     * @return self
     */
    public function setVatNo($vatNo)
    {
        $this->vatNo = $vatNo;
        return $this;
    }


}

