<?php

namespace Dhl\DataTypesGlobal;

/**
 * Class representing AdditionalProtectionType
 *
 * 
 * XSD Type: AdditionalProtection
 */
class AdditionalProtectionType
{

    /**
     * @property string $code
     */
    private $code = null;

    /**
     * @property float $value
     */
    private $value = null;

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

