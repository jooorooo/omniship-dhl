<?php

namespace Dhl\DataTypesGlobal;

/**
 * Class representing ShipmentType
 *
 * 
 * XSD Type: Shipment
 */
class ShipmentType
{

    /**
     * @property float $weight
     */
    private $weight = null;

    /**
     * @property string $weightUnit
     */
    private $weightUnit = null;

    /**
     * @property \Dhl\DataTypesGlobal\PieceType[] $pieces
     */
    private $pieces = null;

    /**
     * @property string $doorTo
     */
    private $doorTo = null;

    /**
     * @property string $airwarBillNumber
     */
    private $airwarBillNumber = null;

    /**
     * @property string $accountType
     */
    private $accountType = null;

    /**
     * @property string $productType
     */
    private $productType = null;

    /**
     * @property string $globalProductType
     */
    private $globalProductType = null;

    /**
     * @property string $localProductType
     */
    private $localProductType = null;

    /**
     * @property \Dhl\DataTypesGlobal\CommodityType $commodity
     */
    private $commodity = null;

    /**
     * @property float $declaredValue
     */
    private $declaredValue = null;

    /**
     * @property string $declaredCurrency
     */
    private $declaredCurrency = null;

    /**
     * @property float $insuredValue
     */
    private $insuredValue = null;

    /**
     * @property string $insuredCurrency
     */
    private $insuredCurrency = null;

    /**
     * @property string $dimensionalUnit
     */
    private $dimensionalUnit = null;

    /**
     * @property float $dimensionalWeight
     */
    private $dimensionalWeight = null;

    /**
     * Gets as weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * @param float $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Gets as weightUnit
     *
     * @return string
     */
    public function getWeightUnit()
    {
        return $this->weightUnit;
    }

    /**
     * Sets a new weightUnit
     *
     * @param string $weightUnit
     * @return self
     */
    public function setWeightUnit($weightUnit)
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }

    /**
     * Adds as piece
     *
     * @return self
     * @param \Dhl\DataTypesGlobal\PieceType $piece
     */
    public function addToPieces(\Dhl\DataTypesGlobal\PieceType $piece)
    {
        $this->pieces[] = $piece;
        return $this;
    }

    /**
     * isset pieces
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPieces($index)
    {
        return isset($this->pieces[$index]);
    }

    /**
     * unset pieces
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPieces($index)
    {
        unset($this->pieces[$index]);
    }

    /**
     * Gets as pieces
     *
     * @return \Dhl\DataTypesGlobal\PieceType[]
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * Sets a new pieces
     *
     * @param \Dhl\DataTypesGlobal\PieceType[] $pieces
     * @return self
     */
    public function setPieces(array $pieces)
    {
        $this->pieces = $pieces;
        return $this;
    }

    /**
     * Gets as doorTo
     *
     * @return string
     */
    public function getDoorTo()
    {
        return $this->doorTo;
    }

    /**
     * Sets a new doorTo
     *
     * @param string $doorTo
     * @return self
     */
    public function setDoorTo($doorTo)
    {
        $this->doorTo = $doorTo;
        return $this;
    }

    /**
     * Gets as airwarBillNumber
     *
     * @return string
     */
    public function getAirwarBillNumber()
    {
        return $this->airwarBillNumber;
    }

    /**
     * Sets a new airwarBillNumber
     *
     * @param string $airwarBillNumber
     * @return self
     */
    public function setAirwarBillNumber($airwarBillNumber)
    {
        $this->airwarBillNumber = $airwarBillNumber;
        return $this;
    }

    /**
     * Gets as accountType
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Sets a new accountType
     *
     * @param string $accountType
     * @return self
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * Gets as productType
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Sets a new productType
     *
     * @param string $productType
     * @return self
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * Gets as globalProductType
     *
     * @return string
     */
    public function getGlobalProductType()
    {
        return $this->globalProductType;
    }

    /**
     * Sets a new globalProductType
     *
     * @param string $globalProductType
     * @return self
     */
    public function setGlobalProductType($globalProductType)
    {
        $this->globalProductType = $globalProductType;
        return $this;
    }

    /**
     * Gets as localProductType
     *
     * @return string
     */
    public function getLocalProductType()
    {
        return $this->localProductType;
    }

    /**
     * Sets a new localProductType
     *
     * @param string $localProductType
     * @return self
     */
    public function setLocalProductType($localProductType)
    {
        $this->localProductType = $localProductType;
        return $this;
    }

    /**
     * Gets as commodity
     *
     * @return \Dhl\DataTypesGlobal\CommodityType
     */
    public function getCommodity()
    {
        return $this->commodity;
    }

    /**
     * Sets a new commodity
     *
     * @param \Dhl\DataTypesGlobal\CommodityType $commodity
     * @return self
     */
    public function setCommodity(\Dhl\DataTypesGlobal\CommodityType $commodity)
    {
        $this->commodity = $commodity;
        return $this;
    }

    /**
     * Gets as declaredValue
     *
     * @return float
     */
    public function getDeclaredValue()
    {
        return $this->declaredValue;
    }

    /**
     * Sets a new declaredValue
     *
     * @param float $declaredValue
     * @return self
     */
    public function setDeclaredValue($declaredValue)
    {
        $this->declaredValue = $declaredValue;
        return $this;
    }

    /**
     * Gets as declaredCurrency
     *
     * @return string
     */
    public function getDeclaredCurrency()
    {
        return $this->declaredCurrency;
    }

    /**
     * Sets a new declaredCurrency
     *
     * @param string $declaredCurrency
     * @return self
     */
    public function setDeclaredCurrency($declaredCurrency)
    {
        $this->declaredCurrency = $declaredCurrency;
        return $this;
    }

    /**
     * Gets as insuredValue
     *
     * @return float
     */
    public function getInsuredValue()
    {
        return $this->insuredValue;
    }

    /**
     * Sets a new insuredValue
     *
     * @param float $insuredValue
     * @return self
     */
    public function setInsuredValue($insuredValue)
    {
        $this->insuredValue = $insuredValue;
        return $this;
    }

    /**
     * Gets as insuredCurrency
     *
     * @return string
     */
    public function getInsuredCurrency()
    {
        return $this->insuredCurrency;
    }

    /**
     * Sets a new insuredCurrency
     *
     * @param string $insuredCurrency
     * @return self
     */
    public function setInsuredCurrency($insuredCurrency)
    {
        $this->insuredCurrency = $insuredCurrency;
        return $this;
    }

    /**
     * Gets as dimensionalUnit
     *
     * @return string
     */
    public function getDimensionalUnit()
    {
        return $this->dimensionalUnit;
    }

    /**
     * Sets a new dimensionalUnit
     *
     * @param string $dimensionalUnit
     * @return self
     */
    public function setDimensionalUnit($dimensionalUnit)
    {
        $this->dimensionalUnit = $dimensionalUnit;
        return $this;
    }

    /**
     * Gets as dimensionalWeight
     *
     * @return float
     */
    public function getDimensionalWeight()
    {
        return $this->dimensionalWeight;
    }

    /**
     * Sets a new dimensionalWeight
     *
     * @param float $dimensionalWeight
     * @return self
     */
    public function setDimensionalWeight($dimensionalWeight)
    {
        $this->dimensionalWeight = $dimensionalWeight;
        return $this;
    }


}

