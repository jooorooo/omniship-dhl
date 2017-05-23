<?php

namespace Dhl\DataTypes;

/**
 * Class representing EventRemarksType
 *
 * 
 * XSD Type: EventRemarks
 */
class EventRemarksType
{

    /**
     * @property string $furtherDetails
     */
    private $furtherDetails = null;

    /**
     * @property string $nextSteps
     */
    private $nextSteps = null;

    /**
     * Gets as furtherDetails
     *
     * @return string
     */
    public function getFurtherDetails()
    {
        return $this->furtherDetails;
    }

    /**
     * Sets a new furtherDetails
     *
     * @param string $furtherDetails
     * @return self
     */
    public function setFurtherDetails($furtherDetails)
    {
        $this->furtherDetails = $furtherDetails;
        return $this;
    }

    /**
     * Gets as nextSteps
     *
     * @return string
     */
    public function getNextSteps()
    {
        return $this->nextSteps;
    }

    /**
     * Sets a new nextSteps
     *
     * @param string $nextSteps
     * @return self
     */
    public function setNextSteps($nextSteps)
    {
        $this->nextSteps = $nextSteps;
        return $this;
    }


}

