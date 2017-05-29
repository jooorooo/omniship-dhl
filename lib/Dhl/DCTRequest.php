<?php

namespace Dhl;
use Dhl\Traits\Request;

/**
 * Class representing DCTRequest
 */
class DCTRequest
{

    use Request;

    /**
     * @var string
     * Service XSD
     */
    protected $serviceXSD = 'DCT-req';

    /**
     * Root element of Capability request
     *
     * @property \Dhl\DCTRequest\GetQuoteAType $getQuote
     */
    private $getQuote = null;

    /**
     * Root element of Capability request
     *
     * @property \Dhl\DCTRequest\GetCapabilityAType $getCapability
     */
    private $getCapability = null;

    /**
     * Gets as getQuote
     *
     * Root element of Capability request
     *
     * @return \Dhl\DCTRequest\GetQuoteAType
     */
    public function getGetQuote()
    {
        return $this->getQuote;
    }

    /**
     * Sets a new getQuote
     *
     * Root element of Capability request
     *
     * @param \Dhl\DCTRequest\GetQuoteAType $getQuote
     * @return self
     */
    public function setGetQuote(\Dhl\DCTRequest\GetQuoteAType $getQuote)
    {
        $this->getQuote = $getQuote;
        return $this;
    }

    /**
     * Gets as getCapability
     *
     * Root element of Capability request
     *
     * @return \Dhl\DCTRequest\GetCapabilityAType
     */
    public function getGetCapability()
    {
        return $this->getCapability;
    }

    /**
     * Sets a new getCapability
     *
     * Root element of Capability request
     *
     * @param \Dhl\DCTRequest\GetCapabilityAType $getCapability
     * @return self
     */
    public function setGetCapability(\Dhl\DCTRequest\GetCapabilityAType $getCapability)
    {
        $this->getCapability = $getCapability;
        return $this;
    }


}

