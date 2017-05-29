<?php

namespace Dhl\DCTResponsedatatypes;

/**
 * Class representing OrgnSvcAreaType
 *
 * 
 * XSD Type: OrgnSvcAreaType
 */
class OrgnSvcAreaType
{

    /**
     * @property string $facilityCode
     */
    private $facilityCode = null;

    /**
     * @property string $serviceAreaCode
     */
    private $serviceAreaCode = null;

    /**
     * Gets as facilityCode
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
     * @param string $facilityCode
     * @return self
     */
    public function setFacilityCode($facilityCode)
    {
        $this->facilityCode = $facilityCode;
        return $this;
    }

    /**
     * Gets as serviceAreaCode
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
     * @param string $serviceAreaCode
     * @return self
     */
    public function setServiceAreaCode($serviceAreaCode)
    {
        $this->serviceAreaCode = $serviceAreaCode;
        return $this;
    }


}

