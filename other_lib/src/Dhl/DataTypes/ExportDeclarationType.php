<?php

namespace Dhl\DataTypes;

/**
 * Class representing ExportDeclarationType
 *
 * 
 * XSD Type: ExportDeclaration
 */
class ExportDeclarationType
{

    /**
     * @property string $interConsignee
     */
    private $interConsignee = null;

    /**
     * @property string $isPartiesRelation
     */
    private $isPartiesRelation = null;

    /**
     * @property string $eCCN
     */
    private $eCCN = null;

    /**
     * @property string $signatureName
     */
    private $signatureName = null;

    /**
     * @property string $signatureTitle
     */
    private $signatureTitle = null;

    /**
     * @property string $exportReason
     */
    private $exportReason = null;

    /**
     * @property string $exportReasonCode
     */
    private $exportReasonCode = null;

    /**
     * @property string $sedNumber
     */
    private $sedNumber = null;

    /**
     * @property string $sedNumberType
     */
    private $sedNumberType = null;

    /**
     * @property string $mxStateCode
     */
    private $mxStateCode = null;

    /**
     * specifics about each of the line item
     *
     * @property \Dhl\DataTypes\ExportLineItemType[] $exportLineItem
     */
    private $exportLineItem = array(
        
    );

    /**
     * Gets as interConsignee
     *
     * @return string
     */
    public function getInterConsignee()
    {
        return $this->interConsignee;
    }

    /**
     * Sets a new interConsignee
     *
     * @param string $interConsignee
     * @return self
     */
    public function setInterConsignee($interConsignee)
    {
        $this->interConsignee = $interConsignee;
        return $this;
    }

    /**
     * Gets as isPartiesRelation
     *
     * @return string
     */
    public function getIsPartiesRelation()
    {
        return $this->isPartiesRelation;
    }

    /**
     * Sets a new isPartiesRelation
     *
     * @param string $isPartiesRelation
     * @return self
     */
    public function setIsPartiesRelation($isPartiesRelation)
    {
        $this->isPartiesRelation = $isPartiesRelation;
        return $this;
    }

    /**
     * Gets as eCCN
     *
     * @return string
     */
    public function getECCN()
    {
        return $this->eCCN;
    }

    /**
     * Sets a new eCCN
     *
     * @param string $eCCN
     * @return self
     */
    public function setECCN($eCCN)
    {
        $this->eCCN = $eCCN;
        return $this;
    }

    /**
     * Gets as signatureName
     *
     * @return string
     */
    public function getSignatureName()
    {
        return $this->signatureName;
    }

    /**
     * Sets a new signatureName
     *
     * @param string $signatureName
     * @return self
     */
    public function setSignatureName($signatureName)
    {
        $this->signatureName = $signatureName;
        return $this;
    }

    /**
     * Gets as signatureTitle
     *
     * @return string
     */
    public function getSignatureTitle()
    {
        return $this->signatureTitle;
    }

    /**
     * Sets a new signatureTitle
     *
     * @param string $signatureTitle
     * @return self
     */
    public function setSignatureTitle($signatureTitle)
    {
        $this->signatureTitle = $signatureTitle;
        return $this;
    }

    /**
     * Gets as exportReason
     *
     * @return string
     */
    public function getExportReason()
    {
        return $this->exportReason;
    }

    /**
     * Sets a new exportReason
     *
     * @param string $exportReason
     * @return self
     */
    public function setExportReason($exportReason)
    {
        $this->exportReason = $exportReason;
        return $this;
    }

    /**
     * Gets as exportReasonCode
     *
     * @return string
     */
    public function getExportReasonCode()
    {
        return $this->exportReasonCode;
    }

    /**
     * Sets a new exportReasonCode
     *
     * @param string $exportReasonCode
     * @return self
     */
    public function setExportReasonCode($exportReasonCode)
    {
        $this->exportReasonCode = $exportReasonCode;
        return $this;
    }

    /**
     * Gets as sedNumber
     *
     * @return string
     */
    public function getSedNumber()
    {
        return $this->sedNumber;
    }

    /**
     * Sets a new sedNumber
     *
     * @param string $sedNumber
     * @return self
     */
    public function setSedNumber($sedNumber)
    {
        $this->sedNumber = $sedNumber;
        return $this;
    }

    /**
     * Gets as sedNumberType
     *
     * @return string
     */
    public function getSedNumberType()
    {
        return $this->sedNumberType;
    }

    /**
     * Sets a new sedNumberType
     *
     * @param string $sedNumberType
     * @return self
     */
    public function setSedNumberType($sedNumberType)
    {
        $this->sedNumberType = $sedNumberType;
        return $this;
    }

    /**
     * Gets as mxStateCode
     *
     * @return string
     */
    public function getMxStateCode()
    {
        return $this->mxStateCode;
    }

    /**
     * Sets a new mxStateCode
     *
     * @param string $mxStateCode
     * @return self
     */
    public function setMxStateCode($mxStateCode)
    {
        $this->mxStateCode = $mxStateCode;
        return $this;
    }

    /**
     * Adds as exportLineItem
     *
     * specifics about each of the line item
     *
     * @return self
     * @param \Dhl\DataTypes\ExportLineItemType $exportLineItem
     */
    public function addToExportLineItem(\Dhl\DataTypes\ExportLineItemType $exportLineItem)
    {
        $this->exportLineItem[] = $exportLineItem;
        return $this;
    }

    /**
     * isset exportLineItem
     *
     * specifics about each of the line item
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExportLineItem($index)
    {
        return isset($this->exportLineItem[$index]);
    }

    /**
     * unset exportLineItem
     *
     * specifics about each of the line item
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExportLineItem($index)
    {
        unset($this->exportLineItem[$index]);
    }

    /**
     * Gets as exportLineItem
     *
     * specifics about each of the line item
     *
     * @return \Dhl\DataTypes\ExportLineItemType[]
     */
    public function getExportLineItem()
    {
        return $this->exportLineItem;
    }

    /**
     * Sets a new exportLineItem
     *
     * specifics about each of the line item
     *
     * @param \Dhl\DataTypes\ExportLineItemType[] $exportLineItem
     * @return self
     */
    public function setExportLineItem(array $exportLineItem)
    {
        $this->exportLineItem = $exportLineItem;
        return $this;
    }


}

