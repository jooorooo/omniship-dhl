<?php

namespace Dhl\DCTResponse\GetQuoteResponseAType;

/**
 * Class representing SrvsAType
 */
class SrvsAType
{

    /**
     * @property \Dhl\DCTResponsedatatypes\SrvType[] $srv
     */
    private $srv = array(
        
    );

    /**
     * Adds as srv
     *
     * @return self
     * @param \Dhl\DCTResponsedatatypes\SrvType $srv
     */
    public function addToSrv(\Dhl\DCTResponsedatatypes\SrvType $srv)
    {
        $this->srv[] = $srv;
        return $this;
    }

    /**
     * isset srv
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSrv($index)
    {
        return isset($this->srv[$index]);
    }

    /**
     * unset srv
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSrv($index)
    {
        unset($this->srv[$index]);
    }

    /**
     * Gets as srv
     *
     * @return \Dhl\DCTResponsedatatypes\SrvType[]
     */
    public function getSrv()
    {
        return $this->srv;
    }

    /**
     * Sets a new srv
     *
     * @param \Dhl\DCTResponsedatatypes\SrvType[] $srv
     * @return self
     */
    public function setSrv(array $srv)
    {
        $this->srv = $srv;
        return $this;
    }


}

