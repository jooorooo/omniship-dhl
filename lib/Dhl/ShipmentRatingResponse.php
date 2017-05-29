<?php

namespace Dhl;

/**
 * Class representing ShipmentRatingResponse
 */
class ShipmentRatingResponse
{

    /**
     * @property \Dhl\DataTypes\ResponseType $response
     */
    private $response = null;

    /**
     * @property \Dhl\DataTypes\NoteType $note
     */
    private $note = null;

    /**
     * @property string $rated
     */
    private $rated = null;

    /**
     * This field will be filled if rated is 'y'
     *
     * @property float $shippingCharge
     */
    private $shippingCharge = null;

    /**
     * @property float $saturdayDeliveryCharge
     */
    private $saturdayDeliveryCharge = null;

    /**
     * @property float $proofOfDeliveryCharge
     */
    private $proofOfDeliveryCharge = null;

    /**
     * @property float $dutyPayCharge
     */
    private $dutyPayCharge = null;

    /**
     * @property float $onForwardCharge
     */
    private $onForwardCharge = null;

    /**
     * @property float $insuranceCharge
     */
    private $insuranceCharge = null;

    /**
     * @property float $packageCharge
     */
    private $packageCharge = null;

    /**
     * @property float $chargeableWeight
     */
    private $chargeableWeight = null;

    /**
     * @property float $dimensionalWeight
     */
    private $dimensionalWeight = null;

    /**
     * @property \Dhl\RatingDataTypes\RatingServiceAreaType $originServiceArea
     */
    private $originServiceArea = null;

    /**
     * @property \Dhl\RatingDataTypes\RatingServiceAreaType $destinationServiceArea
     */
    private $destinationServiceArea = null;

    /**
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @property string $weightUnit
     */
    private $weightUnit = null;

    /**
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * @property float $surcharge
     */
    private $surcharge = null;

