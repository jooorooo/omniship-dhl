<?php

namespace Dhl\DCTRequest;
use Dhl\Traits\Request;

/**
 * Class representing GetCapabilityAType
 */
class GetCapabilityAType
{

    use Request;

    /**
     * @property \Dhl\DataTypes\RequestType $request
     */
    private $request = null;

    /**
     * @property \Dhl\DCTRequestdatatypes\DCTFromType $from
     */
    private $from = null;

    /**
     * @property \Dhl\DCTRequestdatatypes\BkgDetailsType $bkgDetails
     */
    private $bkgDetails = null;

    /**
     * @property \Dhl\DCTRequestdatatypes\DCTToType $to
     */
    private $to = null;

    /**
     * @property \Dhl\DCTRequestdatatypes\DCTDutiableType $dutiable
     */
    private $dutiable = null;

    /**
     * Gets as request
     *
     * @return \Dhl\DataTypes\RequestType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \Dhl\DataTypes\RequestType $request
     * @return self
     */
    public function setRequest(\Dhl\DataTypes\RequestType $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as from
     *
     * @return \Dhl\DCTRequestdatatypes\DCTFromType
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets a new from
     *
     * @param \Dhl\DCTRequestdatatypes\DCTFromType $from
     * @return self
     */
    public function setFrom(\Dhl\DCTRequestdatatypes\DCTFromType $from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Gets as bkgDetails
     *
     * @return \Dhl\DCTRequestdatatypes\BkgDetailsType
     */
    public function getBkgDetails()
    {
        return $this->bkgDetails;
    }

    /**
     * Sets a new bkgDetails
     *
     * @param \Dhl\DCTRequestdatatypes\BkgDetailsType $bkgDetails
     * @return self
     */
    public function setBkgDetails(\Dhl\DCTRequestdatatypes\BkgDetailsType $bkgDetails)
    {
        $this->bkgDetails = $bkgDetails;
        return $this;
    }

    /**
     * Gets as to
     *
     * @return \Dhl\DCTRequestdatatypes\DCTToType
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets a new to
     *
     * @param \Dhl\DCTRequestdatatypes\DCTToType $to
     * @return self
     */
    public function setTo(\Dhl\DCTRequestdatatypes\DCTToType $to)
    {
        $this->to = $to;
        return $this;
    }

    /**
     * Gets as dutiable
     *
     * @return \Dhl\DCTRequestdatatypes\DCTDutiableType
     */
    public function getDutiable()
    {
        return $this->dutiable;
    }

    /**
     * Sets a new dutiable
     *
     * @param \Dhl\DCTRequestdatatypes\DCTDutiableType $dutiable
     * @return self
     */
    public function setDutiable(\Dhl\DCTRequestdatatypes\DCTDutiableType $dutiable)
    {
        $this->dutiable = $dutiable;
        return $this;
    }


}

