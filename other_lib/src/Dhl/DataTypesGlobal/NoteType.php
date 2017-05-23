<?php

namespace Dhl\DataTypesGlobal;

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
     * @property \Dhl\DataTypesGlobal\ConditionType[] $condition
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
     * @param \Dhl\DataTypesGlobal\ConditionType $condition
     */
    public function addToCondition(\Dhl\DataTypesGlobal\ConditionType $condition)
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
     * @return \Dhl\DataTypesGlobal\ConditionType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * @param \Dhl\DataTypesGlobal\ConditionType[] $condition
     * @return self
     */
    public function setCondition(array $condition)
    {
        $this->condition = $condition;
        return $this;
    }


}

