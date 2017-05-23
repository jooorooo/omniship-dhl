<?php

namespace Dhl\DCTResponsedatatypes;

/**
 * Class representing MrkSrvType
 *
 * 
 * XSD Type: MrkSrvType
 */
class MrkSrvType
{

    /**
     * @property string $localProductCode
     */
    private $localProductCode = null;

    /**
     * @property string $localServiceType
     */
    private $localServiceType = null;

    /**
     * @property string $productShortName
     */
    private $productShortName = null;

    /**
     * @property string $globalServiceName
     */
    private $globalServiceName = null;

    /**
     * @property string $localProductName
     */
    private $localProductName = null;

    /**
     * @property string $localServiceTypeName
     */
    private $localServiceTypeName = null;

    /**
     * @property string $productDesc
     */
    private $productDesc = null;

    /**
     * @property string $serviceDesc
     */
    private $serviceDesc = null;

    /**
     * @property string $networkTypeCode
     */
    private $networkTypeCode = null;

    /**
     * @property string $pOfferedCustAgreement
     */
    private $pOfferedCustAgreement = null;

    /**
     * @property string $sOfferedCustAgreement
     */
    private $sOfferedCustAgreement = null;

    /**
     * @property string $transInd
     */
    private $transInd = null;

    /**
     * @property string[] $chargeCodeType
     */
    private $chargeCodeType = array(
        
    );

    /**
     * @property string $mrkSrvInd
     */
    private $mrkSrvInd = null;

    /**
     * Gets as localProductCode
     *
     * @return string
     */
    public function getLocalProductCode()
    {
        return $this->localProductCode;
    }

    /**
     * Sets a new localProductCode
     *
     * @param string $localProductCode
     * @return self
     */
    public function setLocalProductCode($localProductCode)
    {
        $this->localProductCode = $localProductCode;
        return $this;
    }

    /**
     * Gets as localServiceType
     *
     * @return string
     */
    public function getLocalServiceType()
    {
        return $this->localServiceType;
    }

    /**
     * Sets a new localServiceType
     *
     * @param string $localServiceType
     * @return self
     */
    public function setLocalServiceType($localServiceType)
    {
        $this->localServiceType = $localServiceType;
        return $this;
    }

    /**
     * Gets as productShortName
     *
     * @return string
     */
    public function getProductShortName()
    {
        return $this->productShortName;
    }

    /**
     * Sets a new productShortName
     *
     * @param string $productShortName
     * @return self
     */
    public function setProductShortName($productShortName)
    {
        $this->productShortName = $productShortName;
        return $this;
    }

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
     * Gets as localProductName
     *
     * @return string
     */
    public function getLocalProductName()
    {
        return $this->localProductName;
    }

    /**
     * Sets a new localProductName
     *
     * @param string $localProductName
     * @return self
     */
    public function setLocalProductName($localProductName)
    {
        $this->localProductName = $localProductName;
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
     * Gets as productDesc
     *
     * @return string
     */
    public function getProductDesc()
    {
        return $this->productDesc;
    }

    /**
     * Sets a new productDesc
     *
     * @param string $productDesc
     * @return self
     */
    public function setProductDesc($productDesc)
    {
        $this->productDesc = $productDesc;
        return $this;
    }

    /**
     * Gets as serviceDesc
     *
     * @return string
     */
    public function getServiceDesc()
    {
        return $this->serviceDesc;
    }

    /**
     * Sets a new serviceDesc
     *
     * @param string $serviceDesc
     * @return self
     */
    public function setServiceDesc($serviceDesc)
    {
        $this->serviceDesc = $serviceDesc;
        return $this;
    }

    /**
     * Gets as networkTypeCode
     *
     * @return string
     */
    public function getNetworkTypeCode()
    {
        return $this->networkTypeCode;
    }

    /**
     * Sets a new networkTypeCode
     *
     * @param string $networkTypeCode
     * @return self
     */
    public function setNetworkTypeCode($networkTypeCode)
    {
        $this->networkTypeCode = $networkTypeCode;
        return $this;
    }

    /**
     * Gets as pOfferedCustAgreement
     *
     * @return string
     */
    public function getPOfferedCustAgreement()
    {
        return $this->pOfferedCustAgreement;
    }

    /**
     * Sets a new pOfferedCustAgreement
     *
     * @param string $pOfferedCustAgreement
     * @return self
     */
    public function setPOfferedCustAgreement($pOfferedCustAgreement)
    {
        $this->pOfferedCustAgreement = $pOfferedCustAgreement;
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
     * Gets as transInd
     *
     * @return string
     */
    public function getTransInd()
    {
        return $this->transInd;
    }

    /**
     * Sets a new transInd
     *
     * @param string $transInd
     * @return self
     */
    public function setTransInd($transInd)
    {
        $this->transInd = $transInd;
        return $this;
    }

    /**
     * Adds as chargeCodeType
     *
     * @return self
     * @param string $chargeCodeType
     */
    public function addToChargeCodeType($chargeCodeType)
    {
        $this->chargeCodeType[] = $chargeCodeType;
        return $this;
    }

    /**
     * isset chargeCodeType
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetChargeCodeType($index)
    {
        return isset($this->chargeCodeType[$index]);
    }

    /**
     * unset chargeCodeType
     *
     * @param scalar $index
     * @return void
     */
    public function unsetChargeCodeType($index)
    {
        unset($this->chargeCodeType[$index]);
    }

    /**
     * Gets as chargeCodeType
     *
     * @return string[]
     */
    public function getChargeCodeType()
    {
        return $this->chargeCodeType;
    }

    /**
     * Sets a new chargeCodeType
     *
     * @param string[] $chargeCodeType
     * @return self
     */
    public function setChargeCodeType(array $chargeCodeType)
    {
        $this->chargeCodeType = $chargeCodeType;
        return $this;
    }

    /**
     * Gets as mrkSrvInd
     *
     * @return string
     */
    public function getMrkSrvInd()
    {
        return $this->mrkSrvInd;
    }

    /**
     * Sets a new mrkSrvInd
     *
     * @param string $mrkSrvInd
     * @return self
     */
    public function setMrkSrvInd($mrkSrvInd)
    {
        $this->mrkSrvInd = $mrkSrvInd;
        return $this;
    }


}

