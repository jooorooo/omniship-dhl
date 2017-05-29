<?php

namespace Dhl;
use Dhl\Traits\Request;

/**
 * Class representing KnownTrackingRequest
 */
class KnownTrackingRequest
{

    use Request;

    /**
     * @property \Dhl\DataTypes\RequestType $request
     */
    private $request = null;

    /**
     * @property string $languageCode
     */
    private $languageCode = null;

    /**
     * @property string[] $aWBNumber
     */
    private $aWBNumber = array(
        
    );

    /**
     * @property string[] $lPNumber
     */
    private $lPNumber = array(
        
    );

    /**
     * @property string $levelOfDetails
     */
    private $levelOfDetails = null;

    /**
     * @property string $piecesEnabled
     */
    private $piecesEnabled = null;

    /**
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * Gets as request
     *
     * @return \Dhl\DataTypes\RequestType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \Dhl\DataTypes\RequestType $request
     * @return self
     */
    public function setRequest(\Dhl\DataTypes\RequestType $request)
    {
        $this->request = $request;
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

    /**
     * Adds as aWBNumber
     *
     * @return self
     * @param string $aWBNumber
     */
    public function addToAWBNumber($aWBNumber)
    {
        $this->aWBNumber[] = $aWBNumber;
        return $this;
    }

    /**
     * isset aWBNumber
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAWBNumber($index)
    {
        return isset($this->aWBNumber[$index]);
    }

    /**
     * unset aWBNumber
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAWBNumber($index)
    {
        unset($this->aWBNumber[$index]);
    }

    /**
     * Gets as aWBNumber
     *
     * @return string[]
     */
    public function getAWBNumber()
    {
        return $this->aWBNumber;
    }

    /**
     * Sets a new aWBNumber
     *
     * @param string $aWBNumber
     * @return self
     */
    public function setAWBNumber(array $aWBNumber)
    {
        $this->aWBNumber = $aWBNumber;
        return $this;
    }

    /**
     * Adds as lPNumber
     *
     * @return self
     * @param string $lPNumber
     */
    public function addToLPNumber($lPNumber)
    {
        $this->lPNumber[] = $lPNumber;
        return $this;
    }

    /**
     * isset lPNumber
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLPNumber($index)
    {
        return isset($this->lPNumber[$index]);
    }

    /**
     * unset lPNumber
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLPNumber($index)
    {
        unset($this->lPNumber[$index]);
    }

    /**
     * Gets as lPNumber
     *
     * @return string[]
     */
    public function getLPNumber()
    {
        return $this->lPNumber;
    }

    /**
     * Sets a new lPNumber
     *
     * @param string $lPNumber
     * @return self
     */
    public function setLPNumber(array $lPNumber)
    {
        $this->lPNumber = $lPNumber;
        return $this;
    }

    /**
     * Gets as levelOfDetails
     *
     * @return string
     */
    public function getLevelOfDetails()
    {
        return $this->levelOfDetails;
    }

    /**
     * Sets a new levelOfDetails
     *
     * @param string $levelOfDetails
     * @return self
     */
    public function setLevelOfDetails($levelOfDetails)
    {
        $this->levelOfDetails = $levelOfDetails;
        return $this;
    }

    /**
     * Gets as piecesEnabled
     *
     * @return string
     */
    public function getPiecesEnabled()
    {
        return $this->piecesEnabled;
    }

    /**
     * Sets a new piecesEnabled
     *
     * @param string $piecesEnabled (S,B,P)
     * @return self
     */
    public function setPiecesEnabled($piecesEnabled)
    {
        $this->piecesEnabled = $piecesEnabled;
        return $this;
    }

    /**
     * Gets as countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

}

