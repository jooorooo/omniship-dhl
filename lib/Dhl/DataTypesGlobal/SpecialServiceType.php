<?php

namespace Dhl\DataTypesGlobal;
use Dhl\Traits\Request;

/**
 * Class representing SpecialServiceType
 *
 * 
 * XSD Type: SpecialService
 */
class SpecialServiceType
{

    use Request;

    /**
     * @property string $specialServiceType
     */
    private $specialServiceType = null;

    /**
     * @property string $communicationAddress
     */
    private $communicationAddress = null;

    /**
     * @property string $communicationType
     */
    private $communicationType = null;

    /**
     * @property float $chargeValue
     */
    private $chargeValue = null;

    /**
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @property string $isWaived
     */
    private $isWaived = null;

    /**
     * Gets as specialServiceType
     *
     * @return string
     */
    public function getSpecialServiceType()
    {
        return $this->specialServiceType;
    }

    /**
     * Sets a new specialServiceType
     *
     * @param string $specialServiceType
     * @return self
     */
    public function setSpecialServiceType($specialServiceType)
    {
        $this->specialServiceType = $specialServiceType;
        return $this;
    }

    /**
     * Gets as communicationAddress
     *
     * @return string
     */
    public function getCommunicationAddress()
    {
        return $this->communicationAddress;
    }

    /**
     * Sets a new communicationAddress
     *
     * @param string $communicationAddress
     * @return self
     */
    public function setCommunicationAddress($communicationAddress)
    {
        $this->communicationAddress = $communicationAddress;
        return $this;
    }

    /**
     * Gets as communicationType
     *
     * @return string
     */
    public function getCommunicationType()
    {
        return $this->communicationType;
    }

    /**
     * Sets a new communicationType
     *
     * @param string $communicationType
     * @return self
     */
    public function setCommunicationType($communicationType)
    {
        $this->communicationType = $communicationType;
        return $this;
    }

    /**
     * Gets as chargeValue
     *
     * @return float
     */
    public function getChargeValue()
    {
        return $this->chargeValue;
    }

    /**
     * Sets a new chargeValue
     *
     * @param float $chargeValue
     * @return self
     */
    public function setChargeValue($chargeValue)
    {
        $this->chargeValue = $chargeValue;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as isWaived
     *
     * @return string
     */
    public function getIsWaived()
    {
        return $this->isWaived;
    }

    /**
     * Sets a new isWaived
     *
     * @param string $isWaived
     * @return self
     */
    public function setIsWaived($isWaived)
    {
        $this->isWaived = $isWaived;
        return $this;
    }


}

