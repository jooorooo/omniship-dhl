<?php

namespace Dhl\DataTypesGlobal;

/**
 * Class representing PieceEventType
 *
 * Describes the checkpoint information
 * XSD Type: PieceEvent
 */
class PieceEventType
{

    /**
     * @property \DateTime $date
     */
    private $date = null;

    /**
     * @property \DateTime $time
     */
    private $time = null;

    /**
     * @property \Dhl\DataTypesGlobal\ServiceEventType $serviceEvent
     */
    private $serviceEvent = null;

    /**
     * Signatory
     *
     * @property string $signatory
     */
    private $signatory = null;

    /**
     * @property \Dhl\DataTypesGlobal\ServiceAreaType $serviceArea
     */
    private $serviceArea = null;

    /**
     * Gets as date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * @param \DateTime $time
     * @return self
     */
    public function setTime(\DateTime $time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Gets as serviceEvent
     *
     * @return \Dhl\DataTypesGlobal\ServiceEventType
     */
    public function getServiceEvent()
    {
        return $this->serviceEvent;
    }

    /**
     * Sets a new serviceEvent
     *
     * @param \Dhl\DataTypesGlobal\ServiceEventType $serviceEvent
     * @return self
     */
    public function setServiceEvent(\Dhl\DataTypesGlobal\ServiceEventType $serviceEvent)
    {
        $this->serviceEvent = $serviceEvent;
        return $this;
    }

    /**
     * Gets as signatory
     *
     * Signatory
     *
     * @return string
     */
    public function getSignatory()
    {
        return $this->signatory;
    }

    /**
     * Sets a new signatory
     *
     * Signatory
     *
     * @param string $signatory
     * @return self
     */
    public function setSignatory($signatory)
    {
        $this->signatory = $signatory;
        return $this;
    }

    /**
     * Gets as serviceArea
     *
     * @return \Dhl\DataTypesGlobal\ServiceAreaType
     */
    public function getServiceArea()
    {
        return $this->serviceArea;
    }

    /**
     * Sets a new serviceArea
     *
     * @param \Dhl\DataTypesGlobal\ServiceAreaType $serviceArea
     * @return self
     */
    public function setServiceArea(\Dhl\DataTypesGlobal\ServiceAreaType $serviceArea)
    {
        $this->serviceArea = $serviceArea;
        return $this;
    }


}

