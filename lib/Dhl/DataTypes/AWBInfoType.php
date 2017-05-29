<?php

namespace Dhl\DataTypes;

/**
 * Class representing AWBInfoType
 *
 * 
 * XSD Type: AWBInfo
 */
class AWBInfoType
{

    /**
     * @property string $aWBNumber
     */
    private $aWBNumber = null;

    /**
     * @property \Dhl\DataTypes\StatusType $status
     */
    private $status = null;

    /**
     * @property \Dhl\DataTypes\ShipmentInfoType $shipmentInfo
     */
    private $shipmentInfo = null;

    /**
     * @property \Dhl\DataTypes\PieceInfoType[] $pieces
     */
    private $pieces = null;

    /**
     * Gets as aWBNumber
     *
     * @return string
     */
    public function getAWBNumber()
    {
        return $this->aWBNumber;
    }

    /**
     * Sets a new aWBNumber
     *
     * @param string $aWBNumber
     * @return self
     */
    public function setAWBNumber($aWBNumber)
    {
        $this->aWBNumber = $aWBNumber;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return \Dhl\DataTypes\StatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param \Dhl\DataTypes\StatusType $status
     * @return self
     */
    public function setStatus(\Dhl\DataTypes\StatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as shipmentInfo
     *
     * @return \Dhl\DataTypes\ShipmentInfoType
     */
    public function getShipmentInfo()
    {
        return $this->shipmentInfo;
    }

    /**
     * Sets a new shipmentInfo
     *
     * @param \Dhl\DataTypes\ShipmentInfoType $shipmentInfo
     * @return self
     */
    public function setShipmentInfo(\Dhl\DataTypes\ShipmentInfoType $shipmentInfo)
    {
        $this->shipmentInfo = $shipmentInfo;
        return $this;
    }

    /**
     * Adds as pieceInfo
     *
     * @return self
     * @param \Dhl\DataTypes\PieceInfoType $pieceInfo
     */
    public function addToPieces(\Dhl\DataTypes\PieceInfoType $pieceInfo)
    {
        $this->pieces[] = $pieceInfo;
        return $this;
    }

    /**
     * isset pieces
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPieces($index)
    {
        return isset($this->pieces[$index]);
    }

    /**
     * unset pieces
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPieces($index)
    {
        unset($this->pieces[$index]);
    }

    /**
     * Gets as pieces
     *
     * @return \Dhl\DataTypes\PieceInfoType[]
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * Sets a new pieces
     *
     * @param \Dhl\DataTypes\PieceInfoType[] $pieces
     * @return self
     */
    public function setPieces(array $pieces)
    {
        $this->pieces = $pieces;
        return $this;
    }


}

