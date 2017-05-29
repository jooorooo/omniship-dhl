<?php

namespace Dhl;
use Dhl\Traits\Request;

/**
 * Class representing ShipmentRequest
 */
class ShipmentRequest
{
    
    use Request;

    /**
     * @property float $schemaVersion
     */
    private $schemaVersion = '1.0';

    /**
     * @property \Dhl\DataTypesGlobal\RequestType $request
     */
    private $request = null;

    /**
     * @property string $regionCode
     */
    private $regionCode = null;

    /**
     * @property string $requestedPickupTime
     */
    private $requestedPickupTime = null;

    /**
     * @property string $newShipper
     */
    private $newShipper = null;

    /**
     * @property string $languageCode
     */
    private $languageCode = null;

    /**
     * @property string $piecesEnabled
     */
    private $piecesEnabled = null;

    /**
     * @property string $latinResponseInd
     */
    private $latinResponseInd = null;

    /**
     * @property \Dhl\DataTypesGlobal\BillingType $billing
     */
    private $billing = null;

    /**
     * @property \Dhl\DataTypesGlobal\ConsigneeType $consignee
     */
    private $consignee = null;

    /**
     * @property \Dhl\DataTypesGlobal\CommodityType[] $commodity
     */
    private $commodity = array(
        
    );

    /**
     * @property \Dhl\DataTypesGlobal\DutiableType $dutiable
     */
    private $dutiable = null;

    /**
     * @property \Dhl\DataTypesGlobal\ExportDeclarationType $exportDeclaration
     */
    private $exportDeclaration = null;

    /**
     * @property \Dhl\DataTypesGlobal\ReferenceType[] $reference
     */
    private $reference = array(
        
    );

    /**
     * @property \Dhl\DataTypesGlobal\ShipmentDetailsType $shipmentDetails
     */
    private $shipmentDetails = null;

    /**
     * @property \Dhl\DataTypesGlobal\ShipperType $shipper
     */
    private $shipper = null;

    /**
     * @property \Dhl\DataTypesGlobal\SpecialServiceType[] $specialService
     */
    private $specialService = array(
        
    );

    /**
     * @property \Dhl\DataTypesGlobal\NotificationType $notification
     */
    private $notification = null;

    /**
     * @property \Dhl\DataTypesGlobal\PlaceType $place
     */
    private $place = null;

    /**
     * @property string $eProcShip
     */
    private $eProcShip = null;

    /**
     * @property string $airwaybill
     */
    private $airwaybill = null;

    /**
     * @property \Dhl\DataTypesGlobal\DocImageType[] $docImages
     */
    private $docImages = null;

    /**
     * @property string $labelImageFormat
     */
    private $labelImageFormat = null;

    /**
     * @property string $requestArchiveDoc
     */
    private $requestArchiveDoc = null;

    /**
     * @property integer $numberOfArchiveDoc
     */
    private $numberOfArchiveDoc = null;

    /**
     * @property \Dhl\DataTypesGlobal\LabelType $label
     */
    private $label = null;

    /**
     * Gets as schemaVersion
     *
     * @return float
     */
    public function getSchemaVersion()
    {
        return $this->schemaVersion;
    }

    /**
     * Sets a new schemaVersion
     *
     * @param float $schemaVersion
     * @return self
     */
    public function setSchemaVersion($schemaVersion)
    {
        $this->schemaVersion = $schemaVersion;
        return $this;
    }

    /**
     * Gets as request
     *
     * @return \Dhl\DataTypesGlobal\RequestType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \Dhl\DataTypesGlobal\RequestType $request
     * @return self
     */
    public function setRequest(\Dhl\DataTypesGlobal\RequestType $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as regionCode
     *
     * @return string
     */
    public function getRegionCode()
    {
        return $this->regionCode;
    }

    /**
     * Sets a new regionCode
     *
     * @param string $regionCode
     * @return self
     */
    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;
        return $this;
    }

    /**
     * Gets as requestedPickupTime
     *
     * @return string
     */
    public function getRequestedPickupTime()
    {
        return $this->requestedPickupTime;
    }

    /**
     * Sets a new requestedPickupTime
     *
     * @param string $requestedPickupTime
     * @return self
     */
    public function setRequestedPickupTime($requestedPickupTime)
    {
        $this->requestedPickupTime = $requestedPickupTime;
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
     * Gets as languageCode
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Sets a new languageCode
     *
     * @param string $languageCode
     * @return self
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
        return $this;
    }

    /**
     * Gets as piecesEnabled
     *
     * @return string
     */
    public function getPiecesEnabled()
    {
        return $this->piecesEnabled;
    }

    /**
     * Sets a new piecesEnabled
     *
     * @param string $piecesEnabled
     * @return self
     */
    public function setPiecesEnabled($piecesEnabled)
    {
        $this->piecesEnabled = $piecesEnabled;
        return $this;
    }

