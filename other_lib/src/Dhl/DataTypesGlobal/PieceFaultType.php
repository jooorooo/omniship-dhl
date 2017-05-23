<?php

namespace Dhl\DataTypesGlobal;

/**
 * Class representing PieceFaultType
 *
 * 
 * XSD Type: PieceFault
 */
class PieceFaultType
{

    /**
     * The License Plate identifier.
     *
     * @property string $pieceID
     */
    private $pieceID = null;

    /**
     * Condition Code
     *
     * @property string $conditionCode
     */
    private $conditionCode = null;

    /**
     * Condition Data
     *
     * @property string $conditionData
     */
    private $conditionData = null;

    /**
     * Gets as pieceID
     *
     * The License Plate identifier.
     *
     * @return string
     */
    public function getPieceID()
    {
        return $this->pieceID;
    }

    /**
     * Sets a new pieceID
     *
     * The License Plate identifier.
     *
     * @param string $pieceID
     * @return self
     */
    public function setPieceID($pieceID)
    {
        $this->pieceID = $pieceID;
        return $this;
    }

    /**
     * Gets as conditionCode
     *
     * Condition Code
     *
     * @return string
     */
    public function getConditionCode()
    {
        return $this->conditionCode;
    }

    /**
     * Sets a new conditionCode
     *
     * Condition Code
     *
     * @param string $conditionCode
     * @return self
     */
    public function setConditionCode($conditionCode)
    {
        $this->conditionCode = $conditionCode;
        return $this;
    }

    /**
     * Gets as conditionData
     *
     * Condition Data
     *
     * @return string
     */
    public function getConditionData()
    {
        return $this->conditionData;
    }

    /**
     * Sets a new conditionData
     *
     * Condition Data
     *
     * @param string $conditionData
     * @return self
     */
    public function setConditionData($conditionData)
    {
        $this->conditionData = $conditionData;
        return $this;
    }


}

