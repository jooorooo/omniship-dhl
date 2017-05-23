<?php

namespace Dhl\DataTypes;

/**
 * Class representing CommodityType
 *
 * 
 * XSD Type: Commodity
 */
class CommodityType
{

    /**
     * @property string $commodityCode
     */
    private $commodityCode = null;

    /**
     * @property string $commodityName
     */
    private $commodityName = null;

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
     * Gets as commodityName
     *
     * @return string
     */
    public function getCommodityName()
    {
        return $this->commodityName;
    }

    /**
     * Sets a new commodityName
     *
     * @param string $commodityName
     * @return self
     */
    public function setCommodityName($commodityName)
    {
        $this->commodityName = $commodityName;
        return $this;
    }


}

