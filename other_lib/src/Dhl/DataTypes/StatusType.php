<?php

namespace Dhl\DataTypes;

/**
 * Class representing StatusType
 *
 * Status/Exception signal element
 * XSD Type: Status
 */
class StatusType
{

    /**
     * @property string $actionStatus
     */
    private $actionStatus = null;

    /**
     * @property \Dhl\DataTypes\ConditionType[] $condition
     */
    private $condition = array(
        
    );

    /**
     * Gets as actionStatus
     *
     * @return string
     */
    public function getActionStatus()
    {
        return $this->actionStatus;
    }

    /**
     * Sets a new actionStatus
     *
     * @param string $actionStatus
     * @return self
     */
    public function setActionStatus($actionStatus)
    {
        $this->actionStatus = $actionStatus;
        return $this;
    }

    /**
     * Adds as condition
     *
     * @return self
     * @param \Dhl\DataTypes\ConditionType $condition
     */
    public function addToCondition(\Dhl\DataTypes\ConditionType $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition
     *
     * @return \Dhl\DataTypes\ConditionType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * @param \Dhl\DataTypes\ConditionType[] $condition
     * @return self
     */
    public function setCondition(array $condition)
    {
        $this->condition = $condition;
        return $this;
    }


}

