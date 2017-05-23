<?php

namespace Dhl\DCTResponsedatatypes\ProdType\VldSrvCombAType;

/**
 * Class representing CombRSrvAType
 */
class CombRSrvAType
{

    /**
     * @property string $restrictedSpecialServiceType
     */
    private $restrictedSpecialServiceType = null;

    /**
     * @property string[] $restrictedLocalServiceType
     */
    private $restrictedLocalServiceType = array(
        
    );

    /**
     * Gets as restrictedSpecialServiceType
     *
     * @return string
     */
    public function getRestrictedSpecialServiceType()
    {
        return $this->restrictedSpecialServiceType;
    }

    /**
     * Sets a new restrictedSpecialServiceType
     *
     * @param string $restrictedSpecialServiceType
     * @return self
     */
    public function setRestrictedSpecialServiceType($restrictedSpecialServiceType)
    {
        $this->restrictedSpecialServiceType = $restrictedSpecialServiceType;
        return $this;
    }

    /**
     * Adds as restrictedLocalServiceType
     *
     * @return self
     * @param string $restrictedLocalServiceType
     */
    public function addToRestrictedLocalServiceType($restrictedLocalServiceType)
    {
        $this->restrictedLocalServiceType[] = $restrictedLocalServiceType;
        return $this;
    }

    /**
     * isset restrictedLocalServiceType
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRestrictedLocalServiceType($index)
    {
        return isset($this->restrictedLocalServiceType[$index]);
    }

    /**
     * unset restrictedLocalServiceType
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRestrictedLocalServiceType($index)
    {
        unset($this->restrictedLocalServiceType[$index]);
    }

    /**
     * Gets as restrictedLocalServiceType
     *
     * @return string[]
     */
    public function getRestrictedLocalServiceType()
    {
        return $this->restrictedLocalServiceType;
    }

    /**
     * Sets a new restrictedLocalServiceType
     *
     * @param string[] $restrictedLocalServiceType
     * @return self
     */
    public function setRestrictedLocalServiceType(array $restrictedLocalServiceType)
    {
        $this->restrictedLocalServiceType = $restrictedLocalServiceType;
        return $this;
    }


}

