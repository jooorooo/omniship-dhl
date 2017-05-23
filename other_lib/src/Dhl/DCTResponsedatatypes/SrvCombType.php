<?php

namespace Dhl\DCTResponsedatatypes;

/**
 * Class representing SrvCombType
 *
 * 
 * XSD Type: SrvCombType
 */
class SrvCombType
{

    /**
     * @property string $globalServiceName
     */
    private $globalServiceName = null;

    /**
     * @property string $globalServiceCode
     */
    private $globalServiceCode = null;

    /**
     * @property string $localServiceCode
     */
    private $localServiceCode = null;

    /**
     * @property string $localServiceTypeName
     */
    private $localServiceTypeName = null;

    /**
     * @property string $chargeCodeType
     */
    private $chargeCodeType = null;

    /**
     * @property string $sOfferedCustAgreement
     */
    private $sOfferedCustAgreement = null;

    /**
     * @property \Dhl\DCTResponsedatatypes\SrvCombType\SrvCombAType $srvComb
     */
    private $srvComb = null;

    /**
     * Gets as globalServiceName
     *
     * @return string
     */
    public function getGlobalServiceName()
    {
        return $this->globalServiceName;
    }

    /**
     * Sets a new globalServiceName
     *
     * @param string $globalServiceName
     * @return self
     */
    public function setGlobalServiceName($globalServiceName)
    {
        $this->globalServiceName = $globalServiceName;
        return $this;
    }

    /**
     * Gets as globalServiceCode
     *
     * @return string
     */
    public function getGlobalServiceCode()
    {
        return $this->globalServiceCode;
    }

    /**
     * Sets a new globalServiceCode
     *
     * @param string $globalServiceCode
     * @return self
     */
    public function setGlobalServiceCode($globalServiceCode)
    {
        $this->globalServiceCode = $globalServiceCode;
        return $this;
    }

    /**
     * Gets as localServiceCode
     *
     * @return string
     */
    public function getLocalServiceCode()
    {
        return $this->localServiceCode;
    }

    /**
     * Sets a new localServiceCode
     *
     * @param string $localServiceCode
     * @return self
     */
    public function setLocalServiceCode($localServiceCode)
    {
        $this->localServiceCode = $localServiceCode;
        return $this;
    }

    /**
     * Gets as localServiceTypeName
     *
     * @return string
     */
    public function getLocalServiceTypeName()
    {
        return $this->localServiceTypeName;
    }

    /**
     * Sets a new localServiceTypeName
     *
     * @param string $localServiceTypeName
     * @return self
     */
    public function setLocalServiceTypeName($localServiceTypeName)
    {
        $this->localServiceTypeName = $localServiceTypeName;
        return $this;
    }

    /**
     * Gets as chargeCodeType
     *
     * @return string
     */
    public function getChargeCodeType()
    {
        return $this->chargeCodeType;
    }

    /**
     * Sets a new chargeCodeType
     *
     * @param string $chargeCodeType
     * @return self
     */
    public function setChargeCodeType($chargeCodeType)
    {
        $this->chargeCodeType = $chargeCodeType;
        return $this;
    }

    /**
     * Gets as sOfferedCustAgreement
     *
     * @return string
     */
    public function getSOfferedCustAgreement()
    {
        return $this->sOfferedCustAgreement;
    }

    /**
     * Sets a new sOfferedCustAgreement
     *
     * @param string $sOfferedCustAgreement
     * @return self
     */
    public function setSOfferedCustAgreement($sOfferedCustAgreement)
    {
        $this->sOfferedCustAgreement = $sOfferedCustAgreement;
        return $this;
    }

    /**
     * Gets as srvComb
     *
     * @return \Dhl\DCTResponsedatatypes\SrvCombType\SrvCombAType
     */
    public function getSrvComb()
    {
        return $this->srvComb;
    }

    /**
     * Sets a new srvComb
     *
     * @param \Dhl\DCTResponsedatatypes\SrvCombType\SrvCombAType $srvComb
     * @return self
     */
    public function setSrvComb(\Dhl\DCTResponsedatatypes\SrvCombType\SrvCombAType $srvComb)
    {
        $this->srvComb = $srvComb;
        return $this;
    }


}

