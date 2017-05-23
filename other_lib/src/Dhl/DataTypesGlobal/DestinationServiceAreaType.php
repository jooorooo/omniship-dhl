<?php

namespace Dhl\DataTypesGlobal;

/**
 * Class representing DestinationServiceAreaType
 *
 * 
 * XSD Type: DestinationServiceArea
 */
class DestinationServiceAreaType
{

    /**
     * three letter service area code
     *
     * @property string $serviceAreaCode
     */
    private $serviceAreaCode = null;

    /**
     * Detailed description for the Area code such as
     *  city, state,country etc
     *
     * @property string $description
     */
    private $description = null;

    /**
     * InBound Sort Code
     *
     * @property string $inboundSortCode
     */
    private $inboundSortCode = null;

    /**
     * Destination Facility Code
     *
     * @property string $facilityCode
     */
    private $facilityCode = null;

    /**
     * Gets as serviceAreaCode
     *
     * three letter service area code
     *
     * @return string
     */
    public function getServiceAreaCode()
    {
        return $this->serviceAreaCode;
    }

    /**
     * Sets a new serviceAreaCode
     *
     * three letter service area code
     *
     * @param string $serviceAreaCode
     * @return self
     */
    public function setServiceAreaCode($serviceAreaCode)
    {
        $this->serviceAreaCode = $serviceAreaCode;
        return $this;
    }

    /**
     * Gets as description
     *
     * Detailed description for the Area code such as
     *  city, state,country etc
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Detailed description for the Area code such as
     *  city, state,country etc
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as inboundSortCode
     *
     * InBound Sort Code
     *
     * @return string
     */
    public function getInboundSortCode()
    {
        return $this->inboundSortCode;
    }

    /**
     * Sets a new inboundSortCode
     *
     * InBound Sort Code
     *
     * @param string $inboundSortCode
     * @return self
     */
    public function setInboundSortCode($inboundSortCode)
    {
        $this->inboundSortCode = $inboundSortCode;
        return $this;
    }

    /**
     * Gets as facilityCode
     *
     * Destination Facility Code
     *
     * @return string
     */
    public function getFacilityCode()
    {
        return $this->facilityCode;
    }

    /**
     * Sets a new facilityCode
     *
     * Destination Facility Code
     *
     * @param string $facilityCode
     * @return self
     */
    public function setFacilityCode($facilityCode)
    {
        $this->facilityCode = $facilityCode;
        return $this;
    }


}

