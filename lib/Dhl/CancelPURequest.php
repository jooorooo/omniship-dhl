<?php

namespace Dhl;
use Dhl\Traits\Request;

/**
 * Class representing CancelPURequest
 */
class CancelPURequest
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
     * Confirmation number of the pickup that needs to be canceled
     *
     * @property integer $confirmationNumber
     */
    private $confirmationNumber = null;

    /**
     * Name of the requestor
     *
     * @property string $requestorName
     */
    private $requestorName = null;

    /**
     * Two letter ISO country Code
     *
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * Three letter code identifying the service area of origin. This field is not
     * returned for cancel pickup request
     *
     * @property string $originSvcArea
     */
    private $originSvcArea = null;

    /**
     * 001 PACKAGE_NOT_READY
     *  002 RATES_TOO_HIGH
     *  003 TRANSIT_TIME_TOO_SLOW
     *  004 TAKE_TO_SERVICE_CENTER_OR_DROP_BOX
     *  005 COMMITMENT_TIME_NOT_MET
     *  006 REASON_NOT_GIVEN
     *  007 OTHER
     *  008 PICKUP_MODIFIED
     *
     * @property string $reason
     */
    private $reason = null;

    /**
     * Date of pickup
     *
     * @property \DateTime $pickupDate
     */
    private $pickupDate = null;

    /**
     * cancel time of cancel pickup request
     *
     * @property string $cancelTime
     */
    private $cancelTime = null;

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
     * Gets as confirmationNumber
     *
     * Confirmation number of the pickup that needs to be canceled
     *
     * @return integer
     */
    public function getConfirmationNumber()
    {
        return $this->confirmationNumber;
    }

    /**
     * Sets a new confirmationNumber
     *
     * Confirmation number of the pickup that needs to be canceled
     *
     * @param integer $confirmationNumber
     * @return self
     */
    public function setConfirmationNumber($confirmationNumber)
    {
        $this->confirmationNumber = $confirmationNumber;
        return $this;
    }

    /**
     * Gets as requestorName
     *
     * Name of the requestor
     *
     * @return string
     */
    public function getRequestorName()
    {
        return $this->requestorName;
    }

    /**
     * Sets a new requestorName
     *
     * Name of the requestor
     *
     * @param string $requestorName
     * @return self
     */
    public function setRequestorName($requestorName)
    {
        $this->requestorName = $requestorName;
        return $this;
    }

    /**
     * Gets as countryCode
     *
     * Two letter ISO country Code
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
     * Two letter ISO country Code
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
     * Gets as originSvcArea
     *
     * Three letter code identifying the service area of origin. This field is not
     * returned for cancel pickup request
     *
     * @return string
     */
    public function getOriginSvcArea()
    {
        return $this->originSvcArea;
    }

    /**
     * Sets a new originSvcArea
     *
     * Three letter code identifying the service area of origin. This field is not
     * returned for cancel pickup request
     *
     * @param string $originSvcArea
     * @return self
     */
    public function setOriginSvcArea($originSvcArea)
    {
        $this->originSvcArea = $originSvcArea;
        return $this;
    }

    /**
     * Gets as reason
     *
     * 001 PACKAGE_NOT_READY
     *  002 RATES_TOO_HIGH
     *  003 TRANSIT_TIME_TOO_SLOW
     *  004 TAKE_TO_SERVICE_CENTER_OR_DROP_BOX
     *  005 COMMITMENT_TIME_NOT_MET
     *  006 REASON_NOT_GIVEN
     *  007 OTHER
     *  008 PICKUP_MODIFIED
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * 001 PACKAGE_NOT_READY
     *  002 RATES_TOO_HIGH
     *  003 TRANSIT_TIME_TOO_SLOW
     *  004 TAKE_TO_SERVICE_CENTER_OR_DROP_BOX
     *  005 COMMITMENT_TIME_NOT_MET
     *  006 REASON_NOT_GIVEN
     *  007 OTHER
     *  008 PICKUP_MODIFIED
     *
     * @param string $reason
     * @return self
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as pickupDate
     *
     * Date of pickup
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
     * Date of pickup
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
     * Gets as cancelTime
     *
     * cancel time of cancel pickup request
     *
     * @return string
     */
    public function getCancelTime()
    {
        return $this->cancelTime;
    }

    /**
     * Sets a new cancelTime
     *
     * cancel time of cancel pickup request
     *
     * @param string $cancelTime
     * @return self
     */
    public function setCancelTime($cancelTime)
    {
        $this->cancelTime = $cancelTime;
        return $this;
    }


}

