<?php

namespace Dhl\DataTypes;

/**
 * Class representing ShipmentInfoType
 *
 * 
 * XSD Type: ShipmentInfo
 */
class ShipmentInfoType
{

    /**
     * @property \Dhl\DataTypes\OriginServiceAreaType $originServiceArea
     */
    private $originServiceArea = null;

    /**
     * @property \Dhl\DataTypes\DestinationServiceAreaType $destinationServiceArea
     */
    private $destinationServiceArea = null;

    /**
     * @property string $shipperName
     */
    private $shipperName = null;

    /**
     * @property integer $shipperAccountNumber
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
     * @property \DateTime $estDlvyDateUTC
     */
    private $estDlvyDateUTC = null;

    /**
     * @property string $globalProductCode
     */
    private $globalProductCode = null;

    /**
     * @property string $shipmentDesc
     */
    private $shipmentDesc = null;

    /**
     * @property string $dlvyNotificationFlag
     */
    private $dlvyNotificationFlag = null;

    /**
     * @property \Dhl\DataTypes\ShipperType $shipper
     */
    private $shipper = null;

    /**
     * @property \Dhl\DataTypes\ConsigneeType $consignee
     */
    private $consignee = null;

    /**
     * @property \Dhl\DataTypes\ShipmentEventType[] $shipmentEvent
     */
    private $shipmentEvent = array(
        
    );

    /**
     * @property \Dhl\DataTypes\ReferenceType $shipperReference
     */
    private $shipperReference = null;

    /**
     * Gets as originServiceArea
     *
     * @return \Dhl\DataTypes\OriginServiceAreaType
     */
    public function getOriginServiceArea()
    {
        return $this->originServiceArea;
    }

    /**
     * Sets a new originServiceArea
     *
     * @param \Dhl\DataTypes\OriginServiceAreaType $originServiceArea
     * @return self
     */
    public function setOriginServiceArea(\Dhl\DataTypes\OriginServiceAreaType $originServiceArea)
    {
        $this->originServiceArea = $originServiceArea;
        return $this;
    }

    /**
     * Gets as destinationServiceArea
     *
     * @return \Dhl\DataTypes\DestinationServiceAreaType
     */
    public function getDestinationServiceArea()
    {
        return $this->destinationServiceArea;
    }

    /**
     * Sets a new destinationServiceArea
     *
     * @param \Dhl\DataTypes\DestinationServiceAreaType $destinationServiceArea
     * @return self
     */
    public function setDestinationServiceArea(\Dhl\DataTypes\DestinationServiceAreaType $destinationServiceArea)
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
     * Gets as estDlvyDateUTC
     *
     * @return \DateTime
     */
    public function getEstDlvyDateUTC()
    {
        return $this->estDlvyDateUTC;
    }

    /**
     * Sets a new estDlvyDateUTC
     *
     * @param \DateTime $estDlvyDateUTC
     * @return self
     */
    public function setEstDlvyDateUTC(\DateTime $estDlvyDateUTC)
    {
        $this->estDlvyDateUTC = $estDlvyDateUTC;
        return $this;
    }

    /**
     * Gets as globalProductCode
     *
     * @return string
     */
    public function getGlobalProductCode()
    {
        return $this->globalProductCode;
    }

    /**
     * Sets a new globalProductCode
     *
     * @param string $globalProductCode
     * @return self
     */
    public function setGlobalProductCode($globalProductCode)
    {
        $this->globalProductCode = $globalProductCode;
        return $this;
    }

    /**
     * Gets as shipmentDesc
     *
     * @return string
     */
    public function getShipmentDesc()
    {
        return $this->shipmentDesc;
    }

    /**
     * Sets a new shipmentDesc
     *
     * @param string $shipmentDesc
     * @return self
     */
    public function setShipmentDesc($shipmentDesc)
    {
        $this->shipmentDesc = $shipmentDesc;
        return $this;
    }

    /**
     * Gets as dlvyNotificationFlag
     *
     * @return string
     */
    public function getDlvyNotificationFlag()
    {
        return $this->dlvyNotificationFlag;
    }

    /**
     * Sets a new dlvyNotificationFlag
     *
     * @param string $dlvyNotificationFlag
     * @return self
     */
    public function setDlvyNotificationFlag($dlvyNotificationFlag)
    {
        $this->dlvyNotificationFlag = $dlvyNotificationFlag;
        return $this;
    }

    /**
     * Gets as shipper
     *
     * @return \Dhl\DataTypes\ShipperType
     */
    public function getShipper()
    {
        return $this->shipper;
    }

    /**
     * Sets a new shipper
     *
     * @param \Dhl\DataTypes\ShipperType $shipper
     * @return self
     */
    public function setShipper(\Dhl\DataTypes\ShipperType $shipper)
    {
        $this->shipper = $shipper;
        return $this;
    }

    /**
     * Gets as consignee
     *
     * @return \Dhl\DataTypes\ConsigneeType
     */
    public function getConsignee()
    {
        return $this->consignee;
    }

    /**
     * Sets a new consignee
     *
     * @param \Dhl\DataTypes\ConsigneeType $consignee
     * @return self
     */
    public function setConsignee(\Dhl\DataTypes\ConsigneeType $consignee)
    {
        $this->consignee = $consignee;
        return $this;
    }

    /**
     * Adds as shipmentEvent
     *
     * @return self
     * @param \Dhl\DataTypes\ShipmentEventType $shipmentEvent
     */
    public function addToShipmentEvent(\Dhl\DataTypes\ShipmentEventType $shipmentEvent)
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
     * @return \Dhl\DataTypes\ShipmentEventType[]
     */
    public function getShipmentEvent()
    {
        return $this->shipmentEvent;
    }

    /**
     * Sets a new shipmentEvent
     *
     * @param \Dhl\DataTypes\ShipmentEventType[] $shipmentEvent
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
     * @return \Dhl\DataTypes\ReferenceType
     */
    public function getShipperReference()
    {
        return $this->shipperReference;
    }

    /**
     * Sets a new shipperReference
     *
     * @param \Dhl\DataTypes\ReferenceType $shipperReference
     * @return self
     */
    public function setShipperReference(\Dhl\DataTypes\ReferenceType $shipperReference)
    {
        $this->shipperReference = $shipperReference;
        return $this;
    }


}

