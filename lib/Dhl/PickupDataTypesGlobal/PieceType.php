<?php

namespace Dhl\PickupDataTypesGlobal;

/**
 * Class representing PieceType
 *
 * 
 * XSD Type: Piece
 */
class PieceType
{

    /**
     * @property float $weight
     */
    private $weight = null;

    /**
     * required if height and depth are specified. Also required when requesting pickup
     * for a ground shipment with weight exceeding 50 pounds
     *
     * @property integer $width
     */
    private $width = null;

    /**
     * required if width and depth are specified. Also required when requesting pickup
     * for a ground shipment with weight exceeding 50 pounds
     *
     * @property integer $height
     */
    private $height = null;

    /**
     * required if width and height are specified. Also required when requesting pickup
     * for a ground shipment with weight exceeding 50 pounds
     *
     * @property integer $depth
     */
    private $depth = null;

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
     * Gets as width
     *
     * required if height and depth are specified. Also required when requesting pickup
     * for a ground shipment with weight exceeding 50 pounds
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
     * required if height and depth are specified. Also required when requesting pickup
     * for a ground shipment with weight exceeding 50 pounds
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
     * required if width and depth are specified. Also required when requesting pickup
     * for a ground shipment with weight exceeding 50 pounds
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
     * required if width and depth are specified. Also required when requesting pickup
     * for a ground shipment with weight exceeding 50 pounds
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
     * required if width and height are specified. Also required when requesting pickup
     * for a ground shipment with weight exceeding 50 pounds
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
     * required if width and height are specified. Also required when requesting pickup
     * for a ground shipment with weight exceeding 50 pounds
     *
     * @param integer $depth
     * @return self
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
        return $this;
    }


}

