<?php

namespace Dhl\DataTypes;

/**
 * Class representing NoteType
 *
 * Note/Warning
 * XSD Type: Note
 */
class NoteType
{

    /**
     * @property string $actionNote
     */
    private $actionNote = null;

    /**
     * @property \Dhl\DataTypes\ConditionType[] $condition
     */
    private $condition = array(
        
    );

    /**
     * Gets as actionNote
     *
     * @return string
     */
    public function getActionNote()
    {
        return $this->actionNote;
    }

    /**
     * Sets a new actionNote
     *
     * @param string $actionNote
     * @return self
     */
    public function setActionNote($actionNote)
    {
        $this->actionNote = $actionNote;
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

