<?php

namespace Dhl\DataTypesGlobal\ExportLineItemType;

/**
 * Class representing LicenseAType
 */
class LicenseAType
{

    /**
     * shipper export license
     *
     * @property string $licenseNumber
     */
    private $licenseNumber = null;

    /**
     * @property \DateTime $expiryDate
     */
    private $expiryDate = null;

    /**
     * Gets as licenseNumber
     *
     * shipper export license
     *
     * @return string
     */
    public function getLicenseNumber()
    {
        return $this->licenseNumber;
    }

    /**
     * Sets a new licenseNumber
     *
     * shipper export license
     *
     * @param string $licenseNumber
     * @return self
     */
    public function setLicenseNumber($licenseNumber)
    {
        $this->licenseNumber = $licenseNumber;
        return $this;
    }

    /**
     * Gets as expiryDate
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Sets a new expiryDate
     *
     * @param \DateTime $expiryDate
     * @return self
     */
    public function setExpiryDate(\DateTime $expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }


}

