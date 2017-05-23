<?php

namespace Dhl\DCTResponsedatatypes;

/**
 * Class representing QtdShpType
 *
 * 
 * XSD Type: QtdShpType
 */
class QtdShpType
{

    /**
     * @property string $globalProductCode
     */
    private $globalProductCode = null;

    /**
     * @property string $localProductCode
     */
    private $localProductCode = null;

    /**
     * @property string $productShortName
     */
    private $productShortName = null;

    /**
     * @property string $localProductName
     */
    private $localProductName = null;

    /**
     * @property string $networkTypeCode
     */
    private $networkTypeCode = null;

    /**
     * @property string $pOfferedCustAgreement
     */
    private $pOfferedCustAgreement = null;

    /**
     * @property string $transInd
     */
    private $transInd = null;

    /**
     * @property \DateTime $pickupDate
     */
    private $pickupDate = null;

    /**
     * @property \DateInterval $pickupCutoffTime
     */
    private $pickupCutoffTime = null;

    /**
     * @property \DateInterval $bookingTime
     */
    private $bookingTime = null;

    /**
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @property float $exchangeRate
     */
    private $exchangeRate = null;

    /**
     * @property float $weightCharge
     */
    private $weightCharge = null;

    /**
     * @property float $weightChargeTax
     */
    private $weightChargeTax = null;

    /**
     * @property float $weightChargeTaxRate
     */
    private $weightChargeTaxRate = null;

    /**
     * @property integer $totalTransitDays
     */
    private $totalTransitDays = null;

    /**
     * @property integer $pickupPostalLocAddDays
     */
    private $pickupPostalLocAddDays = null;

    /**
     * @property integer $deliveryPostalLocAddDays
     */
    private $deliveryPostalLocAddDays = null;

    /**
     * @property string $pickupNonDHLCourierCode
     */
    private $pickupNonDHLCourierCode = null;

    /**
     * @property string $deliveryNonDHLCourierCode
     */
    private $deliveryNonDHLCourierCode = null;

    /**
     * @property \DateInterval $deliveryCheckpointReturn
     */
    private $deliveryCheckpointReturn = null;

    /**
     * @property \DateTime $deliveryDate
     */
    private $deliveryDate = null;

    /**
     * @property \DateInterval $deliveryTime
     */
    private $deliveryTime = null;

    /**
     * @property string $deliveryTimeGMTOffset
     */
    private $deliveryTimeGMTOffset = null;

    /**
     * @property float $dimensionalWeight
     */
    private $dimensionalWeight = null;

    /**
     * @property string $weightUnit
     */
    private $weightUnit = null;

    /**
     * @property string $pickupDayOfWeekNum
     */
    private $pickupDayOfWeekNum = null;

    /**
     * @property string $destinationDayOfWeekNum
     */
    private $destinationDayOfWeekNum = null;

    /**
     * @property \Dhl\DCTResponsedatatypes\QtdShpExChrgType[] $qtdShpExChrg
     */
    private $qtdShpExChrg = array(
        
    );

    /**
     * @property \DateTime $pricingDate
     */
    private $pricingDate = null;

    /**
     * @property float $shippingCharge
     */
    private $shippingCharge = null;

    /**
     * @property float $totalTaxAmount
     */
    private $totalTaxAmount = null;

    /**
     * @property \Dhl\DCTResponsedatatypes\QtdSInAdCurType[] $qtdSInAdCur
     */
    private $qtdSInAdCur = array(
        
    );

    /**
     * @property \Dhl\DCTResponsedatatypes\WeightChargeTaxDetType[] $weightChargeTaxDet
     */
    private $weightChargeTaxDet = array(
        
    );

    /**
     * Gets as globalProductCode
     *
     * @return string
     */
    public function getGlobalProductCode()
    {
        return $this->globalProductCode;
    }

