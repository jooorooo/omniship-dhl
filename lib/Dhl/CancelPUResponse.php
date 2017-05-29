<?php

namespace Dhl;

/**
 * Class representing CancelPUResponse
 */
class CancelPUResponse
{

    /**
     * @property \Dhl\DataTypesGlobal\ResponseType $response
     */
    private $response = null;

    /**
     * @property string $regionCode
     */
    private $regionCode = null;

    /**
     * @property \Dhl\DataTypesGlobal\NoteType $note
     */
    private $note = null;

    /**
     * Confirmation number of the pickup
     *
     * @property integer $confirmationNumber
     */
    private $confirmationNumber = null;

    /**
     * Time to be ready by. This field is not returned
     *  for cancel pickup request
     *
     * @property string $readyByTime
     */
    private $readyByTime = null;

    /**
     * Second time to be ready. This field is not
     *  returned for cancel pickup request
     *
     * @property string $secondReadyByTime
     */
    private $secondReadyByTime = null;

    /**
     * Next possible pickup date. This field is not
     *  returned for cancel pickup request
     *
     * @property \DateTime $nextPickupDate
     */
    private $nextPickupDate = null;

    /**
     * This field is not returned for cancel pickup
     *  request
     *
     * @property float $pickupCharge
     */
    private $pickupCharge = null;

    /**
     * This field is not returned for cancel pickup
     *  request
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * Time for calling in order. This field is not
     *  returned for cancel pickup request
     *
     * @property string $callInTime
     */
    private $callInTime = null;

    /**
     * Second time for calling in order. This field is
     *  not returned for cancel pickup request
     *
     * @property string $secondCallInTime
     */
    private $secondCallInTime = null;

    /**
     * Three letter code identifying the service area
     *  of origin. This field is not returned for cancel pickup request
     *
     * @property string $originSvcArea
     */
    private $originSvcArea = null;

    /**
     * Two letter ISO country Code
     *
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * Gets as response
     *
     * @return \Dhl\DataTypesGlobal\ResponseType
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * @param \Dhl\DataTypesGlobal\ResponseType $response
     * @return self
     */
    public function setResponse(\Dhl\DataTypesGlobal\ResponseType $response)
    {
        $this->response = $response;
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
     * Gets as note
     *
     * @return \Dhl\DataTypesGlobal\NoteType
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * @param \Dhl\DataTypesGlobal\NoteType $note
     * @return self
     */
    public function setNote(\Dhl\DataTypesGlobal\NoteType $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as confirmationNumber
     *
     * Confirmation number of the pickup
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
     * Confirmation number of the pickup
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
     * Gets as readyByTime
     *
     * Time to be ready by. This field is not returned
     *  for cancel pickup request
     *
     * @return string
     */
    public function getReadyByTime()
    {
        return $this->readyByTime;
    }

    /**
     * Sets a new readyByTime
     *
     * Time to be ready by. This field is not returned
     *  for cancel pickup request
     *
     * @param string $readyByTime
     * @return self
     */
    public function setReadyByTime($readyByTime)
    {
        $this->readyByTime = $readyByTime;
        return $this;
    }

    /**
     * Gets as secondReadyByTime
     *
     * Second time to be ready. This field is not
     *  returned for cancel pickup request
     *
     * @return string
     */
    public function getSecondReadyByTime()
    {
        return $this->secondReadyByTime;
    }

    /**
     * Sets a new secondReadyByTime
     *
     * Second time to be ready. This field is not
     *  returned for cancel pickup request
     *
     * @param string $secondReadyByTime
     * @return self
     */
    public function setSecondReadyByTime($secondReadyByTime)
    {
        $this->secondReadyByTime = $secondReadyByTime;
        return $this;
    }

    /**
     * Gets as nextPickupDate
     *
     * Next possible pickup date. This field is not
     *  returned for cancel pickup request
     *
     * @return \DateTime
     */
    public function getNextPickupDate()
    {
        return $this->nextPickupDate;
    }

    /**
     * Sets a new nextPickupDate
     *
     * Next possible pickup date. This field is not
     *  returned for cancel pickup request
     *
     * @param \DateTime $nextPickupDate
     * @return self
     */
    public function setNextPickupDate(\DateTime $nextPickupDate)
    {
        $this->nextPickupDate = $nextPickupDate;
        return $this;
    }

    /**
     * Gets as pickupCharge
     *
     * This field is not returned for cancel pickup
     *  request
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
     * This field is not returned for cancel pickup
     *  request
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
     * Gets as currencyCode
     *
     * This field is not returned for cancel pickup
     *  request
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
     * This field is not returned for cancel pickup
     *  request
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
     * Gets as callInTime
     *
     * Time for calling in order. This field is not
     *  returned for cancel pickup request
     *
     * @return string
     */
    public function getCallInTime()
    {
        return $this->callInTime;
    }

    /**
     * Sets a new callInTime
     *
     * Time for calling in order. This field is not
     *  returned for cancel pickup request
     *
     * @param string $callInTime
     * @return self
     */
    public function setCallInTime($callInTime)
    {
        $this->callInTime = $callInTime;
        return $this;
    }

    /**
     * Gets as secondCallInTime
     *
     * Second time for calling in order. This field is
     *  not returned for cancel pickup request
     *
     * @return string
     */
    public function getSecondCallInTime()
    {
        return $this->secondCallInTime;
    }

    /**
     * Sets a new secondCallInTime
     *
     * Second time for calling in order. This field is
     *  not returned for cancel pickup request
     *
     * @param string $secondCallInTime
     * @return self
     */
    public function setSecondCallInTime($secondCallInTime)
    {
        $this->secondCallInTime = $secondCallInTime;
        return $this;
    }

    /**
     * Gets as originSvcArea
     *
     * Three letter code identifying the service area
     *  of origin. This field is not returned for cancel pickup request
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
     * Three letter code identifying the service area
     *  of origin. This field is not returned for cancel pickup request
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


}

