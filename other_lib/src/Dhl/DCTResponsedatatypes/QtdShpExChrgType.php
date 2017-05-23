<?php

namespace Dhl\DCTResponsedatatypes;

/**
 * Class representing QtdShpExChrgType
 *
 * 
 * XSD Type: QtdShpExChrgType
 */
class QtdShpExChrgType
{

    /**
     * @property string $specialServiceType
     */
    private $specialServiceType = null;

    /**
     * @property string $localServiceType
     */
    private $localServiceType = null;

    /**
     * @property string $globalServiceName
     */
    private $globalServiceName = null;

    /**
     * @property string $localServiceTypeName
     */
    private $localServiceTypeName = null;

    /**
     * @property string $sOfferedCustAgreement
     */
    private $sOfferedCustAgreement = null;

    /**
     * @property string $chargeCodeType
     */
    private $chargeCodeType = null;

    /**
     * @property float $insPrmRateInPercentage
     */
    private $insPrmRateInPercentage = null;

    /**
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @property float $chargeValue
     */
    private $chargeValue = null;

    /**
     * @property float $chargeTaxAmount
     */
    private $chargeTaxAmount = null;

    /**
     * @property float[] $chargeTaxRate
     */
    private $chargeTaxRate = array(
        
    );

    /**
     * @property \Dhl\DCTResponsedatatypes\ChargeTaxAmountDetType[] $chargeTaxAmountDet
     */
    private $chargeTaxAmountDet = array(
        
    );

    /**
     * @property \Dhl\DCTResponsedatatypes\QtdSExtrChrgInAdCurType[]
     * $qtdSExtrChrgInAdCur
     */
    private $qtdSExtrChrgInAdCur = array(
        
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
     * Gets as insPrmRateInPercentage
     *
     * @return float
     */
    public function getInsPrmRateInPercentage()
    {
        return $this->insPrmRateInPercentage;
    }

    /**
     * Sets a new insPrmRateInPercentage
     *
     * @param float $insPrmRateInPercentage
     * @return self
     */
    public function setInsPrmRateInPercentage($insPrmRateInPercentage)
    {
        $this->insPrmRateInPercentage = $insPrmRateInPercentage;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as chargeValue
     *
     * @return float
     */
    public function getChargeValue()
    {
        return $this->chargeValue;
    }

    /**
     * Sets a new chargeValue
     *
     * @param float $chargeValue
     * @return self
     */
    public function setChargeValue($chargeValue)
    {
        $this->chargeValue = $chargeValue;
        return $this;
    }

    /**
     * Gets as chargeTaxAmount
     *
     * @return float
     */
    public function getChargeTaxAmount()
    {
        return $this->chargeTaxAmount;
    }

    /**
     * Sets a new chargeTaxAmount
     *
     * @param float $chargeTaxAmount
     * @return self
     */
    public function setChargeTaxAmount($chargeTaxAmount)
    {
        $this->chargeTaxAmount = $chargeTaxAmount;
        return $this;
    }

    /**
     * Adds as chargeTaxRate
     *
     * @return self
     * @param float $chargeTaxRate
     */
    public function addToChargeTaxRate($chargeTaxRate)
    {
        $this->chargeTaxRate[] = $chargeTaxRate;
        return $this;
    }

    /**
     * isset chargeTaxRate
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetChargeTaxRate($index)
    {
        return isset($this->chargeTaxRate[$index]);
    }

    /**
     * unset chargeTaxRate
     *
     * @param scalar $index
     * @return void
     */
    public function unsetChargeTaxRate($index)
    {
        unset($this->chargeTaxRate[$index]);
    }

    /**
     * Gets as chargeTaxRate
     *
     * @return float[]
     */
    public function getChargeTaxRate()
    {
        return $this->chargeTaxRate;
    }

    /**
     * Sets a new chargeTaxRate
     *
     * @param float $chargeTaxRate
     * @return self
     */
    public function setChargeTaxRate(array $chargeTaxRate)
    {
        $this->chargeTaxRate = $chargeTaxRate;
        return $this;
    }

    /**
     * Adds as chargeTaxAmountDet
     *
     * @return self
     * @param \Dhl\DCTResponsedatatypes\ChargeTaxAmountDetType $chargeTaxAmountDet
     */
    public function addToChargeTaxAmountDet(\Dhl\DCTResponsedatatypes\ChargeTaxAmountDetType $chargeTaxAmountDet)
    {
        $this->chargeTaxAmountDet[] = $chargeTaxAmountDet;
        return $this;
    }

    /**
     * isset chargeTaxAmountDet
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetChargeTaxAmountDet($index)
    {
        return isset($this->chargeTaxAmountDet[$index]);
    }

    /**
     * unset chargeTaxAmountDet
     *
     * @param scalar $index
     * @return void
     */
    public function unsetChargeTaxAmountDet($index)
    {
        unset($this->chargeTaxAmountDet[$index]);
    }

    /**
     * Gets as chargeTaxAmountDet
     *
     * @return \Dhl\DCTResponsedatatypes\ChargeTaxAmountDetType[]
     */
    public function getChargeTaxAmountDet()
    {
        return $this->chargeTaxAmountDet;
    }

    /**
     * Sets a new chargeTaxAmountDet
     *
     * @param \Dhl\DCTResponsedatatypes\ChargeTaxAmountDetType[] $chargeTaxAmountDet
     * @return self
     */
    public function setChargeTaxAmountDet(array $chargeTaxAmountDet)
    {
        $this->chargeTaxAmountDet = $chargeTaxAmountDet;
        return $this;
    }

    /**
     * Adds as qtdSExtrChrgInAdCur
     *
     * @return self
     * @param \Dhl\DCTResponsedatatypes\QtdSExtrChrgInAdCurType $qtdSExtrChrgInAdCur
     */
    public function addToQtdSExtrChrgInAdCur(\Dhl\DCTResponsedatatypes\QtdSExtrChrgInAdCurType $qtdSExtrChrgInAdCur)
    {
        $this->qtdSExtrChrgInAdCur[] = $qtdSExtrChrgInAdCur;
        return $this;
    }

    /**
     * isset qtdSExtrChrgInAdCur
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQtdSExtrChrgInAdCur($index)
    {
        return isset($this->qtdSExtrChrgInAdCur[$index]);
    }

    /**
     * unset qtdSExtrChrgInAdCur
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQtdSExtrChrgInAdCur($index)
    {
        unset($this->qtdSExtrChrgInAdCur[$index]);
    }

    /**
     * Gets as qtdSExtrChrgInAdCur
     *
     * @return \Dhl\DCTResponsedatatypes\QtdSExtrChrgInAdCurType[]
     */
    public function getQtdSExtrChrgInAdCur()
    {
        return $this->qtdSExtrChrgInAdCur;
    }

    /**
     * Sets a new qtdSExtrChrgInAdCur
     *
     * @param \Dhl\DCTResponsedatatypes\QtdSExtrChrgInAdCurType[] $qtdSExtrChrgInAdCur
     * @return self
     */
    public function setQtdSExtrChrgInAdCur(array $qtdSExtrChrgInAdCur)
    {
        $this->qtdSExtrChrgInAdCur = $qtdSExtrChrgInAdCur;
        return $this;
    }


}

