<?php

namespace Dhl\DataTypes;

/**
 * Class representing DutiableType
 *
 * 
 * XSD Type: Dutiable
 */
class DutiableType
{

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
     * @property mixed $exportLicense
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
     * @property mixed $importLicense
     */
    private $importLicense = null;

    /**
     * @property string $consigneeEIN
     */
    private $consigneeEIN = null;

    /**
     * @property mixed $termsOfTrade
     */
    private $termsOfTrade = null;

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
     * @return mixed
     */
    public function getExportLicense()
    {
        return $this->exportLicense;
    }

    /**
     * Sets a new exportLicense
     *
     * @param mixed $exportLicense
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
     * @return mixed
     */
    public function getImportLicense()
    {
        return $this->importLicense;
    }

    /**
     * Sets a new importLicense
     *
     * @param mixed $importLicense
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
     * @return mixed
     */
    public function getTermsOfTrade()
    {
        return $this->termsOfTrade;
    }

    /**
     * Sets a new termsOfTrade
     *
     * @param mixed $termsOfTrade
     * @return self
     */
    public function setTermsOfTrade($termsOfTrade)
    {
        $this->termsOfTrade = $termsOfTrade;
        return $this;
    }


}