    /**
     * for future use only
     *
     * @property string $zoneID
     */
    private $zoneID = null;

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
     * Gets as note
     *
     * @return \Dhl\DataTypes\NoteType
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * @param \Dhl\DataTypes\NoteType $note
     * @return self
     */
    public function setNote(\Dhl\DataTypes\NoteType $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as rated
     *
     * @return string
     */
    public function getRated()
    {
        return $this->rated;
    }

    /**
     * Sets a new rated
     *
     * @param string $rated
     * @return self
     */
    public function setRated($rated)
    {
        $this->rated = $rated;
        return $this;
    }

    /**
     * Gets as shippingCharge
     *
     * This field will be filled if rated is 'y'
     *
     * @return float
     */
    public function getShippingCharge()
    {
        return $this->shippingCharge;
    }

    /**
     * Sets a new shippingCharge
     *
     * This field will be filled if rated is 'y'
     *
     * @param float $shippingCharge
     * @return self
     */
    public function setShippingCharge($shippingCharge)
    {
        $this->shippingCharge = $shippingCharge;
        return $this;
    }

    /**
     * Gets as saturdayDeliveryCharge
     *
     * @return float
     */
    public function getSaturdayDeliveryCharge()
    {
        return $this->saturdayDeliveryCharge;
    }

    /**
     * Sets a new saturdayDeliveryCharge
     *
     * @param float $saturdayDeliveryCharge
     * @return self
     */
    public function setSaturdayDeliveryCharge($saturdayDeliveryCharge)
    {
        $this->saturdayDeliveryCharge = $saturdayDeliveryCharge;
        return $this;
    }

    /**
     * Gets as proofOfDeliveryCharge
     *
     * @return float
     */
    public function getProofOfDeliveryCharge()
    {
        return $this->proofOfDeliveryCharge;
    }

    /**
     * Sets a new proofOfDeliveryCharge
     *
     * @param float $proofOfDeliveryCharge
     * @return self
     */
    public function setProofOfDeliveryCharge($proofOfDeliveryCharge)
    {
        $this->proofOfDeliveryCharge = $proofOfDeliveryCharge;
        return $this;
    }

    /**
     * Gets as dutyPayCharge
     *
     * @return float
     */
    public function getDutyPayCharge()
    {
        return $this->dutyPayCharge;
    }

    /**
     * Sets a new dutyPayCharge
     *
     * @param float $dutyPayCharge
     * @return self
     */
    public function setDutyPayCharge($dutyPayCharge)
    {
        $this->dutyPayCharge = $dutyPayCharge;
        return $this;
    }

    /**
     * Gets as onForwardCharge
     *
     * @return float
     */
    public function getOnForwardCharge()
    {
        return $this->onForwardCharge;
    }

    /**
     * Sets a new onForwardCharge
     *
     * @param float $onForwardCharge
     * @return self
     */
    public function setOnForwardCharge($onForwardCharge)
    {
        $this->onForwardCharge = $onForwardCharge;
        return $this;
    }

    /**
     * Gets as insuranceCharge
     *
     * @return float
     */
    public function getInsuranceCharge()
    {
        return $this->insuranceCharge;
    }

    /**
     * Sets a new insuranceCharge
     *
     * @param float $insuranceCharge
     * @return self
     */
    public function setInsuranceCharge($insuranceCharge)
    {
        $this->insuranceCharge = $insuranceCharge;
        return $this;
    }

    /**
     * Gets as packageCharge
     *
     * @return float
     */
    public function getPackageCharge()
    {
        return $this->packageCharge;
    }

    /**
     * Sets a new packageCharge
     *
     * @param float $packageCharge
     * @return self
     */
    public function setPackageCharge($packageCharge)
    {
        $this->packageCharge = $packageCharge;
        return $this;
    }

    /**
     * Gets as chargeableWeight
     *
     * @return float
     */
    public function getChargeableWeight()
    {
        return $this->chargeableWeight;
    }

    /**
     * Sets a new chargeableWeight
     *
     * @param float $chargeableWeight
     * @return self
     */
    public function setChargeableWeight($chargeableWeight)
    {
        $this->chargeableWeight = $chargeableWeight;
        return $this;
    }

    /**
     * Gets as dimensionalWeight
     *
     * @return float
     */
    public function getDimensionalWeight()
    {
        return $this->dimensionalWeight;
    }

    /**
     * Sets a new dimensionalWeight
     *
     * @param float $dimensionalWeight
     * @return self
     */
    public function setDimensionalWeight($dimensionalWeight)
    {
        $this->dimensionalWeight = $dimensionalWeight;
        return $this;
    }

    /**
     * Gets as originServiceArea
     *
     * @return \Dhl\RatingDataTypes\RatingServiceAreaType
     */
    public function getOriginServiceArea()
    {
        return $this->originServiceArea;
    }

    /**
     * Sets a new originServiceArea
     *
     * @param \Dhl\RatingDataTypes\RatingServiceAreaType $originServiceArea
     * @return self
     */
    public function setOriginServiceArea(\Dhl\RatingDataTypes\RatingServiceAreaType $originServiceArea)
    {
        $this->originServiceArea = $originServiceArea;
        return $this;
    }

    /**
     * Gets as destinationServiceArea
     *
     * @return \Dhl\RatingDataTypes\RatingServiceAreaType
     */
    public function getDestinationServiceArea()
    {
        return $this->destinationServiceArea;
    }

    /**
     * Sets a new destinationServiceArea
     *
     * @param \Dhl\RatingDataTypes\RatingServiceAreaType $destinationServiceArea
     * @return self
     */
    public function setDestinationServiceArea(\Dhl\RatingDataTypes\RatingServiceAreaType $destinationServiceArea)
    {
        $this->destinationServiceArea = $destinationServiceArea;
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
     * Gets as weightUnit
     *
     * @return string
     */
    public function getWeightUnit()
    {
        return $this->weightUnit;
    }

    /**
     * Sets a new weightUnit
     *
     * @param string $weightUnit
     * @return self
     */
    public function setWeightUnit($weightUnit)
    {
        $this->weightUnit = $weightUnit;
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

    /**
     * Gets as surcharge
     *
     * @return float
     */
    public function getSurcharge()
    {
        return $this->surcharge;
    }

    /**
     * Sets a new surcharge
     *
     * @param float $surcharge
     * @return self
     */
    public function setSurcharge($surcharge)
    {
        $this->surcharge = $surcharge;
        return $this;
    }

    /**
     * Gets as zoneID
     *
     * for future use only
     *
     * @return string
     */
    public function getZoneID()
    {
        return $this->zoneID;
    }

    /**
     * Sets a new zoneID
     *
     * for future use only
     *
     * @param string $zoneID
     * @return self
     */
    public function setZoneID($zoneID)
    {
        $this->zoneID = $zoneID;
        return $this;
    }


}

