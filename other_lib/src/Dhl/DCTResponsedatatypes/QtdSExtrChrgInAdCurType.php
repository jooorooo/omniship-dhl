<?php

namespace Dhl\DCTResponsedatatypes;

/**
 * Class representing QtdSExtrChrgInAdCurType
 *
 * 
 * XSD Type: QtdSExtrChrgInAdCurType
 */
class QtdSExtrChrgInAdCurType
{

    /**
     * @property float $chargeValue
     */
    private $chargeValue = null;

    /**
     * @property float $chargeExchangeRate
     */
    private $chargeExchangeRate = null;

    /**
     * @property float $chargeTaxAmount
     */
    private $chargeTaxAmount = null;

    /**
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @property string $currencyRoleTypeCode
     */
    private $currencyRoleTypeCode = null;

    /**
     * @property \Dhl\DCTResponsedatatypes\ChargeTaxAmountDetType[] $chargeTaxAmountDet
     */
    private $chargeTaxAmountDet = array(
        
    );

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
     * Gets as chargeExchangeRate
     *
     * @return float
     */
    public function getChargeExchangeRate()
    {
        return $this->chargeExchangeRate;
    }

    /**
     * Sets a new chargeExchangeRate
     *
     * @param float $chargeExchangeRate
     * @return self
     */
    public function setChargeExchangeRate($chargeExchangeRate)
    {
        $this->chargeExchangeRate = $chargeExchangeRate;
        return $this;
    }

    /**
     * Gets as chargeTaxAmount
     *
     * @return float
     */
    public function getChargeTaxAmount()
    {
        return $this->chargeTaxAmount;
    }

    /**
     * Sets a new chargeTaxAmount
     *
     * @param float $chargeTaxAmount
     * @return self
     */
    public function setChargeTaxAmount($chargeTaxAmount)
    {
        $this->chargeTaxAmount = $chargeTaxAmount;
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
     * Gets as currencyRoleTypeCode
     *
     * @return string
     */
    public function getCurrencyRoleTypeCode()
    {
        return $this->currencyRoleTypeCode;
    }

    /**
     * Sets a new currencyRoleTypeCode
     *
     * @param string $currencyRoleTypeCode
     * @return self
     */
    public function setCurrencyRoleTypeCode($currencyRoleTypeCode)
    {
        $this->currencyRoleTypeCode = $currencyRoleTypeCode;
        return $this;
    }

    /**
     * Adds as chargeTaxAmountDet
     *
     * @return self
     * @param \Dhl\DCTResponsedatatypes\ChargeTaxAmountDetType $chargeTaxAmountDet
     */
    public function addToChargeTaxAmountDet(\Dhl\DCTResponsedatatypes\ChargeTaxAmountDetType $chargeTaxAmountDet)
    {
        $this->chargeTaxAmountDet[] = $chargeTaxAmountDet;
        return $this;
    }

    /**
     * isset chargeTaxAmountDet
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetChargeTaxAmountDet($index)
    {
        return isset($this->chargeTaxAmountDet[$index]);
    }

    /**
     * unset chargeTaxAmountDet
     *
     * @param scalar $index
     * @return void
     */
    public function unsetChargeTaxAmountDet($index)
    {
        unset($this->chargeTaxAmountDet[$index]);
    }

    /**
     * Gets as chargeTaxAmountDet
     *
     * @return \Dhl\DCTResponsedatatypes\ChargeTaxAmountDetType[]
     */
    public function getChargeTaxAmountDet()
    {
        return $this->chargeTaxAmountDet;
    }

    /**
     * Sets a new chargeTaxAmountDet
     *
     * @param \Dhl\DCTResponsedatatypes\ChargeTaxAmountDetType[] $chargeTaxAmountDet
     * @return self
     */
    public function setChargeTaxAmountDet(array $chargeTaxAmountDet)
    {
        $this->chargeTaxAmountDet = $chargeTaxAmountDet;
        return $this;
    }


}