    /**
     * Sets a new globalProductCode
     *
     * @param string $globalProductCode
     * @return self
     */
    public function setGlobalProductCode($globalProductCode)
    {
        $this->globalProductCode = $globalProductCode;
        return $this;
    }

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
     * Gets as pickupDate
     *
     * @return \DateTime
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }

    /**
     * Sets a new pickupDate
     *
     * @param \DateTime $pickupDate
     * @return self
     */
    public function setPickupDate(\DateTime $pickupDate)
    {
        $this->pickupDate = $pickupDate;
        return $this;
    }

    /**
     * Gets as pickupCutoffTime
     *
     * @return \DateInterval
     */
    public function getPickupCutoffTime()
    {
        return $this->pickupCutoffTime;
    }

    /**
     * Sets a new pickupCutoffTime
     *
     * @param \DateInterval $pickupCutoffTime
     * @return self
     */
    public function setPickupCutoffTime(\DateInterval $pickupCutoffTime)
    {
        $this->pickupCutoffTime = $pickupCutoffTime;
        return $this;
    }

    /**
     * Gets as bookingTime
     *
     * @return \DateInterval
     */
    public function getBookingTime()
    {
        return $this->bookingTime;
    }

    /**
     * Sets a new bookingTime
     *
     * @param \DateInterval $bookingTime
     * @return self
     */
    public function setBookingTime(\DateInterval $bookingTime)
    {
        $this->bookingTime = $bookingTime;
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
     * Gets as exchangeRate
     *
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * @param float $exchangeRate
     * @return self
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Gets as weightCharge
     *
     * @return float
     */
    public function getWeightCharge()
    {
        return $this->weightCharge;
    }

    /**
     * Sets a new weightCharge
     *
     * @param float $weightCharge
     * @return self
     */
    public function setWeightCharge($weightCharge)
    {
        $this->weightCharge = $weightCharge;
        return $this;
    }

    /**
     * Gets as weightChargeTax
     *
     * @return float
     */
    public function getWeightChargeTax()
    {
        return $this->weightChargeTax;
    }

    /**
     * Sets a new weightChargeTax
     *
     * @param float $weightChargeTax
     * @return self
     */
    public function setWeightChargeTax($weightChargeTax)
    {
        $this->weightChargeTax = $weightChargeTax;
        return $this;
    }

    /**
     * Gets as weightChargeTaxRate
     *
     * @return float
     */
    public function getWeightChargeTaxRate()
    {
        return $this->weightChargeTaxRate;
    }

    /**
     * Sets a new weightChargeTaxRate
     *
     * @param float $weightChargeTaxRate
     * @return self
     */
    public function setWeightChargeTaxRate($weightChargeTaxRate)
    {
        $this->weightChargeTaxRate = $weightChargeTaxRate;
        return $this;
    }

    /**
     * Gets as totalTransitDays
     *
     * @return integer
     */
    public function getTotalTransitDays()
    {
        return $this->totalTransitDays;
    }

    /**
     * Sets a new totalTransitDays
     *
     * @param integer $totalTransitDays
     * @return self
     */
    public function setTotalTransitDays($totalTransitDays)
    {
        $this->totalTransitDays = $totalTransitDays;
        return $this;
    }

    /**
     * Gets as pickupPostalLocAddDays
     *
     * @return integer
     */
    public function getPickupPostalLocAddDays()
    {
        return $this->pickupPostalLocAddDays;
    }

    /**
     * Sets a new pickupPostalLocAddDays
     *
     * @param integer $pickupPostalLocAddDays
     * @return self
     */
    public function setPickupPostalLocAddDays($pickupPostalLocAddDays)
    {
        $this->pickupPostalLocAddDays = $pickupPostalLocAddDays;
        return $this;
    }

    /**
     * Gets as deliveryPostalLocAddDays
     *
     * @return integer
     */
    public function getDeliveryPostalLocAddDays()
    {
        return $this->deliveryPostalLocAddDays;
    }

    /**
     * Sets a new deliveryPostalLocAddDays
     *
     * @param integer $deliveryPostalLocAddDays
     * @return self
     */
    public function setDeliveryPostalLocAddDays($deliveryPostalLocAddDays)
    {
        $this->deliveryPostalLocAddDays = $deliveryPostalLocAddDays;
        return $this;
    }

    /**
     * Gets as pickupNonDHLCourierCode
     *
     * @return string
     */
    public function getPickupNonDHLCourierCode()
    {
        return $this->pickupNonDHLCourierCode;
    }

    /**
     * Sets a new pickupNonDHLCourierCode
     *
     * @param string $pickupNonDHLCourierCode
     * @return self
     */
    public function setPickupNonDHLCourierCode($pickupNonDHLCourierCode)
    {
        $this->pickupNonDHLCourierCode = $pickupNonDHLCourierCode;
        return $this;
    }

    /**
     * Gets as deliveryNonDHLCourierCode
     *
     * @return string
     */
    public function getDeliveryNonDHLCourierCode()
    {
        return $this->deliveryNonDHLCourierCode;
    }

    /**
     * Sets a new deliveryNonDHLCourierCode
     *
     * @param string $deliveryNonDHLCourierCode
     * @return self
     */
    public function setDeliveryNonDHLCourierCode($deliveryNonDHLCourierCode)
    {
        $this->deliveryNonDHLCourierCode = $deliveryNonDHLCourierCode;
        return $this;
    }

    /**
     * Gets as deliveryCheckpointReturn
     *
     * @return \DateInterval
     */
    public function getDeliveryCheckpointReturn()
    {
        return $this->deliveryCheckpointReturn;
    }

    /**
     * Sets a new deliveryCheckpointReturn
     *
     * @param \DateInterval $deliveryCheckpointReturn
     * @return self
     */
    public function setDeliveryCheckpointReturn(\DateInterval $deliveryCheckpointReturn)
    {
        $this->deliveryCheckpointReturn = $deliveryCheckpointReturn;
        return $this;
    }

    /**
     * Gets as deliveryDate
     *
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Sets a new deliveryDate
     *
     * @param \DateTime $deliveryDate
     * @return self
     */
    public function setDeliveryDate(\DateTime $deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    /**
     * Gets as deliveryTime
     *
     * @return \DateInterval
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * Sets a new deliveryTime
     *
     * @param \DateInterval $deliveryTime
     * @return self
     */
    public function setDeliveryTime(\DateInterval $deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    /**
     * Gets as deliveryTimeGMTOffset
     *
     * @return string
     */
    public function getDeliveryTimeGMTOffset()
    {
        return $this->deliveryTimeGMTOffset;
    }

    /**
     * Sets a new deliveryTimeGMTOffset
     *
     * @param string $deliveryTimeGMTOffset
     * @return self
     */
    public function setDeliveryTimeGMTOffset($deliveryTimeGMTOffset)
    {
        $this->deliveryTimeGMTOffset = $deliveryTimeGMTOffset;
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
     * Gets as pickupDayOfWeekNum
     *
     * @return string
     */
    public function getPickupDayOfWeekNum()
    {
        return $this->pickupDayOfWeekNum;
    }

    /**
     * Sets a new pickupDayOfWeekNum
     *
     * @param string $pickupDayOfWeekNum
     * @return self
     */
    public function setPickupDayOfWeekNum($pickupDayOfWeekNum)
    {
        $this->pickupDayOfWeekNum = $pickupDayOfWeekNum;
        return $this;
    }

    /**
     * Gets as destinationDayOfWeekNum
     *
     * @return string
     */
    public function getDestinationDayOfWeekNum()
    {
        return $this->destinationDayOfWeekNum;
    }

    /**
     * Sets a new destinationDayOfWeekNum
     *
     * @param string $destinationDayOfWeekNum
     * @return self
     */
    public function setDestinationDayOfWeekNum($destinationDayOfWeekNum)
    {
        $this->destinationDayOfWeekNum = $destinationDayOfWeekNum;
        return $this;
    }

    /**
     * Adds as qtdShpExChrg
     *
     * @return self
     * @param \Dhl\DCTResponsedatatypes\QtdShpExChrgType $qtdShpExChrg
     */
    public function addToQtdShpExChrg(\Dhl\DCTResponsedatatypes\QtdShpExChrgType $qtdShpExChrg)
    {
        $this->qtdShpExChrg[] = $qtdShpExChrg;
        return $this;
    }

    /**
     * isset qtdShpExChrg
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQtdShpExChrg($index)
    {
        return isset($this->qtdShpExChrg[$index]);
    }

    /**
     * unset qtdShpExChrg
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQtdShpExChrg($index)
    {
        unset($this->qtdShpExChrg[$index]);
    }

    /**
     * Gets as qtdShpExChrg
     *
     * @return \Dhl\DCTResponsedatatypes\QtdShpExChrgType[]
     */
    public function getQtdShpExChrg()
    {
        return $this->qtdShpExChrg;
    }

    /**
     * Sets a new qtdShpExChrg
     *
     * @param \Dhl\DCTResponsedatatypes\QtdShpExChrgType[] $qtdShpExChrg
     * @return self
     */
    public function setQtdShpExChrg(array $qtdShpExChrg)
    {
        $this->qtdShpExChrg = $qtdShpExChrg;
        return $this;
    }

    /**
     * Gets as pricingDate
     *
     * @return \DateTime
     */
    public function getPricingDate()
    {
        return $this->pricingDate;
    }

    /**
     * Sets a new pricingDate
     *
     * @param \DateTime $pricingDate
     * @return self
     */
    public function setPricingDate(\DateTime $pricingDate)
    {
        $this->pricingDate = $pricingDate;
        return $this;
    }

    /**
     * Gets as shippingCharge
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
     * @param float $shippingCharge
     * @return self
     */
    public function setShippingCharge($shippingCharge)
    {
        $this->shippingCharge = $shippingCharge;
        return $this;
    }

    /**
     * Gets as totalTaxAmount
     *
     * @return float
     */
    public function getTotalTaxAmount()
    {
        return $this->totalTaxAmount;
    }

    /**
     * Sets a new totalTaxAmount
     *
     * @param float $totalTaxAmount
     * @return self
     */
    public function setTotalTaxAmount($totalTaxAmount)
    {
        $this->totalTaxAmount = $totalTaxAmount;
        return $this;
    }

    /**
     * Adds as qtdSInAdCur
     *
     * @return self
     * @param \Dhl\DCTResponsedatatypes\QtdSInAdCurType $qtdSInAdCur
     */
    public function addToQtdSInAdCur(\Dhl\DCTResponsedatatypes\QtdSInAdCurType $qtdSInAdCur)
    {
        $this->qtdSInAdCur[] = $qtdSInAdCur;
        return $this;
    }

    /**
     * isset qtdSInAdCur
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQtdSInAdCur($index)
    {
        return isset($this->qtdSInAdCur[$index]);
    }

    /**
     * unset qtdSInAdCur
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQtdSInAdCur($index)
    {
        unset($this->qtdSInAdCur[$index]);
    }

    /**
     * Gets as qtdSInAdCur
     *
     * @return \Dhl\DCTResponsedatatypes\QtdSInAdCurType[]
     */
    public function getQtdSInAdCur()
    {
        return $this->qtdSInAdCur;
    }

    /**
     * Sets a new qtdSInAdCur
     *
     * @param \Dhl\DCTResponsedatatypes\QtdSInAdCurType[] $qtdSInAdCur
     * @return self
     */
    public function setQtdSInAdCur(array $qtdSInAdCur)
    {
        $this->qtdSInAdCur = $qtdSInAdCur;
        return $this;
    }

    /**
     * Adds as weightChargeTaxDet
     *
     * @return self
     * @param \Dhl\DCTResponsedatatypes\WeightChargeTaxDetType $weightChargeTaxDet
     */
    public function addToWeightChargeTaxDet(\Dhl\DCTResponsedatatypes\WeightChargeTaxDetType $weightChargeTaxDet)
    {
        $this->weightChargeTaxDet[] = $weightChargeTaxDet;
        return $this;
    }

    /**
     * isset weightChargeTaxDet
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWeightChargeTaxDet($index)
    {
        return isset($this->weightChargeTaxDet[$index]);
    }

    /**
     * unset weightChargeTaxDet
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWeightChargeTaxDet($index)
    {
        unset($this->weightChargeTaxDet[$index]);
    }

    /**
     * Gets as weightChargeTaxDet
     *
     * @return \Dhl\DCTResponsedatatypes\WeightChargeTaxDetType[]
     */
    public function getWeightChargeTaxDet()
    {
        return $this->weightChargeTaxDet;
    }

    /**
     * Sets a new weightChargeTaxDet
     *
     * @param \Dhl\DCTResponsedatatypes\WeightChargeTaxDetType[] $weightChargeTaxDet
     * @return self
     */
    public function setWeightChargeTaxDet(array $weightChargeTaxDet)
    {
        $this->weightChargeTaxDet = $weightChargeTaxDet;
        return $this;
    }


}

