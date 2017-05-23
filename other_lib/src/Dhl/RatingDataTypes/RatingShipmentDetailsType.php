<?php

namespace Dhl\RatingDataTypes;

/**
 * Class representing RatingShipmentDetailsType
 *
 * 
 * XSD Type: RatingShipmentDetails
 */
class RatingShipmentDetailsType
{

    /**
     * @property integer $numberOfPieces
     */
    private $numberOfPieces = null;

    /**
     * @property \Dhl\DataTypes\PieceType[] $pieces
     */
    private $pieces = null;

    /**
     * @property string $weightUnit
     */
    private $weightUnit = null;

    /**
     * Unit of dimension
     *
     * @property string $dimensionUnit
     */
    private $dimensionUnit = null;

    /**
     * @property float $weight
     */
    private $weight = null;

    /**
     * @property string $productCode
     */
    private $productCode = null;

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
     * @param \Dhl\DataTypes\PieceType $piece
     */
    public function addToPieces(\Dhl\DataTypes\PieceType $piece)
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
     * @return \Dhl\DataTypes\PieceType[]
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * Sets a new pieces
     *
     * @param \Dhl\DataTypes\PieceType[] $pieces
     * @return self
     */
    public function setPieces(array $pieces)
    {
        $this->pieces = $pieces;
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
     * Gets as dimensionUnit
     *
     * Unit of dimension
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
     * Unit of dimension
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
     * Gets as productCode
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Sets a new productCode
     *
     * @param string $productCode
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }


}

