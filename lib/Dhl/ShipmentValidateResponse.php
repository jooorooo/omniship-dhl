<?php

namespace Dhl;

/**
 * Class representing ShipmentValidateResponse
 */
class ShipmentValidateResponse
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
     * @property string $airwayBillNumber
     */
    private $airwayBillNumber = null;

    /**
     * @property string $billingCode
     */
    private $billingCode = null;

    /**
     * @property integer $chargeCardConfirmationNumber
     */
    private $chargeCardConfirmationNumber = null;

    /**
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @property string $courierMessage
     */
    private $courierMessage = null;

    /**
     * @property \Dhl\DataTypes\DestinationServiceAreaType $destinationServiceArea
     */
    private $destinationServiceArea = null;

    /**
     * @property \Dhl\DataTypes\OriginServiceAreaType $originServiceArea
     */
    private $originServiceArea = null;

    /**
     * @property string $dHLRoutingCode
     */
    private $dHLRoutingCode = null;

    /**
     * @property string $dHLRoutingDataId
     */
    private $dHLRoutingDataId = null;

    /**
     * @property string $productContentCode
     */
    private $productContentCode = null;

    /**
     * @property string $productShortName
     */
    private $productShortName = null;

    /**
     * @property string[] $internalServiceCode
     */
    private $internalServiceCode = array(
        
    );

    /**
     * @property string $deliveryDateCode
     */
    private $deliveryDateCode = null;

    /**
     * @property string $deliveryTimeCode
     */
    private $deliveryTimeCode = null;

    /**
     * @property \Dhl\DataTypes\ShipValResponsePieceType[] $pieces
     */
    private $pieces = null;

    /**
     * @property float $packageCharge
     */
    private $packageCharge = null;

    /**
     * @property string $rated
     */
    private $rated = null;

    /**
     * @property float $shippingCharge
     */
    private $shippingCharge = null;

    /**
     * @property float $shippingChargeInUSD
     */
    private $shippingChargeInUSD = null;

    /**
     * @property float $insuredAmount
     */
    private $insuredAmount = null;

    /**
     * @property string $weightUnit
     */
    private $weightUnit = null;

    /**
     * @property float $chargeableWeight
     */
    private $chargeableWeight = null;

    /**
     * @property float $dimensionalWeight
     */
    private $dimensionalWeight = null;

    /**
     * @property \DateTime $readyByTime
     */
    private $readyByTime = null;

    /**
     * @property float $pickupCharge
     */
    private $pickupCharge = null;

    /**
     * @property \DateTime $callInTime
     */
    private $callInTime = null;

    /**
     * @property integer $daysAdvanceNotice
     */
    private $daysAdvanceNotice = null;

    /**
     * @property float $conversionRate
     */
    private $conversionRate = null;

    /**
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * @property \Dhl\ShipmentValidateResponse\BarcodesAType $barcodes
     */
    private $barcodes = null;

    /**
     * no of pieces contained in shipment
     *
     * @property integer $piece
     */
    private $piece = null;

    /**
     * @property string $contents
     */
    private $contents = null;

    /**
     * @property \Dhl\DataTypes\ReferenceType[] $reference
     */
    private $reference = array(
        
    );

    /**
     * @property \Dhl\DataTypes\ConsigneeType $consignee
     */
    private $consignee = null;

    /**
     * @property \Dhl\DataTypes\ShipperType $shipper
     */
    private $shipper = null;

    /**
     * @property integer $accountNumber
     */
    private $accountNumber = null;

    /**
     * @property string $customerID
     */
    private $customerID = null;

    /**
     * @property \DateTime $shipmentDate
     */
    private $shipmentDate = null;

    /**
     * @property string $globalProductCode
     */
    private $globalProductCode = null;

    /**
     * @property \Dhl\DataTypes\SpecialServiceType[] $specialService
     */
    private $specialService = array(
        
    );

    /**
     * @property \Dhl\DataTypes\BillingType $billing
     */
    private $billing = null;

    /**
     * @property \Dhl\DataTypes\DutiableType $dutiable
     */
    private $dutiable = null;

    /**
     * @property \Dhl\DataTypes\ExportDeclarationType $exportDeclaration
     */
    private $exportDeclaration = null;

    /**
     * @property string $newShipper
     */
    private $newShipper = null;

    /**
     * Estimated/Scheduled Delivery date: format mm/dd/yyyy eg 03/25/2003
     *
     * @property string $sDeliveryDt
     */
    private $sDeliveryDt = null;

    /**
     * Encoded Delivery Date Format: ddDA where DD is the day of month and DA is day of
     * the week. Eg 25TU = Thursday the 25th
     *
     * @property string $eDeliveryDt
     */
    private $eDeliveryDt = null;

    /**
     * LHP Origin Hub Code. eg: LOC. returned only for ground shipments
     *
     * @property string $lHPOrigCd
     */
    private $lHPOrigCd = null;

    /**
     * LHP Destination terminal code. eg: LOC. returned only for Ground Shipments
     *
     * @property string $lHPDestCd
     */
    private $lHPDestCd = null;

    /**
     * @property string $pLTStatus
     */
    private $pLTStatus = null;

    /**
     * @property \Dhl\DataTypes\QtdSInAdCurType[] $qtdSInAdCur
     */
    private $qtdSInAdCur = array(
        
    );

    /**
     * @property \Dhl\DataTypes\LabelImageType[] $labelImage
     */
    private $labelImage = array(
        
    );

    /**
     * @property string $custData
     */
    private $custData = null;

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
     * Gets as airwayBillNumber
     *
     * @return string
     */
    public function getAirwayBillNumber()
    {
        return $this->airwayBillNumber;
    }

    /**
     * Sets a new airwayBillNumber
     *
     * @param string $airwayBillNumber
     * @return self
     */
    public function setAirwayBillNumber($airwayBillNumber)
    {
        $this->airwayBillNumber = $airwayBillNumber;
        return $this;
    }

    /**
     * Gets as billingCode
     *
     * @return string
     */
    public function getBillingCode()
    {
        return $this->billingCode;
    }

    /**
     * Sets a new billingCode
     *
     * @param string $billingCode
     * @return self
     */
    public function setBillingCode($billingCode)
    {
        $this->billingCode = $billingCode;
        return $this;
    }

    /**
     * Gets as chargeCardConfirmationNumber
     *
     * @return integer
     */
    public function getChargeCardConfirmationNumber()
    {
        return $this->chargeCardConfirmationNumber;
    }

    /**
     * Sets a new chargeCardConfirmationNumber
     *
     * @param integer $chargeCardConfirmationNumber
     * @return self
     */
    public function setChargeCardConfirmationNumber($chargeCardConfirmationNumber)
    {
        $this->chargeCardConfirmationNumber = $chargeCardConfirmationNumber;
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
     * Gets as courierMessage
     *
     * @return string
     */
    public function getCourierMessage()
    {
        return $this->courierMessage;
    }

    /**
     * Sets a new courierMessage
     *
     * @param string $courierMessage
     * @return self
     */
    public function setCourierMessage($courierMessage)
    {
        $this->courierMessage = $courierMessage;
        return $this;
    }

    /**
     * Gets as destinationServiceArea
     *
     * @return \Dhl\DataTypes\DestinationServiceAreaType
     */
    public function getDestinationServiceArea()
    {
        return $this->destinationServiceArea;
    }

    /**
     * Sets a new destinationServiceArea
     *
     * @param \Dhl\DataTypes\DestinationServiceAreaType $destinationServiceArea
     * @return self
     */
    public function setDestinationServiceArea(\Dhl\DataTypes\DestinationServiceAreaType $destinationServiceArea)
    {
        $this->destinationServiceArea = $destinationServiceArea;
        return $this;
    }

    /**
     * Gets as originServiceArea
     *
     * @return \Dhl\DataTypes\OriginServiceAreaType
     */
    public function getOriginServiceArea()
    {
        return $this->originServiceArea;
    }

    /**
     * Sets a new originServiceArea
     *
     * @param \Dhl\DataTypes\OriginServiceAreaType $originServiceArea
     * @return self
     */
    public function setOriginServiceArea(\Dhl\DataTypes\OriginServiceAreaType $originServiceArea)
    {
        $this->originServiceArea = $originServiceArea;
        return $this;
    }

    /**
     * Gets as dHLRoutingCode
     *
     * @return string
     */
    public function getDHLRoutingCode()
    {
        return $this->dHLRoutingCode;
    }

    /**
     * Sets a new dHLRoutingCode
     *
     * @param string $dHLRoutingCode
     * @return self
     */
    public function setDHLRoutingCode($dHLRoutingCode)
    {
        $this->dHLRoutingCode = $dHLRoutingCode;
        return $this;
    }

    /**
     * Gets as dHLRoutingDataId
     *
     * @return string
     */
    public function getDHLRoutingDataId()
    {
        return $this->dHLRoutingDataId;
    }

    /**
     * Sets a new dHLRoutingDataId
     *
     * @param string $dHLRoutingDataId
     * @return self
     */
    public function setDHLRoutingDataId($dHLRoutingDataId)
    {
        $this->dHLRoutingDataId = $dHLRoutingDataId;
        return $this;
    }

    /**
     * Gets as productContentCode
     *
     * @return string
     */
    public function getProductContentCode()
    {
        return $this->productContentCode;
    }

    /**
     * Sets a new productContentCode
     *
     * @param string $productContentCode
     * @return self
     */
    public function setProductContentCode($productContentCode)
    {
        $this->productContentCode = $productContentCode;
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
     * Adds as internalServiceCode
     *
     * @return self
     * @param string $internalServiceCode
     */
    public function addToInternalServiceCode($internalServiceCode)
    {
        $this->internalServiceCode[] = $internalServiceCode;
        return $this;
    }

    /**
     * isset internalServiceCode
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInternalServiceCode($index)
    {
        return isset($this->internalServiceCode[$index]);
    }

    /**
     * unset internalServiceCode
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInternalServiceCode($index)
    {
        unset($this->internalServiceCode[$index]);
    }

    /**
     * Gets as internalServiceCode
     *
     * @return string[]
     */
    public function getInternalServiceCode()
    {
        return $this->internalServiceCode;
    }

    /**
     * Sets a new internalServiceCode
     *
     * @param string $internalServiceCode
     * @return self
     */
    public function setInternalServiceCode(array $internalServiceCode)
    {
        $this->internalServiceCode = $internalServiceCode;
        return $this;
    }

    /**
     * Gets as deliveryDateCode
     *
     * @return string
     */
    public function getDeliveryDateCode()
    {
        return $this->deliveryDateCode;
    }

    /**
     * Sets a new deliveryDateCode
     *
     * @param string $deliveryDateCode
     * @return self
     */
    public function setDeliveryDateCode($deliveryDateCode)
    {
        $this->deliveryDateCode = $deliveryDateCode;
        return $this;
    }

    /**
     * Gets as deliveryTimeCode
     *
     * @return string
     */
    public function getDeliveryTimeCode()
    {
        return $this->deliveryTimeCode;
    }

    /**
     * Sets a new deliveryTimeCode
     *
     * @param string $deliveryTimeCode
     * @return self
     */
    public function setDeliveryTimeCode($deliveryTimeCode)
    {
        $this->deliveryTimeCode = $deliveryTimeCode;
        return $this;
    }

    /**
     * Adds as piece
     *
     * @return self
     * @param \Dhl\DataTypes\ShipValResponsePieceType $piece
     */
    public function addToPieces(\Dhl\DataTypes\ShipValResponsePieceType $piece)
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
     * @return \Dhl\DataTypes\ShipValResponsePieceType[]
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * Sets a new pieces
     *
     * @param \Dhl\DataTypes\ShipValResponsePieceType[] $pieces
     * @return self
     */
    public function setPieces(array $pieces)
    {
        $this->pieces = $pieces;
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
     * Gets as shippingChargeInUSD
     *
     * @return float
     */
    public function getShippingChargeInUSD()
    {
        return $this->shippingChargeInUSD;
    }

    /**
     * Sets a new shippingChargeInUSD
     *
     * @param float $shippingChargeInUSD
     * @return self
     */
    public function setShippingChargeInUSD($shippingChargeInUSD)
    {
        $this->shippingChargeInUSD = $shippingChargeInUSD;
        return $this;
    }

    /**
     * Gets as insuredAmount
     *
     * @return float
     */
    public function getInsuredAmount()
    {
        return $this->insuredAmount;
    }

    /**
     * Sets a new insuredAmount
     *
     * @param float $insuredAmount
     * @return self
     */
    public function setInsuredAmount($insuredAmount)
    {
        $this->insuredAmount = $insuredAmount;
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
     * Gets as readyByTime
     *
     * @return \DateTime
     */
    public function getReadyByTime()
    {
        return $this->readyByTime;
    }

    /**
     * Sets a new readyByTime
     *
     * @param \DateTime $readyByTime
     * @return self
     */
    public function setReadyByTime(\DateTime $readyByTime)
    {
        $this->readyByTime = $readyByTime;
        return $this;
    }

    /**
     * Gets as pickupCharge
     *
     * @return float
     */
    public function getPickupCharge()
    {
        return $this->pickupCharge;
    }

    /**
     * Sets a new pickupCharge
     *
     * @param float $pickupCharge
     * @return self
     */
    public function setPickupCharge($pickupCharge)
    {
        $this->pickupCharge = $pickupCharge;
        return $this;
    }

    /**
     * Gets as callInTime
     *
     * @return \DateTime
     */
    public function getCallInTime()
    {
        return $this->callInTime;
    }

    /**
     * Sets a new callInTime
     *
     * @param \DateTime $callInTime
     * @return self
     */
    public function setCallInTime(\DateTime $callInTime)
    {
        $this->callInTime = $callInTime;
        return $this;
    }

    /**
     * Gets as daysAdvanceNotice
     *
     * @return integer
     */
    public function getDaysAdvanceNotice()
    {
        return $this->daysAdvanceNotice;
    }

    /**
     * Sets a new daysAdvanceNotice
     *
     * @param integer $daysAdvanceNotice
     * @return self
     */
    public function setDaysAdvanceNotice($daysAdvanceNotice)
    {
        $this->daysAdvanceNotice = $daysAdvanceNotice;
        return $this;
    }

    /**
     * Gets as conversionRate
     *
     * @return float
     */
    public function getConversionRate()
    {
        return $this->conversionRate;
    }

    /**
     * Sets a new conversionRate
     *
     * @param float $conversionRate
     * @return self
     */
    public function setConversionRate($conversionRate)
    {
        $this->conversionRate = $conversionRate;
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
     * Gets as barcodes
     *
     * @return \Dhl\ShipmentValidateResponse\BarcodesAType
     */
    public function getBarcodes()
    {
        return $this->barcodes;
    }

    /**
     * Sets a new barcodes
     *
     * @param \Dhl\ShipmentValidateResponse\BarcodesAType $barcodes
     * @return self
     */
    public function setBarcodes(\Dhl\ShipmentValidateResponse\BarcodesAType $barcodes)
    {
        $this->barcodes = $barcodes;
        return $this;
    }

    /**
     * Gets as piece
     *
     * no of pieces contained in shipment
     *
     * @return integer
     */
    public function getPiece()
    {
        return $this->piece;
    }

    /**
     * Sets a new piece
     *
     * no of pieces contained in shipment
     *
     * @param integer $piece
     * @return self
     */
    public function setPiece($piece)
    {
        $this->piece = $piece;
        return $this;
    }

    /**
     * Gets as contents
     *
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Sets a new contents
     *
     * @param string $contents
     * @return self
     */
    public function setContents($contents)
    {
        $this->contents = $contents;
        return $this;
    }

    /**
     * Adds as reference
     *
     * @return self
     * @param \Dhl\DataTypes\ReferenceType $reference
     */
    public function addToReference(\Dhl\DataTypes\ReferenceType $reference)
    {
        $this->reference[] = $reference;
        return $this;
    }

    /**
     * isset reference
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReference($index)
    {
        return isset($this->reference[$index]);
    }

    /**
     * unset reference
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReference($index)
    {
        unset($this->reference[$index]);
    }

    /**
     * Gets as reference
     *
     * @return \Dhl\DataTypes\ReferenceType[]
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param \Dhl\DataTypes\ReferenceType[] $reference
     * @return self
     */
    public function setReference(array $reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as consignee
     *
     * @return \Dhl\DataTypes\ConsigneeType
     */
    public function getConsignee()
    {
        return $this->consignee;
    }

    /**
     * Sets a new consignee
     *
     * @param \Dhl\DataTypes\ConsigneeType $consignee
     * @return self
     */
    public function setConsignee(\Dhl\DataTypes\ConsigneeType $consignee)
    {
        $this->consignee = $consignee;
        return $this;
    }

    /**
     * Gets as shipper
     *
     * @return \Dhl\DataTypes\ShipperType
     */
    public function getShipper()
    {
        return $this->shipper;
    }

    /**
     * Sets a new shipper
     *
     * @param \Dhl\DataTypes\ShipperType $shipper
     * @return self
     */
    public function setShipper(\Dhl\DataTypes\ShipperType $shipper)
    {
        $this->shipper = $shipper;
        return $this;
    }

    /**
     * Gets as accountNumber
     *
     * @return integer
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets a new accountNumber
     *
     * @param integer $accountNumber
     * @return self
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Gets as customerID
     *
     * @return string
     */
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * Sets a new customerID
     *
     * @param string $customerID
     * @return self
     */
    public function setCustomerID($customerID)
    {
        $this->customerID = $customerID;
        return $this;
    }

    /**
     * Gets as shipmentDate
     *
     * @return \DateTime
     */
    public function getShipmentDate()
    {
        return $this->shipmentDate;
    }

    /**
     * Sets a new shipmentDate
     *
     * @param \DateTime $shipmentDate
     * @return self
     */
    public function setShipmentDate(\DateTime $shipmentDate)
    {
        $this->shipmentDate = $shipmentDate;
        return $this;
    }

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
     * Adds as specialService
     *
     * @return self
     * @param \Dhl\DataTypes\SpecialServiceType $specialService
     */
    public function addToSpecialService(\Dhl\DataTypes\SpecialServiceType $specialService)
    {
        $this->specialService[] = $specialService;
        return $this;
    }

    /**
     * isset specialService
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialService($index)
    {
        return isset($this->specialService[$index]);
    }

    /**
     * unset specialService
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialService($index)
    {
        unset($this->specialService[$index]);
    }

    /**
     * Gets as specialService
     *
     * @return \Dhl\DataTypes\SpecialServiceType[]
     */
    public function getSpecialService()
    {
        return $this->specialService;
    }

    /**
     * Sets a new specialService
     *
     * @param \Dhl\DataTypes\SpecialServiceType[] $specialService
     * @return self
     */
    public function setSpecialService(array $specialService)
    {
        $this->specialService = $specialService;
        return $this;
    }

    /**
     * Gets as billing
     *
     * @return \Dhl\DataTypes\BillingType
     */
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * Sets a new billing
     *
     * @param \Dhl\DataTypes\BillingType $billing
     * @return self
     */
    public function setBilling(\Dhl\DataTypes\BillingType $billing)
    {
        $this->billing = $billing;
        return $this;
    }

    /**
     * Gets as dutiable
     *
     * @return \Dhl\DataTypes\DutiableType
     */
    public function getDutiable()
    {
        return $this->dutiable;
    }

    /**
     * Sets a new dutiable
     *
     * @param \Dhl\DataTypes\DutiableType $dutiable
     * @return self
     */
    public function setDutiable(\Dhl\DataTypes\DutiableType $dutiable)
    {
        $this->dutiable = $dutiable;
        return $this;
    }

    /**
     * Gets as exportDeclaration
     *
     * @return \Dhl\DataTypes\ExportDeclarationType
     */
    public function getExportDeclaration()
    {
        return $this->exportDeclaration;
    }

    /**
     * Sets a new exportDeclaration
     *
     * @param \Dhl\DataTypes\ExportDeclarationType $exportDeclaration
     * @return self
     */
    public function setExportDeclaration(\Dhl\DataTypes\ExportDeclarationType $exportDeclaration)
    {
        $this->exportDeclaration = $exportDeclaration;
        return $this;
    }

    /**
     * Gets as newShipper
     *
     * @return string
     */
    public function getNewShipper()
    {
        return $this->newShipper;
    }

    /**
     * Sets a new newShipper
     *
     * @param string $newShipper
     * @return self
     */
    public function setNewShipper($newShipper)
    {
        $this->newShipper = $newShipper;
        return $this;
    }

    /**
     * Gets as sDeliveryDt
     *
     * Estimated/Scheduled Delivery date: format mm/dd/yyyy eg 03/25/2003
     *
     * @return string
     */
    public function getSDeliveryDt()
    {
        return $this->sDeliveryDt;
    }

    /**
     * Sets a new sDeliveryDt
     *
     * Estimated/Scheduled Delivery date: format mm/dd/yyyy eg 03/25/2003
     *
     * @param string $sDeliveryDt
     * @return self
     */
    public function setSDeliveryDt($sDeliveryDt)
    {
        $this->sDeliveryDt = $sDeliveryDt;
        return $this;
    }

    /**
     * Gets as eDeliveryDt
     *
     * Encoded Delivery Date Format: ddDA where DD is the day of month and DA is day of
     * the week. Eg 25TU = Thursday the 25th
     *
     * @return string
     */
    public function getEDeliveryDt()
    {
        return $this->eDeliveryDt;
    }

    /**
     * Sets a new eDeliveryDt
     *
     * Encoded Delivery Date Format: ddDA where DD is the day of month and DA is day of
     * the week. Eg 25TU = Thursday the 25th
     *
     * @param string $eDeliveryDt
     * @return self
     */
    public function setEDeliveryDt($eDeliveryDt)
    {
        $this->eDeliveryDt = $eDeliveryDt;
        return $this;
    }

    /**
     * Gets as lHPOrigCd
     *
     * LHP Origin Hub Code. eg: LOC. returned only for ground shipments
     *
     * @return string
     */
    public function getLHPOrigCd()
    {
        return $this->lHPOrigCd;
    }

    /**
     * Sets a new lHPOrigCd
     *
     * LHP Origin Hub Code. eg: LOC. returned only for ground shipments
     *
     * @param string $lHPOrigCd
     * @return self
     */
    public function setLHPOrigCd($lHPOrigCd)
    {
        $this->lHPOrigCd = $lHPOrigCd;
        return $this;
    }

    /**
     * Gets as lHPDestCd
     *
     * LHP Destination terminal code. eg: LOC. returned only for Ground Shipments
     *
     * @return string
     */
    public function getLHPDestCd()
    {
        return $this->lHPDestCd;
    }

    /**
     * Sets a new lHPDestCd
     *
     * LHP Destination terminal code. eg: LOC. returned only for Ground Shipments
     *
     * @param string $lHPDestCd
     * @return self
     */
    public function setLHPDestCd($lHPDestCd)
    {
        $this->lHPDestCd = $lHPDestCd;
        return $this;
    }

    /**
     * Gets as pLTStatus
     *
     * @return string
     */
    public function getPLTStatus()
    {
        return $this->pLTStatus;
    }

    /**
     * Sets a new pLTStatus
     *
     * @param string $pLTStatus
     * @return self
     */
    public function setPLTStatus($pLTStatus)
    {
        $this->pLTStatus = $pLTStatus;
        return $this;
    }

    /**
     * Adds as qtdSInAdCur
     *
     * @return self
     * @param \Dhl\DataTypes\QtdSInAdCurType $qtdSInAdCur
     */
    public function addToQtdSInAdCur(\Dhl\DataTypes\QtdSInAdCurType $qtdSInAdCur)
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
     * @return \Dhl\DataTypes\QtdSInAdCurType[]
     */
    public function getQtdSInAdCur()
    {
        return $this->qtdSInAdCur;
    }

    /**
     * Sets a new qtdSInAdCur
     *
     * @param \Dhl\DataTypes\QtdSInAdCurType[] $qtdSInAdCur
     * @return self
     */
    public function setQtdSInAdCur(array $qtdSInAdCur)
    {
        $this->qtdSInAdCur = $qtdSInAdCur;
        return $this;
    }

    /**
     * Adds as labelImage
     *
     * @return self
     * @param \Dhl\DataTypes\LabelImageType $labelImage
     */
    public function addToLabelImage(\Dhl\DataTypes\LabelImageType $labelImage)
    {
        $this->labelImage[] = $labelImage;
        return $this;
    }

    /**
     * isset labelImage
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLabelImage($index)
    {
        return isset($this->labelImage[$index]);
    }

    /**
     * unset labelImage
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLabelImage($index)
    {
        unset($this->labelImage[$index]);
    }

    /**
     * Gets as labelImage
     *
     * @return \Dhl\DataTypes\LabelImageType[]
     */
    public function getLabelImage()
    {
        return $this->labelImage;
    }

    /**
     * Sets a new labelImage
     *
     * @param \Dhl\DataTypes\LabelImageType[] $labelImage
     * @return self
     */
    public function setLabelImage(array $labelImage)
    {
        $this->labelImage = $labelImage;
        return $this;
    }

    /**
     * Gets as custData
     *
     * @return string
     */
    public function getCustData()
    {
        return $this->custData;
    }

    /**
     * Sets a new custData
     *
     * @param string $custData
     * @return self
     */
    public function setCustData($custData)
    {
        $this->custData = $custData;
        return $this;
    }


}

