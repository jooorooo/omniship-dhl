<?php

namespace Dhl\DataTypesGlobal;
use Dhl\Traits\Request;

/**
 * Class representing BillingType
 *
 * 
 * XSD Type: Billing
 */
class BillingType
{

    use Request;

    /**
     * @property string $shipperAccountNumber
     */
    private $shipperAccountNumber = null;

    /**
     * @property string $shippingPaymentType
     */
    private $shippingPaymentType = null;

    /**
     * @property string $billingAccountNumber
     */
    private $billingAccountNumber = null;

    /**
     * @property string $dutyPaymentType
     */
    private $dutyPaymentType = null;

    /**
     * @property string $dutyAccountNumber
     */
    private $dutyAccountNumber = null;

    /**
     * Gets as shipperAccountNumber
     *
     * @return string
     */
    public function getShipperAccountNumber()
    {
        return $this->shipperAccountNumber;
    }

    /**
     * Sets a new shipperAccountNumber
     *
     * @param string $shipperAccountNumber
     * @return self
     */
    public function setShipperAccountNumber($shipperAccountNumber)
    {
        $this->shipperAccountNumber = $shipperAccountNumber;
        return $this;
    }

    /**
     * Gets as shippingPaymentType
     *
     * @return string
     */
    public function getShippingPaymentType()
    {
        return $this->shippingPaymentType;
    }

    /**
     * Sets a new shippingPaymentType
     *
     * @param string $shippingPaymentType
     * @return self
     */
    public function setShippingPaymentType($shippingPaymentType)
    {
        $this->shippingPaymentType = $shippingPaymentType;
        return $this;
    }

    /**
     * Gets as billingAccountNumber
     *
     * @return string
     */
    public function getBillingAccountNumber()
    {
        return $this->billingAccountNumber;
    }

    /**
     * Sets a new billingAccountNumber
     *
     * @param string $billingAccountNumber
     * @return self
     */
    public function setBillingAccountNumber($billingAccountNumber)
    {
        $this->billingAccountNumber = $billingAccountNumber;
        return $this;
    }

    /**
     * Gets as dutyPaymentType
     *
     * @return string
     */
    public function getDutyPaymentType()
    {
        return $this->dutyPaymentType;
    }

    /**
     * Sets a new dutyPaymentType
     *
     * @param string $dutyPaymentType
     * @return self
     */
    public function setDutyPaymentType($dutyPaymentType)
    {
        $this->dutyPaymentType = $dutyPaymentType;
        return $this;
    }

    /**
     * Gets as dutyAccountNumber
     *
     * @return string
     */
    public function getDutyAccountNumber()
    {
        return $this->dutyAccountNumber;
    }

    /**
     * Sets a new dutyAccountNumber
     *
     * @param string $dutyAccountNumber
     * @return self
     */
    public function setDutyAccountNumber($dutyAccountNumber)
    {
        $this->dutyAccountNumber = $dutyAccountNumber;
        return $this;
    }


}

