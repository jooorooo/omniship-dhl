<?php

namespace Dhl\PickupDataTypesGlobal;

/**
 * Class representing LargestPieceType
 *
 * Lists measurements of largest piece. This element is mandatory if the weight of
 * shipment for ground service exceeds 50 pounds
 * XSD Type: LargestPiece
 */
class LargestPieceType
{

    /**
     * Required when requesting pickup for a ground shipment with weight exceeding 50
     * pounds
     *
     * @property integer $width
     */
    private $width = null;

    /**
     * Required when requesting pickup for a ground shipment with weight exceeding 50
     * pounds
     *
     * @property integer $height
     */
    private $height = null;

    /**
     * Required when requesting pickup for a ground shipment with weight exceeding 50
     * pounds
     *
     * @property integer $depth
     */
    private $depth = null;

    /**
     * Gets as width
     *
     * Required when requesting pickup for a ground shipment with weight exceeding 50
     * pounds
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
     * Required when requesting pickup for a ground shipment with weight exceeding 50
     * pounds
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
     * Required when requesting pickup for a ground shipment with weight exceeding 50
     * pounds
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
     * Required when requesting pickup for a ground shipment with weight exceeding 50
     * pounds
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
     * Required when requesting pickup for a ground shipment with weight exceeding 50
     * pounds
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
     * Required when requesting pickup for a ground shipment with weight exceeding 50
     * pounds
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

