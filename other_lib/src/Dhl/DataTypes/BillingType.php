<?php

namespace Dhl\DataTypes;

/**
 * Class representing BillingType
 *
 * 
 * XSD Type: Billing
 */
class BillingType
{

    /**
     * @property integer $shipperAccountNumber
     */
    private $shipperAccountNumber = null;

    /**
     * @property string $shippingPaymentType
     */
    private $shippingPaymentType = null;

    /**
     * @property integer $billingAccountNumber
     */
    private $billingAccountNumber = null;

    /**
     * @property string $dutyPaymentType
     */
    private $dutyPaymentType = null;

    /**
     * @property integer $dutyAccountNumber
     */
    private $dutyAccountNumber = null;

    /**
     * Gets as shipperAccountNumber
     *
     * @return integer
     */
    public function getShipperAccountNumber()
    {
        return $this->shipperAccountNumber;
    }

    /**
     * Sets a new shipperAccountNumber
     *
     * @param integer $shipperAccountNumber
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
     * @return integer
     */
    public function getBillingAccountNumber()
    {
        return $this->billingAccountNumber;
    }

    /**
     * Sets a new billingAccountNumber
     *
     * @param integer $billingAccountNumber
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
     * @return integer
     */
    public function getDutyAccountNumber()
    {
        return $this->dutyAccountNumber;
    }

    /**
     * Sets a new dutyAccountNumber
     *
     * @param integer $dutyAccountNumber
     * @return self
     */
    public function setDutyAccountNumber($dutyAccountNumber)
    {
        $this->dutyAccountNumber = $dutyAccountNumber;
        return $this;
    }


}

