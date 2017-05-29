<?php

namespace Dhl\DCTRequestdatatypes;
use Dhl\Traits\Request;

/**
 * Class representing DCTDutiableType
 *
 * 
 * XSD Type: DCTDutiable
 */
class DCTDutiableType
{

    use Request;

    /**
     * @property string $declaredCurrency
     */
    private $declaredCurrency = null;

    /**
     * @property float $declaredValue
     */
    private $declaredValue = null;

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


}

