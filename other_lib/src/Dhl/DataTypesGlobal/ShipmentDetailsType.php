<?php

namespace Dhl\DataTypesGlobal;
use Dhl\Traits\Request;

/**
 * Class representing ShipmentDetailsType
 *
 * 
 * XSD Type: ShipmentDetails
 */
class ShipmentDetailsType
{

    use Request;

    /**
     * @property integer $numberOfPieces
     */
    private $numberOfPieces = null;

    /**
     * @property \Dhl\DataTypesGlobal\PieceType[] $pieces
     */
    private $pieces = null;

    /**
     * @property float $weight
     */
    private $weight = null;

    /**
     * @property string $weightUnit
     */
    private $weightUnit = null;

    /**
     * @property string $globalProductCode
     */
    private $globalProductCode = null;

    /**
     * @property string $localProductCode
     */
    private $localProductCode = null;

    /**
     * @property \DateTime $date
     */
    private $date = null;

    /**
     * @property string $contents
     */
    private $contents = null;

    /**
     * @property string $doorTo
     */
    private $doorTo = null;

    /**
     * @property string $dimensionUnit
     */
    private $dimensionUnit = null;

    /**
     * @property float $insuredAmount
     */
    private $insuredAmount = null;

    /**
     * @property string $packageType
     */
    private $packageType = null;

    /**
     * @property string $isDutiable
     */
    private $isDutiable = null;

    /**
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @property \Dhl\DataTypesGlobal\AdditionalProtectionType $additionalProtection
     */
    private $additionalProtection = null;

    /**
     * @property string $dOSFlag
     */
    private $dOSFlag = null;

    /**
     * @property string $custData
     */
    private $custData = null;

    /**
     * @property float $shipmentCharges
     */
    private $shipmentCharges = null;

    /**
     * Gets as numberOfPieces
     *
     * @return integer
     */
    public function getNumberOfPieces()
    {
        return $this->numberOfPieces;
    }

    /**
     * Sets a new numberOfPieces
     *
     * @param integer $numberOfPieces
     * @return self
     */
    public function setNumberOfPieces($numberOfPieces)
    {
        $this->numberOfPieces = $numberOfPieces;
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
     * Gets as globalProductCode
     *
     * @return string
     */
    public function getGlobalProductCode()
    {
        return $this->globalProductCode;
    }

    /**
     * Sets a new globalProductCode
     *
     * @param string $globalProductCode
     * @return self
     */
    public function setGlobalProductCode($globalProductCode)
    {
        $this->globalProductCode = $globalProductCode;
        return $this;
    }

    /**
     * Gets as localProductCode
     *
     * @return string
     */
    public function getLocalProductCode()
    {
        return $this->localProductCode;
    }

    /**
     * Sets a new localProductCode
     *
     * @param string $localProductCode
     * @return self
     */
    public function setLocalProductCode($localProductCode)
    {
        $this->localProductCode = $localProductCode;
        return $this;
    }

    /**
     * Gets as date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as contents
     *
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Sets a new contents
     *
     * @param string $contents
     * @return self
     */
    public function setContents($contents)
    {
        $this->contents = $contents;
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
     * Gets as dimensionUnit
     *
     * @return string
     */
    public function getDimensionUnit()
    {
        return $this->dimensionUnit;
    }

    /**
     * Sets a new dimensionUnit
     *
     * @param string $dimensionUnit
     * @return self
     */
    public function setDimensionUnit($dimensionUnit)
    {
        $this->dimensionUnit = $dimensionUnit;
        return $this;
    }

    /**
     * Gets as insuredAmount
     *
     * @return float
     */
    public function getInsuredAmount()
    {
        return $this->insuredAmount;
    }

    /**
     * Sets a new insuredAmount
     *
     * @param float $insuredAmount
     * @return self
     */
    public function setInsuredAmount($insuredAmount)
    {
        $this->insuredAmount = $insuredAmount;
        return $this;
    }

    /**
     * Gets as packageType
     *
     * @return string
     */
    public function getPackageType()
    {
        return $this->packageType;
    }

    /**
     * Sets a new packageType
     *
     * @param string $packageType
     * @return self
     */
    public function setPackageType($packageType)
    {
        $this->packageType = $packageType;
        return $this;
    }

    /**
     * Gets as isDutiable
     *
     * @return string
     */
    public function getIsDutiable()
    {
        return $this->isDutiable;
    }

    /**
     * Sets a new isDutiable
     *
     * @param string $isDutiable
     * @return self
     */
    public function setIsDutiable($isDutiable)
    {
        $this->isDutiable = $isDutiable;
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
     * Gets as additionalProtection
     *
     * @return \Dhl\DataTypesGlobal\AdditionalProtectionType
     */
    public function getAdditionalProtection()
    {
        return $this->additionalProtection;
    }

    /**
     * Sets a new additionalProtection
     *
     * @param \Dhl\DataTypesGlobal\AdditionalProtectionType $additionalProtection
     * @return self
     */
    public function setAdditionalProtection(\Dhl\DataTypesGlobal\AdditionalProtectionType $additionalProtection)
    {
        $this->additionalProtection = $additionalProtection;
        return $this;
    }

    /**
     * Gets as dOSFlag
     *
     * @return string
     */
    public function getDOSFlag()
    {
        return $this->dOSFlag;
    }

    /**
     * Sets a new dOSFlag
     *
     * @param string $dOSFlag
     * @return self
     */
    public function setDOSFlag($dOSFlag)
    {
        $this->dOSFlag = $dOSFlag;
        return $this;
    }

    /**
     * Gets as custData
     *
     * @return string
     */
    public function getCustData()
    {
        return $this->custData;
    }

    /**
     * Sets a new custData
     *
     * @param string $custData
     * @return self
     */
    public function setCustData($custData)
    {
        $this->custData = $custData;
        return $this;
    }

    /**
     * Gets as shipmentCharges
     *
     * @return float
     */
    public function getShipmentCharges()
    {
        return $this->shipmentCharges;
    }

    /**
     * Sets a new shipmentCharges
     *
     * @param float $shipmentCharges
     * @return self
     */
    public function setShipmentCharges($shipmentCharges)
    {
        $this->shipmentCharges = $shipmentCharges;
        return $this;
    }


}