    /**
     * Gets as latinResponseInd
     *
     * @return string
     */
    public function getLatinResponseInd()
    {
        return $this->latinResponseInd;
    }

    /**
     * Sets a new latinResponseInd
     *
     * @param string $latinResponseInd
     * @return self
     */
    public function setLatinResponseInd($latinResponseInd)
    {
        $this->latinResponseInd = $latinResponseInd;
        return $this;
    }

    /**
     * Gets as billing
     *
     * @return \Dhl\DataTypesGlobal\BillingType
     */
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * Sets a new billing
     *
     * @param \Dhl\DataTypesGlobal\BillingType $billing
     * @return self
     */
    public function setBilling(\Dhl\DataTypesGlobal\BillingType $billing)
    {
        $this->billing = $billing;
        return $this;
    }

    /**
     * Gets as consignee
     *
     * @return \Dhl\DataTypesGlobal\ConsigneeType
     */
    public function getConsignee()
    {
        return $this->consignee;
    }

    /**
     * Sets a new consignee
     *
     * @param \Dhl\DataTypesGlobal\ConsigneeType $consignee
     * @return self
     */
    public function setConsignee(\Dhl\DataTypesGlobal\ConsigneeType $consignee)
    {
        $this->consignee = $consignee;
        return $this;
    }

    /**
     * Adds as commodity
     *
     * @return self
     * @param \Dhl\DataTypesGlobal\CommodityType $commodity
     */
    public function addToCommodity(\Dhl\DataTypesGlobal\CommodityType $commodity)
    {
        $this->commodity[] = $commodity;
        return $this;
    }

    /**
     * isset commodity
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCommodity($index)
    {
        return isset($this->commodity[$index]);
    }

    /**
     * unset commodity
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCommodity($index)
    {
        unset($this->commodity[$index]);
    }

    /**
     * Gets as commodity
     *
     * @return \Dhl\DataTypesGlobal\CommodityType[]
     */
    public function getCommodity()
    {
        return $this->commodity;
    }

    /**
     * Sets a new commodity
     *
     * @param \Dhl\DataTypesGlobal\CommodityType[] $commodity
     * @return self
     */
    public function setCommodity(array $commodity)
    {
        $this->commodity = $commodity;
        return $this;
    }

    /**
     * Gets as dutiable
     *
     * @return \Dhl\DataTypesGlobal\DutiableType
     */
    public function getDutiable()
    {
        return $this->dutiable;
    }

    /**
     * Sets a new dutiable
     *
     * @param \Dhl\DataTypesGlobal\DutiableType $dutiable
     * @return self
     */
    public function setDutiable(\Dhl\DataTypesGlobal\DutiableType $dutiable)
    {
        $this->dutiable = $dutiable;
        return $this;
    }

    /**
     * Gets as exportDeclaration
     *
     * @return \Dhl\DataTypesGlobal\ExportDeclarationType
     */
    public function getExportDeclaration()
    {
        return $this->exportDeclaration;
    }

    /**
     * Sets a new exportDeclaration
     *
     * @param \Dhl\DataTypesGlobal\ExportDeclarationType $exportDeclaration
     * @return self
     */
    public function setExportDeclaration(\Dhl\DataTypesGlobal\ExportDeclarationType $exportDeclaration)
    {
        $this->exportDeclaration = $exportDeclaration;
        return $this;
    }

