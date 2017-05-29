<?php

namespace Dhl;

/**
 * Class representing RouteResponse
 */
class RouteResponse
{

    /**
     * @property \Dhl\DataTypesGlobal\ResponseType $response
     */
    private $response = null;

    /**
     * @property \Dhl\DataTypesGlobal\NoteType $note
     */
    private $note = null;

    /**
     * @property string $regionCode
     */
    private $regionCode = null;

    /**
     * @property string $gMTNegativeIndicator
     */
    private $gMTNegativeIndicator = null;

    /**
     * @property string $gMTOffset
     */
    private $gMTOffset = null;

    /**
     * @property \Dhl\DataTypesGlobal\ServiceAreaType $serviceArea
     */
    private $serviceArea = null;

    /**
     * Gets as response
     *
     * @return \Dhl\DataTypesGlobal\ResponseType
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * @param \Dhl\DataTypesGlobal\ResponseType $response
     * @return self
     */
    public function setResponse(\Dhl\DataTypesGlobal\ResponseType $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Gets as note
     *
     * @return \Dhl\DataTypesGlobal\NoteType
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * @param \Dhl\DataTypesGlobal\NoteType $note
     * @return self
     */
    public function setNote(\Dhl\DataTypesGlobal\NoteType $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as regionCode
     *
     * @return string
     */
    public function getRegionCode()
    {
        return $this->regionCode;
    }

    /**
     * Sets a new regionCode
     *
     * @param string $regionCode
     * @return self
     */
    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;
        return $this;
    }

    /**
     * Gets as gMTNegativeIndicator
     *
     * @return string
     */
    public function getGMTNegativeIndicator()
    {
        return $this->gMTNegativeIndicator;
    }

    /**
     * Sets a new gMTNegativeIndicator
     *
     * @param string $gMTNegativeIndicator
     * @return self
     */
    public function setGMTNegativeIndicator($gMTNegativeIndicator)
    {
        $this->gMTNegativeIndicator = $gMTNegativeIndicator;
        return $this;
    }

    /**
     * Gets as gMTOffset
     *
     * @return string
     */
    public function getGMTOffset()
    {
        return $this->gMTOffset;
    }

    /**
     * Sets a new gMTOffset
     *
     * @param string $gMTOffset
     * @return self
     */
    public function setGMTOffset($gMTOffset)
    {
        $this->gMTOffset = $gMTOffset;
        return $this;
    }

    /**
     * Gets as serviceArea
     *
     * @return \Dhl\DataTypesGlobal\ServiceAreaType
     */
    public function getServiceArea()
    {
        return $this->serviceArea;
    }

    /**
     * Sets a new serviceArea
     *
     * @param \Dhl\DataTypesGlobal\ServiceAreaType $serviceArea
     * @return self
     */
    public function setServiceArea(\Dhl\DataTypesGlobal\ServiceAreaType $serviceArea)
    {
        $this->serviceArea = $serviceArea;
        return $this;
    }


}

