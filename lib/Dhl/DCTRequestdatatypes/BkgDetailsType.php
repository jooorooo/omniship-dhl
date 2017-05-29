<?php

namespace Dhl\DCTRequestdatatypes;
use Dhl\Traits\Request;

/**
 * Class representing BkgDetailsType
 *
 * 
 * XSD Type: BkgDetailsType
 */
class BkgDetailsType
{

    use Request;

    /**
     * @property string $paymentCountryCode
     */
    private $paymentCountryCode = null;

    /**
     * @property \DateTime $date
     */
    private $date = null;

    /**
     * @property \DateInterval $readyTime
     */
    private $readyTime = null;

    /**
     * @property string $readyTimeGMTOffset
     */
    private $readyTimeGMTOffset = null;

    /**
     * @property string $dimensionUnit
     */
    private $dimensionUnit = null;

    /**
     * @property string $weightUnit
     */
    private $weightUnit = null;

    /**
     * @property integer[] $numberOfPieces
     */
    private $numberOfPieces = array(
        
    );

    /**
     * @property float $shipmentWeight
     */
    private $shipmentWeight = null;

    /**
     * @property float $volume
     */
    private $volume = null;

    /**
     * @property float $maxPieceWeight
     */
    private $maxPieceWeight = null;

    /**
     * @property float $maxPieceHeight
     */
    private $maxPieceHeight = null;

    /**
     * @property float $maxPieceDepth
     */
    private $maxPieceDepth = null;

    /**
     * @property float $maxPieceWidth
     */
    private $maxPieceWidth = null;

    /**
     * @property \Dhl\DCTRequestdatatypes\PieceType[] $pieces
     */
    private $pieces = null;

    /**
     * @property string $paymentAccountNumber
     */
    private $paymentAccountNumber = null;

    /**
     * @property string $isDutiable
     */
    private $isDutiable = null;

    /**
     * @property string $networkTypeCode
     */
    private $networkTypeCode = null;

    /**
     * @property \Dhl\DCTRequestdatatypes\QtdShpType[] $qtdShp
     */
    private $qtdShp = array(
        
    );

    /**
     * @property float $cODAmount
     */
    private $cODAmount = null;

    /**
     * @property string $cODCurrencyCode
     */
    private $cODCurrencyCode = null;

    /**
     * @property string $cODAccountNumber
     */
    private $cODAccountNumber = null;

    /**
     * @property float $insuredValue
     */
    private $insuredValue = null;

    /**
     * @property string $insuredCurrency
     */
    private $insuredCurrency = null;

    /**
     * Gets as paymentCountryCode
     *
     * @return string
     */
    public function getPaymentCountryCode()
    {
        return $this->paymentCountryCode;
    }

    /**
     * Sets a new paymentCountryCode
     *
     * @param string $paymentCountryCode
     * @return self
     */
    public function setPaymentCountryCode($paymentCountryCode)
    {
        $this->paymentCountryCode = $paymentCountryCode;
        return $this;
    }

    /**
     * Gets as date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as readyTime
     *
     * @return \DateInterval
     */
    public function getReadyTime()
    {
        return $this->readyTime;
    }

    /**
     * Sets a new readyTime
     *
     * @param \DateInterval $readyTime
     * @return self
     */
    public function setReadyTime(\DateInterval $readyTime)
    {
        $this->readyTime = $readyTime;
        return $this;
    }

    /**
     * Gets as readyTimeGMTOffset
     *
     * @return string
     */
    public function getReadyTimeGMTOffset()
    {
        return $this->readyTimeGMTOffset;
    }

    /**
     * Sets a new readyTimeGMTOffset
     *
     * @param string $readyTimeGMTOffset
     * @return self
     */
    public function setReadyTimeGMTOffset($readyTimeGMTOffset)
    {
        $this->readyTimeGMTOffset = $readyTimeGMTOffset;
        return $this;
    }

    /**
     * Gets as dimensionUnit
     *
     * @return string
     */
    public function getDimensionUnit()
    {
        return $this->dimensionUnit;
    }

