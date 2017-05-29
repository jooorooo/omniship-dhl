<?php

namespace Dhl\DataTypesGlobal;

/**
 * Class representing FilingType
 *
 * 
 * XSD Type: Filing
 */
class FilingType
{

    /**
     * @property string $filingType
     */
    private $filingType = null;

    /**
     * @property string $fTSR
     */
    private $fTSR = null;

    /**
     * @property string $iTN
     */
    private $iTN = null;

    /**
     * @property string $aES4EIN
     */
    private $aES4EIN = null;

    /**
     * Gets as filingType
     *
     * @return string
     */
    public function getFilingType()
    {
        return $this->filingType;
    }

    /**
     * Sets a new filingType
     *
     * @param string $filingType
     * @return self
     */
    public function setFilingType($filingType)
    {
        $this->filingType = $filingType;
        return $this;
    }

    /**
     * Gets as fTSR
     *
     * @return string
     */
    public function getFTSR()
    {
        return $this->fTSR;
    }

    /**
     * Sets a new fTSR
     *
     * @param string $fTSR
     * @return self
     */
    public function setFTSR($fTSR)
    {
        $this->fTSR = $fTSR;
        return $this;
    }

    /**
     * Gets as iTN
     *
     * @return string
     */
    public function getITN()
    {
        return $this->iTN;
    }

    /**
     * Sets a new iTN
     *
     * @param string $iTN
     * @return self
     */
    public function setITN($iTN)
    {
        $this->iTN = $iTN;
        return $this;
    }

    /**
     * Gets as aES4EIN
     *
     * @return string
     */
    public function getAES4EIN()
    {
        return $this->aES4EIN;
    }

    /**
     * Sets a new aES4EIN
     *
     * @param string $aES4EIN
     * @return self
     */
    public function setAES4EIN($aES4EIN)
    {
        $this->aES4EIN = $aES4EIN;
        return $this;
    }


}

