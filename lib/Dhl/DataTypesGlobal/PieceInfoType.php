<?php

namespace Dhl\DataTypesGlobal;

/**
 * Class representing PieceInfoType
 *
 * 
 * XSD Type: PieceInfo
 */
class PieceInfoType
{

    /**
     * @property \Dhl\DataTypesGlobal\PieceDetailsType $pieceDetails
     */
    private $pieceDetails = null;

    /**
     * @property \Dhl\DataTypesGlobal\PieceEventType[] $pieceEvent
     */
    private $pieceEvent = array(
        
    );

    /**
     * Gets as pieceDetails
     *
     * @return \Dhl\DataTypesGlobal\PieceDetailsType
     */
    public function getPieceDetails()
    {
        return $this->pieceDetails;
    }

    /**
     * Sets a new pieceDetails
     *
     * @param \Dhl\DataTypesGlobal\PieceDetailsType $pieceDetails
     * @return self
     */
    public function setPieceDetails(\Dhl\DataTypesGlobal\PieceDetailsType $pieceDetails)
    {
        $this->pieceDetails = $pieceDetails;
        return $this;
    }

    /**
     * Adds as pieceEvent
     *
     * @return self
     * @param \Dhl\DataTypesGlobal\PieceEventType $pieceEvent
     */
    public function addToPieceEvent(\Dhl\DataTypesGlobal\PieceEventType $pieceEvent)
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
     * @return \Dhl\DataTypesGlobal\PieceEventType[]
     */
    public function getPieceEvent()
    {
        return $this->pieceEvent;
    }

    /**
     * Sets a new pieceEvent
     *
     * @param \Dhl\DataTypesGlobal\PieceEventType[] $pieceEvent
     * @return self
     */
    public function setPieceEvent(array $pieceEvent)
    {
        $this->pieceEvent = $pieceEvent;
        return $this;
    }


}

