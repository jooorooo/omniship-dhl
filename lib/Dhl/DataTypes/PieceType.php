<?php

namespace Dhl\DataTypes;

/**
 * Class representing PieceType
 *
 * 
 * XSD Type: Piece
 */
class PieceType
{

    /**
     * @property string $pieceID
     */
    private $pieceID = null;

    /**
     * @property string $packageType
     */
    private $packageType = null;

    /**
     * @property float $weight
     */
    private $weight = null;

    /**
     * @property float $dimWeight
     */
    private $dimWeight = null;

    /**
     * required if height and depth are specified
     *
     * @property integer $width
     */
    private $width = null;

    /**
     * required if width and depth are specified
     *
     * @property integer $height
     */
    private $height = null;

    /**
     * required if width and height are specified
     *
     * @property integer $depth
     */
    private $depth = null;

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
     * Gets as pieceID
     *
     * @return string
     */
    public function getPieceID()
    {
        return $this->pieceID;
    }

    /**
     * Sets a new pieceID
     *
     * @param string $pieceID
     * @return self
     */
    public function setPieceID($pieceID)
    {
        $this->pieceID = $pieceID;
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
     * Gets as width
     *
     * required if height and depth are specified
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
     * required if height and depth are specified
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
     * required if width and depth are specified
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
     * required if width and depth are specified
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
     * Gets as depth
     *
     * required if width and height are specified
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
     * required if width and height are specified
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


}

