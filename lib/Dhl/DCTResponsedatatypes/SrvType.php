<?php

namespace Dhl\DCTResponsedatatypes;

/**
 * Class representing SrvType
 *
 * 
 * XSD Type: SrvType
 */
class SrvType
{

    /**
     * @property string $globalProductCode
     */
    private $globalProductCode = null;

    /**
     * @property \Dhl\DCTResponsedatatypes\MrkSrvType[] $mrkSrv
     */
    private $mrkSrv = array(
        
    );

    /**
     * @property \Dhl\DCTResponsedatatypes\SBTPType $sBTP
     */
    private $sBTP = null;

    /**
     * Gets as globalProductCode
     *
     * @return string
     */
    public function getGlobalProductCode()
    {
        return $this->globalProductCode;
    }

    /**
     * Sets a new globalProductCode
     *
     * @param string $globalProductCode
     * @return self
     */
    public function setGlobalProductCode($globalProductCode)
    {
        $this->globalProductCode = $globalProductCode;
        return $this;
    }

    /**
     * Adds as mrkSrv
     *
     * @return self
     * @param \Dhl\DCTResponsedatatypes\MrkSrvType $mrkSrv
     */
    public function addToMrkSrv(\Dhl\DCTResponsedatatypes\MrkSrvType $mrkSrv)
    {
        $this->mrkSrv[] = $mrkSrv;
        return $this;
    }

    /**
     * isset mrkSrv
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMrkSrv($index)
    {
        return isset($this->mrkSrv[$index]);
    }

    /**
     * unset mrkSrv
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMrkSrv($index)
    {
        unset($this->mrkSrv[$index]);
    }

    /**
     * Gets as mrkSrv
     *
     * @return \Dhl\DCTResponsedatatypes\MrkSrvType[]
     */
    public function getMrkSrv()
    {
        return $this->mrkSrv;
    }

    /**
     * Sets a new mrkSrv
     *
     * @param \Dhl\DCTResponsedatatypes\MrkSrvType[] $mrkSrv
     * @return self
     */
    public function setMrkSrv(array $mrkSrv)
    {
        $this->mrkSrv = $mrkSrv;
        return $this;
    }

    /**
     * Gets as sBTP
     *
     * @return \Dhl\DCTResponsedatatypes\SBTPType
     */
    public function getSBTP()
    {
        return $this->sBTP;
    }

    /**
     * Sets a new sBTP
     *
     * @param \Dhl\DCTResponsedatatypes\SBTPType $sBTP
     * @return self
     */
    public function setSBTP(\Dhl\DCTResponsedatatypes\SBTPType $sBTP)
    {
        $this->sBTP = $sBTP;
        return $this;
    }


}

