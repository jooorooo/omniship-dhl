<?php

namespace Dhl\DataTypesGlobal;

/**
 * Class representing ShipmentInfoType
 *
 * 
 * XSD Type: ShipmentInfo
 */
class ShipmentInfoType
{

    /**
     * @property \Dhl\DataTypesGlobal\ServiceAreaType $originServiceArea
     */
    private $originServiceArea = null;

    /**
     * @property \Dhl\DataTypesGlobal\ServiceAreaType $destinationServiceArea
     */
    private $destinationServiceArea = null;

    /**
     * @property string $shipperName
     */
    private $shipperName = null;

    /**
     * @property string $shipperAccountNumber
     */
    private $shipperAccountNumber = null;

    /**
     * @property string $consigneeName
     */
    private $consigneeName = null;

    /**
     * @property \DateTime $shipmentDate
     */
    private $shipmentDate = null;

    /**
     * @property mixed $pieces
     */
    private $pieces = null;

    /**
     * @property string $weight
     */
    private $weight = null;

    /**
     * @property string $weightUnit
     */
    private $weightUnit = null;

    /**
     * @property \DateTime $estDlvyDate
     */
    private $estDlvyDate = null;

    /**
     * @property \Dhl\DataTypesGlobal\ShipmentEventType[] $shipmentEvent
     */
    private $shipmentEvent = array(
        
    );

    /**
     * @property \Dhl\DataTypesGlobal\ReferenceType $shipperReference
     */
    private $shipperReference = null;

    /**
     * Gets as originServiceArea
     *
     * @return \Dhl\DataTypesGlobal\ServiceAreaType
     */
    public function getOriginServiceArea()
    {
        return $this->originServiceArea;
    }

    /**
     * Sets a new originServiceArea
     *
     * @param \Dhl\DataTypesGlobal\ServiceAreaType $originServiceArea
     * @return self
     */
    public function setOriginServiceArea(\Dhl\DataTypesGlobal\ServiceAreaType $originServiceArea)
    {
        $this->originServiceArea = $originServiceArea;
        return $this;
    }

    /**
     * Gets as destinationServiceArea
     *
     * @return \Dhl\DataTypesGlobal\ServiceAreaType
     */
    public function getDestinationServiceArea()
    {
        return $this->destinationServiceArea;
    }

    /**
     * Sets a new destinationServiceArea
     *
     * @param \Dhl\DataTypesGlobal\ServiceAreaType $destinationServiceArea
     * @return self
     */
    public function setDestinationServiceArea(\Dhl\DataTypesGlobal\ServiceAreaType $destinationServiceArea)
    {
        $this->destinationServiceArea = $destinationServiceArea;
        return $this;
    }

    /**
     * Gets as shipperName
     *
     * @return string
     */
    public function getShipperName()
    {
        return $this->shipperName;
    }

    /**
     * Sets a new shipperName
     *
     * @param string $shipperName
     * @return self
     */
    public function setShipperName($shipperName)
    {
        $this->shipperName = $shipperName;
        return $this;
    }

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
     * Gets as consigneeName
     *
     * @return string
     */
    public function getConsigneeName()
    {
        return $this->consigneeName;
    }

    /**
     * Sets a new consigneeName
     *
     * @param string $consigneeName
     * @return self
     */
    public function setConsigneeName($consigneeName)
    {
        $this->consigneeName = $consigneeName;
        return $this;
    }

    /**
     * Gets as shipmentDate
     *
     * @return \DateTime
     */
    public function getShipmentDate()
    {
        return $this->shipmentDate;
    }

    /**
     * Sets a new shipmentDate
     *
     * @param \DateTime $shipmentDate
     * @return self
     */
    public function setShipmentDate(\DateTime $shipmentDate)
    {
        $this->shipmentDate = $shipmentDate;
        return $this;
    }

    /**
     * Gets as pieces
     *
     * @return mixed
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * Sets a new pieces
     *
     * @param mixed $pieces
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
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * @param string $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Gets as weightUnit
     *
     * @return string
     */
    public function getWeightUnit()
    {
        return $this->weightUnit;
    }

    /**
     * Sets a new weightUnit
     *
     * @param string $weightUnit
     * @return self
     */
    public function setWeightUnit($weightUnit)
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }

    /**
     * Gets as estDlvyDate
     *
     * @return \DateTime
     */
    public function getEstDlvyDate()
    {
        return $this->estDlvyDate;
    }

    /**
     * Sets a new estDlvyDate
     *
     * @param \DateTime $estDlvyDate
     * @return self
     */
    public function setEstDlvyDate(\DateTime $estDlvyDate)
    {
        $this->estDlvyDate = $estDlvyDate;
        return $this;
    }

    /**
     * Adds as shipmentEvent
     *
     * @return self
     * @param \Dhl\DataTypesGlobal\ShipmentEventType $shipmentEvent
     */
    public function addToShipmentEvent(\Dhl\DataTypesGlobal\ShipmentEventType $shipmentEvent)
    {
        $this->shipmentEvent[] = $shipmentEvent;
        return $this;
    }

    /**
     * isset shipmentEvent
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetShipmentEvent($index)
    {
        return isset($this->shipmentEvent[$index]);
    }

    /**
     * unset shipmentEvent
     *
     * @param scalar $index
     * @return void
     */
    public function unsetShipmentEvent($index)
    {
        unset($this->shipmentEvent[$index]);
    }

    /**
     * Gets as shipmentEvent
     *
     * @return \Dhl\DataTypesGlobal\ShipmentEventType[]
     */
    public function getShipmentEvent()
    {
        return $this->shipmentEvent;
    }

    /**
     * Sets a new shipmentEvent
     *
     * @param \Dhl\DataTypesGlobal\ShipmentEventType[] $shipmentEvent
     * @return self
     */
    public function setShipmentEvent(array $shipmentEvent)
    {
        $this->shipmentEvent = $shipmentEvent;
        return $this;
    }

    /**
     * Gets as shipperReference
     *
     * @return \Dhl\DataTypesGlobal\ReferenceType
     */
    public function getShipperReference()
    {
        return $this->shipperReference;
    }

    /**
     * Sets a new shipperReference
     *
     * @param \Dhl\DataTypesGlobal\ReferenceType $shipperReference
     * @return self
     */
    public function setShipperReference(\Dhl\DataTypesGlobal\ReferenceType $shipperReference)
    {
        $this->shipperReference = $shipperReference;
        return $this;
    }


}

