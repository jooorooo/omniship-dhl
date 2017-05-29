<?php

namespace Dhl\DataTypesGlobal;

/**
 * Class representing ChargeCardType
 *
 * 
 * XSD Type: ChargeCard
 */
class ChargeCardType
{

    /**
     * @property integer $chargeCardNo
     */
    private $chargeCardNo = null;

    /**
     * @property string $chargeCardType
     */
    private $chargeCardType = null;

    /**
     * @property integer $chargeCardConfNo
     */
    private $chargeCardConfNo = null;

    /**
     * @property integer $chargeCardExpiryDate
     */
    private $chargeCardExpiryDate = null;

    /**
     * Gets as chargeCardNo
     *
     * @return integer
     */
    public function getChargeCardNo()
    {
        return $this->chargeCardNo;
    }

    /**
     * Sets a new chargeCardNo
     *
     * @param integer $chargeCardNo
     * @return self
     */
    public function setChargeCardNo($chargeCardNo)
    {
        $this->chargeCardNo = $chargeCardNo;
        return $this;
    }

    /**
     * Gets as chargeCardType
     *
     * @return string
     */
    public function getChargeCardType()
    {
        return $this->chargeCardType;
    }

    /**
     * Sets a new chargeCardType
     *
     * @param string $chargeCardType
     * @return self
     */
    public function setChargeCardType($chargeCardType)
    {
        $this->chargeCardType = $chargeCardType;
        return $this;
    }

    /**
     * Gets as chargeCardConfNo
     *
     * @return integer
     */
    public function getChargeCardConfNo()
    {
        return $this->chargeCardConfNo;
    }

    /**
     * Sets a new chargeCardConfNo
     *
     * @param integer $chargeCardConfNo
     * @return self
     */
    public function setChargeCardConfNo($chargeCardConfNo)
    {
        $this->chargeCardConfNo = $chargeCardConfNo;
        return $this;
    }

    /**
     * Gets as chargeCardExpiryDate
     *
     * @return integer
     */
    public function getChargeCardExpiryDate()
    {
        return $this->chargeCardExpiryDate;
    }

    /**
     * Sets a new chargeCardExpiryDate
     *
     * @param integer $chargeCardExpiryDate
     * @return self
     */
    public function setChargeCardExpiryDate($chargeCardExpiryDate)
    {
        $this->chargeCardExpiryDate = $chargeCardExpiryDate;
        return $this;
    }


}

