<?php

namespace Dhl\DataTypes;

/**
 * Class representing ShipValResponsePieceType
 *
 * 
 * XSD Type: ShipValResponsePiece
 */
class ShipValResponsePieceType
{

    /**
     * @property integer $pieceNumber
     */
    private $pieceNumber = null;

    /**
     * @property integer $depth
     */
    private $depth = null;

    /**
     * @property integer $width
     */
    private $width = null;

    /**
     * @property integer $height
     */
    private $height = null;

    /**
     * @property float $weight
     */
    private $weight = null;

    /**
     * @property string $packageType
     */
    private $packageType = null;

    /**
     * @property float $dimWeight
     */
    private $dimWeight = null;

    /**
     * @property string $pieceContents
     */
    private $pieceContents = null;

    /**
     * @property \Dhl\DataTypes\ReferenceType[] $pieceReference
     */
    private $pieceReference = array(
        
    );

    /**
     * @property string $dataIdentifier
     */
    private $dataIdentifier = null;

    /**
     * @property string $licensePlate
     */
    private $licensePlate = null;

    /**
     * @property mixed $licensePlateBarCode
     */
    private $licensePlateBarCode = null;

    /**
     * Gets as pieceNumber
     *
     * @return integer
     */
    public function getPieceNumber()
    {
        return $this->pieceNumber;
    }

    /**
     * Sets a new pieceNumber
     *
     * @param integer $pieceNumber
     * @return self
     */
    public function setPieceNumber($pieceNumber)
    {
        $this->pieceNumber = $pieceNumber;
        return $this;
    }

    /**
     * Gets as depth
     *
     * @return integer
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Sets a new depth
     *
     * @param integer $depth
     * @return self
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
        return $this;
    }

    /**
     * Gets as width
     *
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * @param integer $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Gets as height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * @param integer $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
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
     * Gets as dimWeight
     *
     * @return float
     */
    public function getDimWeight()
    {
        return $this->dimWeight;
    }

    /**
     * Sets a new dimWeight
     *
     * @param float $dimWeight
     * @return self
     */
    public function setDimWeight($dimWeight)
    {
        $this->dimWeight = $dimWeight;
        return $this;
    }

    /**
     * Gets as pieceContents
     *
     * @return string
     */
    public function getPieceContents()
    {
        return $this->pieceContents;
    }

    /**
     * Sets a new pieceContents
     *
     * @param string $pieceContents
     * @return self
     */
    public function setPieceContents($pieceContents)
    {
        $this->pieceContents = $pieceContents;
        return $this;
    }

    /**
     * Adds as pieceReference
     *
     * @return self
     * @param \Dhl\DataTypes\ReferenceType $pieceReference
     */
    public function addToPieceReference(\Dhl\DataTypes\ReferenceType $pieceReference)
    {
        $this->pieceReference[] = $pieceReference;
        return $this;
    }

    /**
     * isset pieceReference
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPieceReference($index)
    {
        return isset($this->pieceReference[$index]);
    }

    /**
     * unset pieceReference
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPieceReference($index)
    {
        unset($this->pieceReference[$index]);
    }

    /**
     * Gets as pieceReference
     *
     * @return \Dhl\DataTypes\ReferenceType[]
     */
    public function getPieceReference()
    {
        return $this->pieceReference;
    }

    /**
     * Sets a new pieceReference
     *
     * @param \Dhl\DataTypes\ReferenceType[] $pieceReference
     * @return self
     */
    public function setPieceReference(array $pieceReference)
    {
        $this->pieceReference = $pieceReference;
        return $this;
    }

    /**
     * Gets as dataIdentifier
     *
     * @return string
     */
    public function getDataIdentifier()
    {
        return $this->dataIdentifier;
    }

    /**
     * Sets a new dataIdentifier
     *
     * @param string $dataIdentifier
     * @return self
     */
    public function setDataIdentifier($dataIdentifier)
    {
        $this->dataIdentifier = $dataIdentifier;
        return $this;
    }

    /**
     * Gets as licensePlate
     *
     * @return string
     */
    public function getLicensePlate()
    {
        return $this->licensePlate;
    }

    /**
     * Sets a new licensePlate
     *
     * @param string $licensePlate
     * @return self
     */
    public function setLicensePlate($licensePlate)
    {
        $this->licensePlate = $licensePlate;
        return $this;
    }

    /**
     * Gets as licensePlateBarCode
     *
     * @return mixed
     */
    public function getLicensePlateBarCode()
    {
        return $this->licensePlateBarCode;
    }

    /**
     * Sets a new licensePlateBarCode
     *
     * @param mixed $licensePlateBarCode
     * @return self
     */
    public function setLicensePlateBarCode($licensePlateBarCode)
    {
        $this->licensePlateBarCode = $licensePlateBarCode;
        return $this;
    }


}

