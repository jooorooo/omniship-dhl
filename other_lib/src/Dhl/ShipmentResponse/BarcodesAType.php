<?php

namespace Dhl\ShipmentResponse;

/**
 * Class representing BarcodesAType
 */
class BarcodesAType
{

    /**
     * @property mixed $aWBBarCode
     */
    private $aWBBarCode = null;

    /**
     * @property mixed $originDestnBarcode
     */
    private $originDestnBarcode = null;

    /**
     * @property mixed $clientIDBarCode
     */
    private $clientIDBarCode = null;

    /**
     * @property mixed $barCode2D
     */
    private $barCode2D = null;

    /**
     * @property mixed $dHLRoutingBarCode
     */
    private $dHLRoutingBarCode = null;

    /**
     * Gets as aWBBarCode
     *
     * @return mixed
     */
    public function getAWBBarCode()
    {
        return $this->aWBBarCode;
    }

    /**
     * Sets a new aWBBarCode
     *
     * @param mixed $aWBBarCode
     * @return self
     */
    public function setAWBBarCode($aWBBarCode)
    {
        $this->aWBBarCode = $aWBBarCode;
        return $this;
    }

    /**
     * Gets as originDestnBarcode
     *
     * @return mixed
     */
    public function getOriginDestnBarcode()
    {
        return $this->originDestnBarcode;
    }

    /**
     * Sets a new originDestnBarcode
     *
     * @param mixed $originDestnBarcode
     * @return self
     */
    public function setOriginDestnBarcode($originDestnBarcode)
    {
        $this->originDestnBarcode = $originDestnBarcode;
        return $this;
    }

    /**
     * Gets as clientIDBarCode
     *
     * @return mixed
     */
    public function getClientIDBarCode()
    {
        return $this->clientIDBarCode;
    }

    /**
     * Sets a new clientIDBarCode
     *
     * @param mixed $clientIDBarCode
     * @return self
     */
    public function setClientIDBarCode($clientIDBarCode)
    {
        $this->clientIDBarCode = $clientIDBarCode;
        return $this;
    }

    /**
     * Gets as barCode2D
     *
     * @return mixed
     */
    public function getBarCode2D()
    {
        return $this->barCode2D;
    }

    /**
     * Sets a new barCode2D
     *
     * @param mixed $barCode2D
     * @return self
     */
    public function setBarCode2D($barCode2D)
    {
        $this->barCode2D = $barCode2D;
        return $this;
    }

    /**
     * Gets as dHLRoutingBarCode
     *
     * @return mixed
     */
    public function getDHLRoutingBarCode()
    {
        return $this->dHLRoutingBarCode;
    }

    /**
     * Sets a new dHLRoutingBarCode
     *
     * @param mixed $dHLRoutingBarCode
     * @return self
     */
    public function setDHLRoutingBarCode($dHLRoutingBarCode)
    {
        $this->dHLRoutingBarCode = $dHLRoutingBarCode;
        return $this;
    }


}

