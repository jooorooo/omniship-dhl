<?php

namespace Dhl\DataTypes;

/**
 * Class representing ErrorResponseType
 *
 * Generic response header
 * XSD Type: ErrorResponse
 */
class ErrorResponseType
{

    /**
     * @property \Dhl\DataTypes\ServiceHeaderType $serviceHeader
     */
    private $serviceHeader = null;

    /**
     * @property \Dhl\DataTypes\StatusType $status
     */
    private $status = null;

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

    /**
     * Gets as status
     *
     * @return \Dhl\DataTypes\StatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param \Dhl\DataTypes\StatusType $status
     * @return self
     */
    public function setStatus(\Dhl\DataTypes\StatusType $status)
    {
        $this->status = $status;
        return $this;
    }


}

