<?php

namespace Dhl\PickupDataTypesGlobal;

/**
 * Class representing PickupType
 *
 * 
 * XSD Type: Pickup
 */
class PickupType
{

    /**
     * Date of pickup
     *
     * @property \DateTime $pickupDate
     */
    private $pickupDate = null;

    /**
     * Time pickup must be ready by
     *
     * @property string $readyByTime
     */
    private $readyByTime = null;

    /**
     * Closing time of pickup location
     *
     * @property string $closeTime
     */
    private $closeTime = null;

    /**
     * If this is given, AfterHoursLocation also must be given
     *
     * @property string $afterHoursClosingTime
     */
    private $afterHoursClosingTime = null;

    /**
     * if this is given, AfterHoursClosingTime must also be given
     *
     * @property string $afterHoursLocation
     */
    private $afterHoursLocation = null;

    /**
     * @property integer $pieces
     */
    private $pieces = null;

    /**
     * This is an optional segment
     *
     * @property \Dhl\DataTypesGlobal\WeightSegType $weight
     */
    private $weight = null;

    /**
     * @property string $specialInstructions
     */
    private $specialInstructions = null;

    /**
     * Gets as pickupDate
     *
     * Date of pickup
     *
     * @return \DateTime
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }

    /**
     * Sets a new pickupDate
     *
     * Date of pickup
     *
     * @param \DateTime $pickupDate
     * @return self
     */
    public function setPickupDate(\DateTime $pickupDate)
    {
        $this->pickupDate = $pickupDate;
        return $this;
    }

    /**
     * Gets as readyByTime
     *
     * Time pickup must be ready by
     *
     * @return string
     */
    public function getReadyByTime()
    {
        return $this->readyByTime;
    }

    /**
     * Sets a new readyByTime
     *
     * Time pickup must be ready by
     *
     * @param string $readyByTime
     * @return self
     */
    public function setReadyByTime($readyByTime)
    {
        $this->readyByTime = $readyByTime;
        return $this;
    }

    /**
     * Gets as closeTime
     *
     * Closing time of pickup location
     *
     * @return string
     */
    public function getCloseTime()
    {
        return $this->closeTime;
    }

    /**
     * Sets a new closeTime
     *
     * Closing time of pickup location
     *
     * @param string $closeTime
     * @return self
     */
    public function setCloseTime($closeTime)
    {
        $this->closeTime = $closeTime;
        return $this;
    }

    /**
     * Gets as afterHoursClosingTime
     *
     * If this is given, AfterHoursLocation also must be given
     *
     * @return string
     */
    public function getAfterHoursClosingTime()
    {
        return $this->afterHoursClosingTime;
    }

    /**
     * Sets a new afterHoursClosingTime
     *
     * If this is given, AfterHoursLocation also must be given
     *
     * @param string $afterHoursClosingTime
     * @return self
     */
    public function setAfterHoursClosingTime($afterHoursClosingTime)
    {
        $this->afterHoursClosingTime = $afterHoursClosingTime;
        return $this;
    }

    /**
     * Gets as afterHoursLocation
     *
     * if this is given, AfterHoursClosingTime must also be given
     *
     * @return string
     */
    public function getAfterHoursLocation()
    {
        return $this->afterHoursLocation;
    }

    /**
     * Sets a new afterHoursLocation
     *
     * if this is given, AfterHoursClosingTime must also be given
     *
     * @param string $afterHoursLocation
     * @return self
     */
    public function setAfterHoursLocation($afterHoursLocation)
    {
        $this->afterHoursLocation = $afterHoursLocation;
        return $this;
    }

    /**
     * Gets as pieces
     *
     * @return integer
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * Sets a new pieces
     *
     * @param integer $pieces
     * @return self
     */
    public function setPieces($pieces)
    {
        $this->pieces = $pieces;
        return $this;
    }

    /**
     * Gets as weight
     *
     * This is an optional segment
     *
     * @return \Dhl\DataTypesGlobal\WeightSegType
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * This is an optional segment
     *
     * @param \Dhl\DataTypesGlobal\WeightSegType $weight
     * @return self
     */
    public function setWeight(\Dhl\DataTypesGlobal\WeightSegType $weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Gets as specialInstructions
     *
     * @return string
     */
    public function getSpecialInstructions()
    {
        return $this->specialInstructions;
    }

    /**
     * Sets a new specialInstructions
     *
     * @param string $specialInstructions
     * @return self
     */
    public function setSpecialInstructions($specialInstructions)
    {
        $this->specialInstructions = $specialInstructions;
        return $this;
    }


}

