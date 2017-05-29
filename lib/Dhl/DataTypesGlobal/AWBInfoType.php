<?php

namespace Dhl\DataTypesGlobal;

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
     * @property \Dhl\DataTypesGlobal\StatusType $status
     */
    private $status = null;

    /**
     * @property \Dhl\DataTypesGlobal\ShipmentInfoType $shipmentInfo
     */
    private $shipmentInfo = null;

    /**
     * @property \Dhl\DataTypesGlobal\PieceInfoType[] $pieceInfo
     */
    private $pieceInfo = array(
        
    );

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
     * @return \Dhl\DataTypesGlobal\StatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param \Dhl\DataTypesGlobal\StatusType $status
     * @return self
     */
    public function setStatus(\Dhl\DataTypesGlobal\StatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as shipmentInfo
     *
     * @return \Dhl\DataTypesGlobal\ShipmentInfoType
     */
    public function getShipmentInfo()
    {
        return $this->shipmentInfo;
    }

    /**
     * Sets a new shipmentInfo
     *
     * @param \Dhl\DataTypesGlobal\ShipmentInfoType $shipmentInfo
     * @return self
     */
    public function setShipmentInfo(\Dhl\DataTypesGlobal\ShipmentInfoType $shipmentInfo)
    {
        $this->shipmentInfo = $shipmentInfo;
        return $this;
    }

    /**
     * Adds as pieceInfo
     *
     * @return self
     * @param \Dhl\DataTypesGlobal\PieceInfoType $pieceInfo
     */
    public function addToPieceInfo(\Dhl\DataTypesGlobal\PieceInfoType $pieceInfo)
    {
        $this->pieceInfo[] = $pieceInfo;
        return $this;
    }

    /**
     * isset pieceInfo
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPieceInfo($index)
    {
        return isset($this->pieceInfo[$index]);
    }

    /**
     * unset pieceInfo
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPieceInfo($index)
    {
        unset($this->pieceInfo[$index]);
    }

    /**
     * Gets as pieceInfo
     *
     * @return \Dhl\DataTypesGlobal\PieceInfoType[]
     */
    public function getPieceInfo()
    {
        return $this->pieceInfo;
    }

    /**
     * Sets a new pieceInfo
     *
     * @param \Dhl\DataTypesGlobal\PieceInfoType[] $pieceInfo
     * @return self
     */
    public function setPieceInfo(array $pieceInfo)
    {
        $this->pieceInfo = $pieceInfo;
        return $this;
    }


}

