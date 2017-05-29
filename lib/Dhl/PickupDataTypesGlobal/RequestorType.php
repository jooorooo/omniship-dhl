<?php

namespace Dhl\PickupDataTypesGlobal;

/**
 * Class representing RequestorType
 *
 * 
 * XSD Type: Requestor
 */
class RequestorType
{

    /**
     * Valid values are D or C. D =DHL C = credit Card
     *
     * @property string $accountType
     */
    private $accountType = null;

    /**
     * DHL Account Number Required only if Account Type is DHL
     *
     * @property string $accountNumber
     */
    private $accountNumber = null;

    /**
     * Contact information for the requestor
     *
     * @property \Dhl\PickupDataTypesGlobal\RequestorContactType $requestorContact
     */
    private $requestorContact = null;

    /**
     * Required if Contact Name and Contact Phone No.is given
     *
     * @property string $companyName
     */
    private $companyName = null;

    /**
     * Gets as accountType
     *
     * Valid values are D or C. D =DHL C = credit Card
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Sets a new accountType
     *
     * Valid values are D or C. D =DHL C = credit Card
     *
     * @param string $accountType
     * @return self
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * Gets as accountNumber
     *
     * DHL Account Number Required only if Account Type is DHL
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets a new accountNumber
     *
     * DHL Account Number Required only if Account Type is DHL
     *
     * @param string $accountNumber
     * @return self
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Gets as requestorContact
     *
     * Contact information for the requestor
     *
     * @return \Dhl\PickupDataTypesGlobal\RequestorContactType
     */
    public function getRequestorContact()
    {
        return $this->requestorContact;
    }

    /**
     * Sets a new requestorContact
     *
     * Contact information for the requestor
     *
     * @param \Dhl\PickupDataTypesGlobal\RequestorContactType $requestorContact
     * @return self
     */
    public function setRequestorContact(\Dhl\PickupDataTypesGlobal\RequestorContactType $requestorContact)
    {
        $this->requestorContact = $requestorContact;
        return $this;
    }

    /**
     * Gets as companyName
     *
     * Required if Contact Name and Contact Phone No.is given
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * Required if Contact Name and Contact Phone No.is given
     *
     * @param string $companyName
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }


}

