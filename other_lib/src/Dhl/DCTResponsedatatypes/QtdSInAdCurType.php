<?php

namespace Dhl\DCTResponsedatatypes;

/**
 * Class representing QtdSInAdCurType
 *
 * 
 * XSD Type: QtdSInAdCurType
 */
class QtdSInAdCurType
{

    /**
     * @property float $customsValue
     */
    private $customsValue = null;

    /**
     * @property float $exchangeRate
     */
    private $exchangeRate = null;

    /**
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @property string $currencyRoleTypeCode
     */
    private $currencyRoleTypeCode = null;

    /**
     * @property float $weightCharge
     */
    private $weightCharge = null;

    /**
     * @property float $totalAmount
     */
    private $totalAmount = null;

    /**
     * @property float $totalTaxAmount
     */
    private $totalTaxAmount = null;

    /**
     * @property float $weightChargeTax
     */
    private $weightChargeTax = null;

    /**
     * @property \Dhl\DCTResponsedatatypes\WeightChargeTaxDetType[] $weightChargeTaxDet
     */
    private $weightChargeTaxDet = array(
        
    );

    /**
     * Gets as customsValue
     *
     * @return float
     */
    public function getCustomsValue()
    {
        return $this->customsValue;
    }

    /**
     * Sets a new customsValue
     *
     * @param float $customsValue
     * @return self
     */
    public function setCustomsValue($customsValue)
    {
        $this->customsValue = $customsValue;
        return $this;
    }

    /**
     * Gets as exchangeRate
     *
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * @param float $exchangeRate
     * @return self
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
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
     * Gets as weightCharge
     *
     * @return float
     */
    public function getWeightCharge()
    {
        return $this->weightCharge;
    }

    /**
     * Sets a new weightCharge
     *
     * @param float $weightCharge
     * @return self
     */
    public function setWeightCharge($weightCharge)
    {
        $this->weightCharge = $weightCharge;
        return $this;
    }

    /**
     * Gets as totalAmount
     *
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets a new totalAmount
     *
     * @param float $totalAmount
     * @return self
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * Gets as totalTaxAmount
     *
     * @return float
     */
    public function getTotalTaxAmount()
    {
        return $this->totalTaxAmount;
    }

    /**
     * Sets a new totalTaxAmount
     *
     * @param float $totalTaxAmount
     * @return self
     */
    public function setTotalTaxAmount($totalTaxAmount)
    {
        $this->totalTaxAmount = $totalTaxAmount;
        return $this;
    }

    /**
     * Gets as weightChargeTax
     *
     * @return float
     */
    public function getWeightChargeTax()
    {
        return $this->weightChargeTax;
    }

    /**
     * Sets a new weightChargeTax
     *
     * @param float $weightChargeTax
     * @return self
     */
    public function setWeightChargeTax($weightChargeTax)
    {
        $this->weightChargeTax = $weightChargeTax;
        return $this;
    }

    /**
     * Adds as weightChargeTaxDet
     *
     * @return self
     * @param \Dhl\DCTResponsedatatypes\WeightChargeTaxDetType $weightChargeTaxDet
     */
    public function addToWeightChargeTaxDet(\Dhl\DCTResponsedatatypes\WeightChargeTaxDetType $weightChargeTaxDet)
    {
        $this->weightChargeTaxDet[] = $weightChargeTaxDet;
        return $this;
    }

    /**
     * isset weightChargeTaxDet
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWeightChargeTaxDet($index)
    {
        return isset($this->weightChargeTaxDet[$index]);
    }

    /**
     * unset weightChargeTaxDet
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWeightChargeTaxDet($index)
    {
        unset($this->weightChargeTaxDet[$index]);
    }

    /**
     * Gets as weightChargeTaxDet
     *
     * @return \Dhl\DCTResponsedatatypes\WeightChargeTaxDetType[]
     */
    public function getWeightChargeTaxDet()
    {
        return $this->weightChargeTaxDet;
    }

    /**
     * Sets a new weightChargeTaxDet
     *
     * @param \Dhl\DCTResponsedatatypes\WeightChargeTaxDetType[] $weightChargeTaxDet
     * @return self
     */
    public function setWeightChargeTaxDet(array $weightChargeTaxDet)
    {
        $this->weightChargeTaxDet = $weightChargeTaxDet;
        return $this;
    }


}

