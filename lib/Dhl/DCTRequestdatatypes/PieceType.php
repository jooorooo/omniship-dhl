<?php

namespace Dhl\DCTRequestdatatypes;
use Dhl\Traits\Request;

/**
 * Class representing PieceType
 *
 * 
 * XSD Type: PieceType
 */
class PieceType
{

    use Request;

    /**
     * @property string $pieceID
     */
    private $pieceID = null;

    /**
     * @property string $packageTypeCode
     */
    private $packageTypeCode = null;

    /**
     * required if width and depth are
     *  specified
     *
     * @property float $height
     */
    private $height = null;

    /**
     * required if width and height are
     *  specified
     *
     * @property float $depth
     */
    private $depth = null;

    /**
     * required if height and depth are
     *  specified
     *
     * @property float $width
     */
    private $width = null;

    /**
     * @property float $weight
     */
    private $weight = null;

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
     * Gets as packageTypeCode
     *
     * @return string
     */
    public function getPackageTypeCode()
    {
        return $this->packageTypeCode;
    }

    /**
     * Sets a new packageTypeCode
     *
     * @param string $packageTypeCode
     * @return self
     */
    public function setPackageTypeCode($packageTypeCode)
    {
        $this->packageTypeCode = $packageTypeCode;
        return $this;
    }

    /**
     * Gets as height
     *
     * required if width and depth are
     *  specified
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * required if width and depth are
     *  specified
     *
     * @param float $height
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
     * required if width and height are
     *  specified
     *
     * @return float
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Sets a new depth
     *
     * required if width and height are
     *  specified
     *
     * @param float $depth
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
     * required if height and depth are
     *  specified
     *
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * required if height and depth are
     *  specified
     *
     * @param float $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
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


}

