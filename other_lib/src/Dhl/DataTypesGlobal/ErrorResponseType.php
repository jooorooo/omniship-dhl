<?php

namespace Dhl\DataTypesGlobal;

/**
 * Class representing ErrorResponseType
 *
 * Generic response header
 * XSD Type: ErrorResponse
 */
class ErrorResponseType
{

    /**
     * @property \Dhl\DataTypesGlobal\ServiceHeaderType $serviceHeader
     */
    private $serviceHeader = null;

    /**
     * @property \Dhl\DataTypesGlobal\StatusType $status
     */
    private $status = null;

    /**
     * Gets as serviceHeader
     *
     * @return \Dhl\DataTypesGlobal\ServiceHeaderType
     */
    public function getServiceHeader()
    {
        return $this->serviceHeader;
    }

    /**
     * Sets a new serviceHeader
     *
     * @param \Dhl\DataTypesGlobal\ServiceHeaderType $serviceHeader
     * @return self
     */
    public function setServiceHeader(\Dhl\DataTypesGlobal\ServiceHeaderType $serviceHeader)
    {
        $this->serviceHeader = $serviceHeader;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return \Dhl\DataTypesGlobal\StatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param \Dhl\DataTypesGlobal\StatusType $status
     * @return self
     */
    public function setStatus(\Dhl\DataTypesGlobal\StatusType $status)
    {
        $this->status = $status;
        return $this;
    }


}

