<?php

namespace Dhl;

/**
 * Class representing ShipmentBookRatingRequest
 */
class ShipmentBookRatingRequest
{

    /**
     * @property \Dhl\DataTypes\RequestType $request
     */
    private $request = null;

    /**
     * @property \Dhl\RatingDataTypes\RatingShipperType $shipper
     */
    private $shipper = null;

    /**
     * @property \Dhl\RatingDataTypes\RatingConsigneeType $consignee
     */
    private $consignee = null;

    /**
     * @property \Dhl\RatingDataTypes\RatingShipmentDetailsType $shipmentDetails
     */
    private $shipmentDetails = null;

    /**
     * @property \Dhl\RatingDataTypes\RatingSpecialServiceType[] $specialService
     */
    private $specialService = array(
        
    );

    /**
     * Gets as request
     *
     * @return \Dhl\DataTypes\RequestType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \Dhl\DataTypes\RequestType $request
     * @return self
     */
    public function setRequest(\Dhl\DataTypes\RequestType $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as shipper
     *
     * @return \Dhl\RatingDataTypes\RatingShipperType
     */
    public function getShipper()
    {
        return $this->shipper;
    }

    /**
     * Sets a new shipper
     *
     * @param \Dhl\RatingDataTypes\RatingShipperType $shipper
     * @return self
     */
    public function setShipper(\Dhl\RatingDataTypes\RatingShipperType $shipper)
    {
        $this->shipper = $shipper;
        return $this;
    }

    /**
     * Gets as consignee
     *
     * @return \Dhl\RatingDataTypes\RatingConsigneeType
     */
    public function getConsignee()
    {
        return $this->consignee;
    }

    /**
     * Sets a new consignee
     *
     * @param \Dhl\RatingDataTypes\RatingConsigneeType $consignee
     * @return self
     */
    public function setConsignee(\Dhl\RatingDataTypes\RatingConsigneeType $consignee)
    {
        $this->consignee = $consignee;
        return $this;
    }

    /**
     * Gets as shipmentDetails
     *
     * @return \Dhl\RatingDataTypes\RatingShipmentDetailsType
     */
    public function getShipmentDetails()
    {
        return $this->shipmentDetails;
    }

    /**
     * Sets a new shipmentDetails
     *
     * @param \Dhl\RatingDataTypes\RatingShipmentDetailsType $shipmentDetails
     * @return self
     */
    public function setShipmentDetails(\Dhl\RatingDataTypes\RatingShipmentDetailsType $shipmentDetails)
    {
        $this->shipmentDetails = $shipmentDetails;
        return $this;
    }

    /**
     * Adds as specialService
     *
     * @return self
     * @param \Dhl\RatingDataTypes\RatingSpecialServiceType $specialService
     */
    public function addToSpecialService(\Dhl\RatingDataTypes\RatingSpecialServiceType $specialService)
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
     * @return \Dhl\RatingDataTypes\RatingSpecialServiceType[]
     */
    public function getSpecialService()
    {
        return $this->specialService;
    }

    /**
     * Sets a new specialService
     *
     * @param \Dhl\RatingDataTypes\RatingSpecialServiceType[] $specialService
     * @return self
     */
    public function setSpecialService(array $specialService)
    {
        $this->specialService = $specialService;
        return $this;
    }


}

