<?php

namespace Dhl\DataTypesGlobal;

/**
 * Class representing ExportLineItemType
 *
 * 
 * XSD Type: ExportLineItem
 */
class ExportLineItemType
{

    /**
     * @property integer $lineNumber
     */
    private $lineNumber = null;

    /**
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * @property string $quantityUnit
     */
    private $quantityUnit = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property float $value
     */
    private $value = null;

    /**
     * @property string $isDomestic
     */
    private $isDomestic = null;

    /**
     * @property string $commodityCode
     */
    private $commodityCode = null;

    /**
     * @property string $scheduleB
     */
    private $scheduleB = null;

    /**
     * @property string $eCCN
     */
    private $eCCN = null;

    /**
     * @property \Dhl\DataTypesGlobal\ExportLineItemType\WeightAType $weight
     */
    private $weight = null;

    /**
     * @property \Dhl\DataTypesGlobal\ExportLineItemType\LicenseAType $license
     */
    private $license = null;

    /**
     * license excption symbol
     *
     * @property string $licenseSymbol
     */
    private $licenseSymbol = null;

    /**
     * @property string $manufactureCountryCode
     */
    private $manufactureCountryCode = null;

    /**
     * Gets as lineNumber
     *
     * @return integer
     */
    public function getLineNumber()
    {
        return $this->lineNumber;
    }

    /**
     * Sets a new lineNumber
     *
     * @param integer $lineNumber
     * @return self
     */
    public function setLineNumber($lineNumber)
    {
        $this->lineNumber = $lineNumber;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as quantityUnit
     *
     * @return string
     */
    public function getQuantityUnit()
    {
        return $this->quantityUnit;
    }

    /**
     * Sets a new quantityUnit
     *
     * @param string $quantityUnit
     * @return self
     */
    public function setQuantityUnit($quantityUnit)
    {
        $this->quantityUnit = $quantityUnit;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as isDomestic
     *
     * @return string
     */
    public function getIsDomestic()
    {
        return $this->isDomestic;
    }

    /**
     * Sets a new isDomestic
     *
     * @param string $isDomestic
     * @return self
     */
    public function setIsDomestic($isDomestic)
    {
        $this->isDomestic = $isDomestic;
        return $this;
    }

    /**
     * Gets as commodityCode
     *
     * @return string
     */
    public function getCommodityCode()
    {
        return $this->commodityCode;
    }

    /**
     * Sets a new commodityCode
     *
     * @param string $commodityCode
     * @return self
     */
    public function setCommodityCode($commodityCode)
    {
        $this->commodityCode = $commodityCode;
        return $this;
    }

    /**
     * Gets as scheduleB
     *
     * @return string
     */
    public function getScheduleB()
    {
        return $this->scheduleB;
    }

    /**
     * Sets a new scheduleB
     *
     * @param string $scheduleB
     * @return self
     */
    public function setScheduleB($scheduleB)
    {
        $this->scheduleB = $scheduleB;
        return $this;
    }

    /**
     * Gets as eCCN
     *
     * @return string
     */
    public function getECCN()
    {
        return $this->eCCN;
    }

    /**
     * Sets a new eCCN
     *
     * @param string $eCCN
     * @return self
     */
    public function setECCN($eCCN)
    {
        $this->eCCN = $eCCN;
        return $this;
    }

    /**
     * Gets as weight
     *
     * @return \Dhl\DataTypesGlobal\ExportLineItemType\WeightAType
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * @param \Dhl\DataTypesGlobal\ExportLineItemType\WeightAType $weight
     * @return self
     */
    public function setWeight(\Dhl\DataTypesGlobal\ExportLineItemType\WeightAType $weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Gets as license
     *
     * @return \Dhl\DataTypesGlobal\ExportLineItemType\LicenseAType
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Sets a new license
     *
     * @param \Dhl\DataTypesGlobal\ExportLineItemType\LicenseAType $license
     * @return self
     */
    public function setLicense(\Dhl\DataTypesGlobal\ExportLineItemType\LicenseAType $license)
    {
        $this->license = $license;
        return $this;
    }

    /**
     * Gets as licenseSymbol
     *
     * license excption symbol
     *
     * @return string
     */
    public function getLicenseSymbol()
    {
        return $this->licenseSymbol;
    }

    /**
     * Sets a new licenseSymbol
     *
     * license excption symbol
     *
     * @param string $licenseSymbol
     * @return self
     */
    public function setLicenseSymbol($licenseSymbol)
    {
        $this->licenseSymbol = $licenseSymbol;
        return $this;
    }

    /**
     * Gets as manufactureCountryCode
     *
     * @return string
     */
    public function getManufactureCountryCode()
    {
        return $this->manufactureCountryCode;
    }

    /**
     * Sets a new manufactureCountryCode
     *
     * @param string $manufactureCountryCode
     * @return self
     */
    public function setManufactureCountryCode($manufactureCountryCode)
    {
        $this->manufactureCountryCode = $manufactureCountryCode;
        return $this;
    }


}

