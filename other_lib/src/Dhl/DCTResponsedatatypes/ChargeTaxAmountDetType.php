<?php

namespace Dhl\DCTResponsedatatypes;

/**
 * Class representing ChargeTaxAmountDetType
 *
 * 
 * XSD Type: ChargeTaxAmountDetType
 */
class ChargeTaxAmountDetType
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
     * @property float $taxAmount
     */
    private $taxAmount = null;

    /**
     * @property float $baseAmount
     */
    private $baseAmount = null;

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
     * Gets as taxAmount
     *
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Sets a new taxAmount
     *
     * @param float $taxAmount
     * @return self
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * Gets as baseAmount
     *
     * @return float
     */
    public function getBaseAmount()
    {
        return $this->baseAmount;
    }

    /**
     * Sets a new baseAmount
     *
     * @param float $baseAmount
     * @return self
     */
    public function setBaseAmount($baseAmount)
    {
        $this->baseAmount = $baseAmount;
        return $this;
    }


}

