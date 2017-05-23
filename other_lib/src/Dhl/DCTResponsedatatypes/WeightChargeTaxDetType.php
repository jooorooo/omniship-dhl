<?php

namespace Dhl\DCTResponsedatatypes;

/**
 * Class representing WeightChargeTaxDetType
 *
 * 
 * XSD Type: WeightChargeTaxDetType
 */
class WeightChargeTaxDetType
{

    /**
     * @property float $taxTypeRate
     */
    private $taxTypeRate = null;

    /**
     * @property string $taxTypeCode
     */
    private $taxTypeCode = null;

    /**
     * @property float $weightChargeTax
     */
    private $weightChargeTax = null;

    /**
     * @property float $baseAmt
     */
    private $baseAmt = null;

    /**
     * Gets as taxTypeRate
     *
     * @return float
     */
    public function getTaxTypeRate()
    {
        return $this->taxTypeRate;
    }

    /**
     * Sets a new taxTypeRate
     *
     * @param float $taxTypeRate
     * @return self
     */
    public function setTaxTypeRate($taxTypeRate)
    {
        $this->taxTypeRate = $taxTypeRate;
        return $this;
    }

    /**
     * Gets as taxTypeCode
     *
     * @return string
     */
    public function getTaxTypeCode()
    {
        return $this->taxTypeCode;
    }

    /**
     * Sets a new taxTypeCode
     *
     * @param string $taxTypeCode
     * @return self
     */
    public function setTaxTypeCode($taxTypeCode)
    {
        $this->taxTypeCode = $taxTypeCode;
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
     * Gets as baseAmt
     *
     * @return float
     */
    public function getBaseAmt()
    {
        return $this->baseAmt;
    }

    /**
     * Sets a new baseAmt
     *
     * @param float $baseAmt
     * @return self
     */
    public function setBaseAmt($baseAmt)
    {
        $this->baseAmt = $baseAmt;
        return $this;
    }


}

