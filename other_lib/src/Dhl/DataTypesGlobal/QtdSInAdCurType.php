<?php

namespace Dhl\DataTypesGlobal;

/**
 * Class representing QtdSInAdCurType
 *
 * QtdSInAdCur
 * XSD Type: QtdSInAdCur
 */
class QtdSInAdCurType
{

    /**
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @property string $currencyRoleTypeCode
     */
    private $currencyRoleTypeCode = null;

    /**
     * @property float $packageCharge
     */
    private $packageCharge = null;

    /**
     * @property float $shippingCharge
     */
    private $shippingCharge = null;

    /**
     * Gets as currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as currencyRoleTypeCode
     *
     * @return string
     */
    public function getCurrencyRoleTypeCode()
    {
        return $this->currencyRoleTypeCode;
    }

    /**
     * Sets a new currencyRoleTypeCode
     *
     * @param string $currencyRoleTypeCode
     * @return self
     */
    public function setCurrencyRoleTypeCode($currencyRoleTypeCode)
    {
        $this->currencyRoleTypeCode = $currencyRoleTypeCode;
        return $this;
    }

    /**
     * Gets as packageCharge
     *
     * @return float
     */
    public function getPackageCharge()
    {
        return $this->packageCharge;
    }

    /**
     * Sets a new packageCharge
     *
     * @param float $packageCharge
     * @return self
     */
    public function setPackageCharge($packageCharge)
    {
        $this->packageCharge = $packageCharge;
        return $this;
    }

    /**
     * Gets as shippingCharge
     *
     * @return float
     */
    public function getShippingCharge()
    {
        return $this->shippingCharge;
    }

    /**
     * Sets a new shippingCharge
     *
     * @param float $shippingCharge
     * @return self
     */
    public function setShippingCharge($shippingCharge)
    {
        $this->shippingCharge = $shippingCharge;
        return $this;
    }


}

