<?php

namespace Dhl\DataTypes;

/**
 * Class representing PieceInfoType
 *
 * 
 * XSD Type: PieceInfo
 */
class PieceInfoType
{

    /**
     * @property \Dhl\DataTypes\PieceDetailsType $pieceDetails
     */
    private $pieceDetails = null;

    /**
     * @property \Dhl\DataTypes\PieceEventType[] $pieceEvent
     */
    private $pieceEvent = array(
        
    );

    /**
     * Gets as pieceDetails
     *
     * @return \Dhl\DataTypes\PieceDetailsType
     */
    public function getPieceDetails()
    {
        return $this->pieceDetails;
    }

    /**
     * Sets a new pieceDetails
     *
     * @param \Dhl\DataTypes\PieceDetailsType $pieceDetails
     * @return self
     */
    public function setPieceDetails(\Dhl\DataTypes\PieceDetailsType $pieceDetails)
    {
        $this->pieceDetails = $pieceDetails;
        return $this;
    }

    /**
     * Adds as pieceEvent
     *
     * @return self
     * @param \Dhl\DataTypes\PieceEventType $pieceEvent
     */
    public function addToPieceEvent(\Dhl\DataTypes\PieceEventType $pieceEvent)
    {
        $this->pieceEvent[] = $pieceEvent;
        return $this;
    }

    /**
     * isset pieceEvent
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPieceEvent($index)
    {
        return isset($this->pieceEvent[$index]);
    }

    /**
     * unset pieceEvent
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPieceEvent($index)
    {
        unset($this->pieceEvent[$index]);
    }

    /**
     * Gets as pieceEvent
     *
     * @return \Dhl\DataTypes\PieceEventType[]
     */
    public function getPieceEvent()
    {
        return $this->pieceEvent;
    }

    /**
     * Sets a new pieceEvent
     *
     * @param \Dhl\DataTypes\PieceEventType[] $pieceEvent
     * @return self
     */
    public function setPieceEvent(array $pieceEvent)
    {
        $this->pieceEvent = $pieceEvent;
        return $this;
    }


}