    /**
     * Sets a new dimensionUnit
     *
     * @param string $dimensionUnit
     * @return self
     */
    public function setDimensionUnit($dimensionUnit)
    {
        $this->dimensionUnit = $dimensionUnit;
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
     * Adds as numberOfPieces
     *
     * @return self
     * @param integer $numberOfPieces
     */
    public function addToNumberOfPieces($numberOfPieces)
    {
        $this->numberOfPieces[] = $numberOfPieces;
        return $this;
    }

    /**
     * isset numberOfPieces
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNumberOfPieces($index)
    {
        return isset($this->numberOfPieces[$index]);
    }

    /**
     * unset numberOfPieces
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNumberOfPieces($index)
    {
        unset($this->numberOfPieces[$index]);
    }

    /**
     * Gets as numberOfPieces
     *
     * @return integer[]
     */
    public function getNumberOfPieces()
    {
        return $this->numberOfPieces;
    }

    /**
     * Sets a new numberOfPieces
     *
     * @param integer $numberOfPieces
     * @return self
     */
    public function setNumberOfPieces(array $numberOfPieces)
    {
        $this->numberOfPieces = $numberOfPieces;
        return $this;
    }

    /**
     * Gets as shipmentWeight
     *
     * @return float
     */
    public function getShipmentWeight()
    {
        return $this->shipmentWeight;
    }

    /**
     * Sets a new shipmentWeight
     *
     * @param float $shipmentWeight
     * @return self
     */
    public function setShipmentWeight($shipmentWeight)
    {
        $this->shipmentWeight = $shipmentWeight;
        return $this;
    }

    /**
     * Gets as volume
     *
     * @return float
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Sets a new volume
     *
     * @param float $volume
     * @return self
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

    /**
     * Gets as maxPieceWeight
     *
     * @return float
     */
    public function getMaxPieceWeight()
    {
        return $this->maxPieceWeight;
    }

    /**
     * Sets a new maxPieceWeight
     *
     * @param float $maxPieceWeight
     * @return self
     */
    public function setMaxPieceWeight($maxPieceWeight)
    {
        $this->maxPieceWeight = $maxPieceWeight;
        return $this;
    }

    /**
     * Gets as maxPieceHeight
     *
     * @return float
     */
    public function getMaxPieceHeight()
    {
        return $this->maxPieceHeight;
    }

    /**
     * Sets a new maxPieceHeight
     *
     * @param float $maxPieceHeight
     * @return self
     */
    public function setMaxPieceHeight($maxPieceHeight)
    {
        $this->maxPieceHeight = $maxPieceHeight;
        return $this;
    }

    /**
     * Gets as maxPieceDepth
     *
     * @return float
     */
    public function getMaxPieceDepth()
    {
        return $this->maxPieceDepth;
    }

    /**
     * Sets a new maxPieceDepth
     *
     * @param float $maxPieceDepth
     * @return self
     */
    public function setMaxPieceDepth($maxPieceDepth)
    {
        $this->maxPieceDepth = $maxPieceDepth;
        return $this;
    }

    /**
     * Gets as maxPieceWidth
     *
     * @return float
     */
    public function getMaxPieceWidth()
    {
        return $this->maxPieceWidth;
    }

    /**
     * Sets a new maxPieceWidth
     *
     * @param float $maxPieceWidth
     * @return self
     */
    public function setMaxPieceWidth($maxPieceWidth)
    {
        $this->maxPieceWidth = $maxPieceWidth;
        return $this;
    }

    /**
     * Adds as piece
     *
     * @return self
     * @param \Dhl\DCTRequestdatatypes\PieceType $piece
     */
    public function addToPieces(\Dhl\DCTRequestdatatypes\PieceType $piece)
    {
        $this->pieces[] = $piece;
        return $this;
    }

    /**
     * isset pieces
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPieces($index)
    {
        return isset($this->pieces[$index]);
    }

    /**
     * unset pieces
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPieces($index)
    {
        unset($this->pieces[$index]);
    }

    /**
     * Gets as pieces
     *
     * @return \Dhl\DCTRequestdatatypes\PieceType[]
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * Sets a new pieces
     *
     * @param \Dhl\DCTRequestdatatypes\PieceType[] $pieces
     * @return self
     */
    public function setPieces(array $pieces)
    {
        $this->pieces = $pieces;
        return $this;
    }

    /**
     * Gets as paymentAccountNumber
     *
     * @return string
     */
    public function getPaymentAccountNumber()
    {
        return $this->paymentAccountNumber;
    }

    /**
     * Sets a new paymentAccountNumber
     *
     * @param string $paymentAccountNumber
     * @return self
     */
    public function setPaymentAccountNumber($paymentAccountNumber)
    {
        $this->paymentAccountNumber = $paymentAccountNumber;
        return $this;
    }

    /**
     * Gets as isDutiable
     *
     * @return string
     */
    public function getIsDutiable()
    {
        return $this->isDutiable;
    }

    /**
     * Sets a new isDutiable
     *
     * @param string $isDutiable
     * @return self
     */
    public function setIsDutiable($isDutiable)
    {
        $this->isDutiable = $isDutiable;
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
     * Adds as qtdShp
     *
     * @return self
     * @param \Dhl\DCTRequestdatatypes\QtdShpType $qtdShp
     */
    public function addToQtdShp(\Dhl\DCTRequestdatatypes\QtdShpType $qtdShp)
    {
        $this->qtdShp[] = $qtdShp;
        return $this;
    }

    /**
     * isset qtdShp
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQtdShp($index)
    {
        return isset($this->qtdShp[$index]);
    }

    /**
     * unset qtdShp
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQtdShp($index)
    {
        unset($this->qtdShp[$index]);
    }

    /**
     * Gets as qtdShp
     *
     * @return \Dhl\DCTRequestdatatypes\QtdShpType[]
     */
    public function getQtdShp()
    {
        return $this->qtdShp;
    }

    /**
     * Sets a new qtdShp
     *
     * @param \Dhl\DCTRequestdatatypes\QtdShpType[] $qtdShp
     * @return self
     */
    public function setQtdShp(array $qtdShp)
    {
        $this->qtdShp = $qtdShp;
        return $this;
    }

    /**
     * Gets as cODAmount
     *
     * @return float
     */
    public function getCODAmount()
    {
        return $this->cODAmount;
    }

    /**
     * Sets a new cODAmount
     *
     * @param float $cODAmount
     * @return self
     */
    public function setCODAmount($cODAmount)
    {
        $this->cODAmount = $cODAmount;
        return $this;
    }

    /**
     * Gets as cODCurrencyCode
     *
     * @return string
     */
    public function getCODCurrencyCode()
    {
        return $this->cODCurrencyCode;
    }

    /**
     * Sets a new cODCurrencyCode
     *
     * @param string $cODCurrencyCode
     * @return self
     */
    public function setCODCurrencyCode($cODCurrencyCode)
    {
        $this->cODCurrencyCode = $cODCurrencyCode;
        return $this;
    }

    /**
     * Gets as cODAccountNumber
     *
     * @return string
     */
    public function getCODAccountNumber()
    {
        return $this->cODAccountNumber;
    }

    /**
     * Sets a new cODAccountNumber
     *
     * @param string $cODAccountNumber
     * @return self
     */
    public function setCODAccountNumber($cODAccountNumber)
    {
        $this->cODAccountNumber = $cODAccountNumber;
        return $this;
    }

    /**
     * Gets as insuredValue
     *
     * @return float
     */
    public function getInsuredValue()
    {
        return $this->insuredValue;
    }

    /**
     * Sets a new insuredValue
     *
     * @param float $insuredValue
     * @return self
     */
    public function setInsuredValue($insuredValue)
    {
        $this->insuredValue = $insuredValue;
        return $this;
    }

    /**
     * Gets as insuredCurrency
     *
     * @return string
     */
    public function getInsuredCurrency()
    {
        return $this->insuredCurrency;
    }

    /**
     * Sets a new insuredCurrency
     *
     * @param string $insuredCurrency
     * @return self
     */
    public function setInsuredCurrency($insuredCurrency)
    {
        $this->insuredCurrency = $insuredCurrency;
        return $this;
    }


}

