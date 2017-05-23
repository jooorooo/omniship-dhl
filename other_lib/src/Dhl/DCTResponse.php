<?php

namespace Dhl;

/**
 * Class representing DCTResponse
 */
class DCTResponse
{

    /**
     * Root element of shipment validation request
     *
     * @property \Dhl\DCTResponse\GetQuoteResponseAType $getQuoteResponse
     */
    private $getQuoteResponse = null;

    /**
     * Root element of shipment validation request
     *
     * @property \Dhl\DCTResponse\GetCapabilityResponseAType $getCapabilityResponse
     */
    private $getCapabilityResponse = null;

    /**
     * Gets as getQuoteResponse
     *
     * Root element of shipment validation request
     *
     * @return \Dhl\DCTResponse\GetQuoteResponseAType
     */
    public function getGetQuoteResponse()
    {
        return $this->getQuoteResponse;
    }

    /**
     * Sets a new getQuoteResponse
     *
     * Root element of shipment validation request
     *
     * @param \Dhl\DCTResponse\GetQuoteResponseAType $getQuoteResponse
     * @return self
     */
    public function setGetQuoteResponse(\Dhl\DCTResponse\GetQuoteResponseAType $getQuoteResponse)
    {
        $this->getQuoteResponse = $getQuoteResponse;
        return $this;
    }

    /**
     * Gets as getCapabilityResponse
     *
     * Root element of shipment validation request
     *
     * @return \Dhl\DCTResponse\GetCapabilityResponseAType
     */
    public function getGetCapabilityResponse()
    {
        return $this->getCapabilityResponse;
    }

    /**
     * Sets a new getCapabilityResponse
     *
     * Root element of shipment validation request
     *
     * @param \Dhl\DCTResponse\GetCapabilityResponseAType $getCapabilityResponse
     * @return self
     */
    public function setGetCapabilityResponse(\Dhl\DCTResponse\GetCapabilityResponseAType $getCapabilityResponse)
    {
        $this->getCapabilityResponse = $getCapabilityResponse;
        return $this;
    }


}

