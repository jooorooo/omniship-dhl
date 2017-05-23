<?php

namespace Dhl\DCTResponsedatatypes\ProdType;

/**
 * Class representing VldSrvCombAType
 */
class VldSrvCombAType
{

    /**
     * @property string $specialServiceType
     */
    private $specialServiceType = null;

    /**
     * @property string[] $localServiceType
     */
    private $localServiceType = array(
        
    );

    /**
     * @property \Dhl\DCTResponsedatatypes\ProdType\VldSrvCombAType\CombRSrvAType[]
     * $combRSrv
     */
    private $combRSrv = array(
        
    );

    /**
     * Gets as specialServiceType
     *
     * @return string
     */
    public function getSpecialServiceType()
    {
        return $this->specialServiceType;
    }

    /**
     * Sets a new specialServiceType
     *
     * @param string $specialServiceType
     * @return self
     */
    public function setSpecialServiceType($specialServiceType)
    {
        $this->specialServiceType = $specialServiceType;
        return $this;
    }

    /**
     * Adds as localServiceType
     *
     * @return self
     * @param string $localServiceType
     */
    public function addToLocalServiceType($localServiceType)
    {
        $this->localServiceType[] = $localServiceType;
        return $this;
    }

    /**
     * isset localServiceType
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLocalServiceType($index)
    {
        return isset($this->localServiceType[$index]);
    }

    /**
     * unset localServiceType
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLocalServiceType($index)
    {
        unset($this->localServiceType[$index]);
    }

    /**
     * Gets as localServiceType
     *
     * @return string[]
     */
    public function getLocalServiceType()
    {
        return $this->localServiceType;
    }

    /**
     * Sets a new localServiceType
     *
     * @param string[] $localServiceType
     * @return self
     */
    public function setLocalServiceType(array $localServiceType)
    {
        $this->localServiceType = $localServiceType;
        return $this;
    }

    /**
     * Adds as combRSrv
     *
     * @return self
     * @param \Dhl\DCTResponsedatatypes\ProdType\VldSrvCombAType\CombRSrvAType
     * $combRSrv
     */
    public function addToCombRSrv(\Dhl\DCTResponsedatatypes\ProdType\VldSrvCombAType\CombRSrvAType $combRSrv)
    {
        $this->combRSrv[] = $combRSrv;
        return $this;
    }

    /**
     * isset combRSrv
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCombRSrv($index)
    {
        return isset($this->combRSrv[$index]);
    }

    /**
     * unset combRSrv
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCombRSrv($index)
    {
        unset($this->combRSrv[$index]);
    }

    /**
     * Gets as combRSrv
     *
     * @return \Dhl\DCTResponsedatatypes\ProdType\VldSrvCombAType\CombRSrvAType[]
     */
    public function getCombRSrv()
    {
        return $this->combRSrv;
    }

    /**
     * Sets a new combRSrv
     *
     * @param \Dhl\DCTResponsedatatypes\ProdType\VldSrvCombAType\CombRSrvAType[]
     * $combRSrv
     * @return self
     */
    public function setCombRSrv(array $combRSrv)
    {
        $this->combRSrv = $combRSrv;
        return $this;
    }


}

