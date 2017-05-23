<?php

namespace Dhl\DataTypes;

/**
 * Class representing RequestType
 *
 * Generic request header
 * XSD Type: Request
 */
class RequestType
{

    /**
     * @property \Dhl\DataTypes\ServiceHeaderType $serviceHeader
     */
    private $serviceHeader = null;

    /**
     * Gets as serviceHeader
     *
     * @return \Dhl\DataTypes\ServiceHeaderType
     */
    public function getServiceHeader()
    {
        return $this->serviceHeader;
    }

    /**
     * Sets a new serviceHeader
     *
     * @param \Dhl\DataTypes\ServiceHeaderType $serviceHeader
     * @return self
     */
    public function setServiceHeader(\Dhl\DataTypes\ServiceHeaderType $serviceHeader)
    {
        $this->serviceHeader = $serviceHeader;
        return $this;
    }


}

