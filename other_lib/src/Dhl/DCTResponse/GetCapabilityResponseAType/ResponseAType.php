<?php

namespace Dhl\DCTResponse\GetCapabilityResponseAType;

/**
 * Class representing ResponseAType
 *
 * Generic response header
 */
class ResponseAType
{

    /**
     * @property \Dhl\ServiceHeaderType $serviceHeader
     */
    private $serviceHeader = null;

    /**
     * Gets as serviceHeader
     *
     * @return \Dhl\ServiceHeaderType
     */
    public function getServiceHeader()
    {
        return $this->serviceHeader;
    }

    /**
     * Sets a new serviceHeader
     *
     * @param \Dhl\ServiceHeaderType $serviceHeader
     * @return self
     */
    public function setServiceHeader(\Dhl\ServiceHeaderType $serviceHeader)
    {
        $this->serviceHeader = $serviceHeader;
        return $this;
    }


}

