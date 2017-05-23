<?php

namespace Dhl\DataTypes;

/**
 * Class representing OriginServiceAreaType
 *
 * 
 * XSD Type: OriginServiceArea
 */
class OriginServiceAreaType
{

    /**
     * three letter service area code
     *
     * @property string $serviceAreaCode
     */
    private $serviceAreaCode = null;

    /**
     * Detailed description for the Area code such as city, state,country etc
     *
     * @property string $description
     */
    private $description = null;

    /**
     * OutBound Sort Code
     *
     * @property string $outboundSortCode
     */
    private $outboundSortCode = null;

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
     * Detailed description for the Area code such as city, state,country etc
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
     * Detailed description for the Area code such as city, state,country etc
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
     * Gets as outboundSortCode
     *
     * OutBound Sort Code
     *
     * @return string
     */
    public function getOutboundSortCode()
    {
        return $this->outboundSortCode;
    }

    /**
     * Sets a new outboundSortCode
     *
     * OutBound Sort Code
     *
     * @param string $outboundSortCode
     * @return self
     */
    public function setOutboundSortCode($outboundSortCode)
    {
        $this->outboundSortCode = $outboundSortCode;
        return $this;
    }


}

