<?php

namespace Dhl\DataTypesGlobal;
use Dhl\Traits\Request;

/**
 * Class representing DutiableType
 *
 * 
 * XSD Type: Dutiable
 */
class DutiableType
{

    use Request;

    /**
     * @property float $declaredValue
     */
    private $declaredValue = null;

    /**
     * @property string $declaredCurrency
     */
    private $declaredCurrency = null;

    /**
     * @property string $scheduleB
     */
    private $scheduleB = null;

    /**
     * @property string $exportLicense
     */
    private $exportLicense = null;

    /**
     * @property string $shipperEIN
     */
    private $shipperEIN = null;

    /**
     * @property string $shipperIDType
     */
    private $shipperIDType = null;

    /**
     * @property string $consigneeIDType
     */
    private $consigneeIDType = null;

    /**
     * @property string $importLicense
     */
    private $importLicense = null;

    /**
     * @property string $consigneeEIN
     */
    private $consigneeEIN = null;

    /**
     * @property string $termsOfTrade
     */
    private $termsOfTrade = null;

    /**
     * @property string $commerceLicensed
     */
    private $commerceLicensed = null;

    /**
     * @property \Dhl\DataTypesGlobal\FilingType $filing
     */
    private $filing = null;

    /**
     * Gets as declaredValue
     *
     * @return float
     */
    public function getDeclaredValue()
    {
        return $this->declaredValue;
    }

    /**
     * Sets a new declaredValue
     *
     * @param float $declaredValue
     * @return self
     */
    public function setDeclaredValue($declaredValue)
    {
        $this->declaredValue = $declaredValue;
        return $this;
    }

    /**
     * Gets as declaredCurrency
     *
     * @return string
     */
    public function getDeclaredCurrency()
    {
        return $this->declaredCurrency;
    }

    /**
     * Sets a new declaredCurrency
     *
     * @param string $declaredCurrency
     * @return self
     */
    public function setDeclaredCurrency($declaredCurrency)
    {
        $this->declaredCurrency = $declaredCurrency;
        return $this;
    }

    /**
     * Gets as scheduleB
     *
     * @return string
     */
    public function getScheduleB()
    {
        return $this->scheduleB;
    }

    /**
     * Sets a new scheduleB
     *
     * @param string $scheduleB
     * @return self
     */
    public function setScheduleB($scheduleB)
    {
        $this->scheduleB = $scheduleB;
        return $this;
    }

    /**
     * Gets as exportLicense
     *
     * @return string
     */
    public function getExportLicense()
    {
        return $this->exportLicense;
    }

    /**
     * Sets a new exportLicense
     *
     * @param string $exportLicense
     * @return self
     */
    public function setExportLicense($exportLicense)
    {
        $this->exportLicense = $exportLicense;
        return $this;
    }

    /**
     * Gets as shipperEIN
     *
     * @return string
     */
    public function getShipperEIN()
    {
        return $this->shipperEIN;
    }

    /**
     * Sets a new shipperEIN
     *
     * @param string $shipperEIN
     * @return self
     */
    public function setShipperEIN($shipperEIN)
    {
        $this->shipperEIN = $shipperEIN;
        return $this;
    }

    /**
     * Gets as shipperIDType
     *
     * @return string
     */
    public function getShipperIDType()
    {
        return $this->shipperIDType;
    }

    /**
     * Sets a new shipperIDType
     *
     * @param string $shipperIDType
     * @return self
     */
    public function setShipperIDType($shipperIDType)
    {
        $this->shipperIDType = $shipperIDType;
        return $this;
    }

    /**
     * Gets as consigneeIDType
     *
     * @return string
     */
    public function getConsigneeIDType()
    {
        return $this->consigneeIDType;
    }

    /**
     * Sets a new consigneeIDType
     *
     * @param string $consigneeIDType
     * @return self
     */
    public function setConsigneeIDType($consigneeIDType)
    {
        $this->consigneeIDType = $consigneeIDType;
        return $this;
    }

    /**
     * Gets as importLicense
     *
     * @return string
     */
    public function getImportLicense()
    {
        return $this->importLicense;
    }

    /**
     * Sets a new importLicense
     *
     * @param string $importLicense
     * @return self
     */
    public function setImportLicense($importLicense)
    {
        $this->importLicense = $importLicense;
        return $this;
    }

    /**
     * Gets as consigneeEIN
     *
     * @return string
     */
    public function getConsigneeEIN()
    {
        return $this->consigneeEIN;
    }

    /**
     * Sets a new consigneeEIN
     *
     * @param string $consigneeEIN
     * @return self
     */
    public function setConsigneeEIN($consigneeEIN)
    {
        $this->consigneeEIN = $consigneeEIN;
        return $this;
    }

    /**
     * Gets as termsOfTrade
     *
     * @return string
     */
    public function getTermsOfTrade()
    {
        return $this->termsOfTrade;
    }

    /**
     * Sets a new termsOfTrade
     *
     * @param string $termsOfTrade
     * @return self
     */
    public function setTermsOfTrade($termsOfTrade)
    {
        $this->termsOfTrade = $termsOfTrade;
        return $this;
    }

    /**
     * Gets as commerceLicensed
     *
     * @return string
     */
    public function getCommerceLicensed()
    {
        return $this->commerceLicensed;
    }

    /**
     * Sets a new commerceLicensed
     *
     * @param string $commerceLicensed
     * @return self
     */
    public function setCommerceLicensed($commerceLicensed)
    {
        $this->commerceLicensed = $commerceLicensed;
        return $this;
    }

    /**
     * Gets as filing
     *
     * @return \Dhl\DataTypesGlobal\FilingType
     */
    public function getFiling()
    {
        return $this->filing;
    }

    /**
     * Sets a new filing
     *
     * @param \Dhl\DataTypesGlobal\FilingType $filing
     * @return self
     */
    public function setFiling(\Dhl\DataTypesGlobal\FilingType $filing)
    {
        $this->filing = $filing;
        return $this;
    }


}

