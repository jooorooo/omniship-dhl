<?php

namespace Dhl\DCTResponsedatatypes\SrvCombType;

/**
 * Class representing SrvCombAType
 */
class SrvCombAType
{

    /**
     * @property \Dhl\DCTResponsedatatypes\ProdType\VldSrvCombAType[] $prod
     */
    private $prod = null;

    /**
     * Adds as vldSrvComb
     *
     * @return self
     * @param \Dhl\DCTResponsedatatypes\ProdType\VldSrvCombAType $vldSrvComb
     */
    public function addToProd(\Dhl\DCTResponsedatatypes\ProdType\VldSrvCombAType $vldSrvComb)
    {
        $this->prod[] = $vldSrvComb;
        return $this;
    }

    /**
     * isset prod
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProd($index)
    {
        return isset($this->prod[$index]);
    }

    /**
     * unset prod
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProd($index)
    {
        unset($this->prod[$index]);
    }

    /**
     * Gets as prod
     *
     * @return \Dhl\DCTResponsedatatypes\ProdType\VldSrvCombAType[]
     */
    public function getProd()
    {
        return $this->prod;
    }

    /**
     * Sets a new prod
     *
     * @param \Dhl\DCTResponsedatatypes\ProdType\VldSrvCombAType[] $prod
     * @return self
     */
    public function setProd(array $prod)
    {
        $this->prod = $prod;
        return $this;
    }


}

