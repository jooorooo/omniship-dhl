<?php

namespace Dhl\RatingDataTypes;

/**
 * Class representing CustomerRateBillingType
 *
 * 
 * XSD Type: CustomerRateBilling
 */
class CustomerRateBillingType
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


}

