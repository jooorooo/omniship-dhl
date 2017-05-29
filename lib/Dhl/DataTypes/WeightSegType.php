<?php

namespace Dhl\DataTypes;

/**
 * Class representing WeightSegType
 *
 * 
 * XSD Type: WeightSeg
 */
class WeightSegType
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


}

