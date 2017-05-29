<?php

namespace Dhl\DataTypesGlobal;

/**
 * Class representing ResponseType
 *
 * Generic response header
 * XSD Type: Response
 */
class ResponseType
{

    /**
     * @property \Dhl\DataTypesGlobal\ResponseServiceHeaderType $serviceHeader
     */
    private $serviceHeader = null;

    /**
     * Gets as serviceHeader
     *
     * @return \Dhl\DataTypesGlobal\ResponseServiceHeaderType
     */
    public function getServiceHeader()
    {
        return $this->serviceHeader;
    }

    /**
     * Sets a new serviceHeader
     *
     * @param \Dhl\DataTypesGlobal\ResponseServiceHeaderType $serviceHeader
     * @return self
     */
    public function setServiceHeader(\Dhl\DataTypesGlobal\ResponseServiceHeaderType $serviceHeader)
    {
        $this->serviceHeader = $serviceHeader;
        return $this;
    }


}

