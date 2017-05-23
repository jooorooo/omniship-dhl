<?php

namespace Dhl;

/**
 * Class representing TrackingResponse
 */
class TrackingResponse
{

    /**
     * @property \Dhl\DataTypes\ResponseType $response
     */
    private $response = null;

    /**
     * @property \Dhl\DataTypes\AWBInfoType[] $aWBInfo
     */
    private $aWBInfo = array(
        
    );

    /**
     * @property \Dhl\DataTypes\PieceFaultType[] $fault
     */
    private $fault = null;

    /**
     * @property string $languageCode
     */
    private $languageCode = null;

    /**
     * Gets as response
     *
     * @return \Dhl\DataTypes\ResponseType
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * @param \Dhl\DataTypes\ResponseType $response
     * @return self
     */
    public function setResponse(\Dhl\DataTypes\ResponseType $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Adds as aWBInfo
     *
     * @return self
     * @param \Dhl\DataTypes\AWBInfoType $aWBInfo
     */
    public function addToAWBInfo(\Dhl\DataTypes\AWBInfoType $aWBInfo)
    {
        $this->aWBInfo[] = $aWBInfo;
        return $this;
    }

    /**
     * isset aWBInfo
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAWBInfo($index)
    {
        return isset($this->aWBInfo[$index]);
    }

    /**
     * unset aWBInfo
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAWBInfo($index)
    {
        unset($this->aWBInfo[$index]);
    }

    /**
     * Gets as aWBInfo
     *
     * @return \Dhl\DataTypes\AWBInfoType[]
     */
    public function getAWBInfo()
    {
        return $this->aWBInfo;
    }

    /**
     * Sets a new aWBInfo
     *
     * @param \Dhl\DataTypes\AWBInfoType[] $aWBInfo
     * @return self
     */
    public function setAWBInfo(array $aWBInfo)
    {
        $this->aWBInfo = $aWBInfo;
        return $this;
    }

    /**
     * Adds as pieceFault
     *
     * @return self
     * @param \Dhl\DataTypes\PieceFaultType $pieceFault
     */
    public function addToFault(\Dhl\DataTypes\PieceFaultType $pieceFault)
    {
        $this->fault[] = $pieceFault;
        return $this;
    }

    /**
     * isset fault
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFault($index)
    {
        return isset($this->fault[$index]);
    }

    /**
     * unset fault
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFault($index)
    {
        unset($this->fault[$index]);
    }

    /**
     * Gets as fault
     *
     * @return \Dhl\DataTypes\PieceFaultType[]
     */
    public function getFault()
    {
        return $this->fault;
    }

    /**
     * Sets a new fault
     *
     * @param \Dhl\DataTypes\PieceFaultType[] $fault
     * @return self
     */
    public function setFault(array $fault)
    {
        $this->fault = $fault;
        return $this;
    }

    /**
     * Gets as languageCode
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Sets a new languageCode
     *
     * @param string $languageCode
     * @return self
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
        return $this;
    }


}