    /**
     * Adds as reference
     *
     * @return self
     * @param \Dhl\DataTypesGlobal\ReferenceType $reference
     */
    public function addToReference(\Dhl\DataTypesGlobal\ReferenceType $reference)
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
     * @return \Dhl\DataTypesGlobal\ReferenceType[]
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param \Dhl\DataTypesGlobal\ReferenceType[] $reference
     * @return self
     */
    public function setReference(array $reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as shipmentDetails
     *
     * @return \Dhl\DataTypesGlobal\ShipmentDetailsType
     */
    public function getShipmentDetails()
    {
        return $this->shipmentDetails;
    }

    /**
     * Sets a new shipmentDetails
     *
     * @param \Dhl\DataTypesGlobal\ShipmentDetailsType $shipmentDetails
     * @return self
     */
    public function setShipmentDetails(\Dhl\DataTypesGlobal\ShipmentDetailsType $shipmentDetails)
    {
        $this->shipmentDetails = $shipmentDetails;
        return $this;
    }

    /**
     * Gets as shipper
     *
     * @return \Dhl\DataTypesGlobal\ShipperType
     */
    public function getShipper()
    {
        return $this->shipper;
    }

    /**
     * Sets a new shipper
     *
     * @param \Dhl\DataTypesGlobal\ShipperType $shipper
     * @return self
     */
    public function setShipper(\Dhl\DataTypesGlobal\ShipperType $shipper)
    {
        $this->shipper = $shipper;
        return $this;
    }

    /**
     * Adds as specialService
     *
     * @return self
     * @param \Dhl\DataTypesGlobal\SpecialServiceType $specialService
     */
    public function addToSpecialService(\Dhl\DataTypesGlobal\SpecialServiceType $specialService)
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
     * @return \Dhl\DataTypesGlobal\SpecialServiceType[]
     */
    public function getSpecialService()
    {
        return $this->specialService;
    }

    /**
     * Sets a new specialService
     *
     * @param \Dhl\DataTypesGlobal\SpecialServiceType[] $specialService
     * @return self
     */
    public function setSpecialService(array $specialService)
    {
        $this->specialService = $specialService;
        return $this;
    }

    /**
     * Gets as notification
     *
     * @return \Dhl\DataTypesGlobal\NotificationType
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * Sets a new notification
     *
     * @param \Dhl\DataTypesGlobal\NotificationType $notification
     * @return self
     */
    public function setNotification(\Dhl\DataTypesGlobal\NotificationType $notification)
    {
        $this->notification = $notification;
        return $this;
    }

    /**
     * Gets as place
     *
     * @return \Dhl\DataTypesGlobal\PlaceType
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Sets a new place
     *
     * @param \Dhl\DataTypesGlobal\PlaceType $place
     * @return self
     */
    public function setPlace(\Dhl\DataTypesGlobal\PlaceType $place)
    {
        $this->place = $place;
        return $this;
    }

    /**
     * Gets as eProcShip
     *
     * @return string
     */
    public function getEProcShip()
    {
        return $this->eProcShip;
    }

    /**
     * Sets a new eProcShip
     *
     * @param string $eProcShip
     * @return self
     */
    public function setEProcShip($eProcShip)
    {
        $this->eProcShip = $eProcShip;
        return $this;
    }

    /**
     * Gets as airwaybill
     *
     * @return string
     */
    public function getAirwaybill()
    {
        return $this->airwaybill;
    }

    /**
     * Sets a new airwaybill
     *
     * @param string $airwaybill
     * @return self
     */
    public function setAirwaybill($airwaybill)
    {
        $this->airwaybill = $airwaybill;
        return $this;
    }

    /**
     * Adds as docImage
     *
     * @return self
     * @param \Dhl\DataTypesGlobal\DocImageType $docImage
     */
    public function addToDocImages(\Dhl\DataTypesGlobal\DocImageType $docImage)
    {
        $this->docImages[] = $docImage;
        return $this;
    }

    /**
     * isset docImages
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDocImages($index)
    {
        return isset($this->docImages[$index]);
    }

    /**
     * unset docImages
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDocImages($index)
    {
        unset($this->docImages[$index]);
    }

    /**
     * Gets as docImages
     *
     * @return \Dhl\DataTypesGlobal\DocImageType[]
     */
    public function getDocImages()
    {
        return $this->docImages;
    }

    /**
     * Sets a new docImages
     *
     * @param \Dhl\DataTypesGlobal\DocImageType[] $docImages
     * @return self
     */
    public function setDocImages(array $docImages)
    {
        $this->docImages = $docImages;
        return $this;
    }

    /**
     * Gets as labelImageFormat
     *
     * @return string
     */
    public function getLabelImageFormat()
    {
        return $this->labelImageFormat;
    }

    /**
     * Sets a new labelImageFormat
     *
     * @param string $labelImageFormat
     * @return self
     */
    public function setLabelImageFormat($labelImageFormat)
    {
        $this->labelImageFormat = $labelImageFormat;
        return $this;
    }

    /**
     * Gets as requestArchiveDoc
     *
     * @return string
     */
    public function getRequestArchiveDoc()
    {
        return $this->requestArchiveDoc;
    }

    /**
     * Sets a new requestArchiveDoc
     *
     * @param string $requestArchiveDoc
     * @return self
     */
    public function setRequestArchiveDoc($requestArchiveDoc)
    {
        $this->requestArchiveDoc = $requestArchiveDoc;
        return $this;
    }

    /**
     * Gets as numberOfArchiveDoc
     *
     * @return integer
     */
    public function getNumberOfArchiveDoc()
    {
        return $this->numberOfArchiveDoc;
    }

    /**
     * Sets a new numberOfArchiveDoc
     *
     * @param integer $numberOfArchiveDoc
     * @return self
     */
    public function setNumberOfArchiveDoc($numberOfArchiveDoc)
    {
        $this->numberOfArchiveDoc = $numberOfArchiveDoc;
        return $this;
    }

    /**
     * Gets as label
     *
     * @return \Dhl\DataTypesGlobal\LabelType
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * @param \Dhl\DataTypesGlobal\LabelType $label
     * @return self
     */
    public function setLabel(\Dhl\DataTypesGlobal\LabelType $label)
    {
        $this->label = $label;
        return $this;
    }

}

