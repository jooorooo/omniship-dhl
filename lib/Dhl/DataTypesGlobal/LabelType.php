<?php

namespace Dhl\DataTypesGlobal;
use Dhl\Traits\Request;

/**
 * Class representing LabelType
 *
 * Label
 * XSD Type: Label
 */
class LabelType
{

    use Request;

    /**
     * @property string $hideAccount
     */
    private $hideAccount = null;

    /**
     * @property string $labelTemplate
     */
    private $labelTemplate = null;

    /**
     * @property string $receiptTemplate
     */
    private $receiptTemplate = null;

    /**
     * @property string $docDetach
     */
    private $docDetach = null;

    /**
     * @property string $logo
     */
    private $logo = null;

    /**
     * @property \Dhl\DataTypesGlobal\CustomerLogoType $customerLogo
     */
    private $customerLogo = null;

    /**
     * @property integer $resolution
     */
    private $resolution = null;

    /**
     * Gets as hideAccount
     *
     * @return string
     */
    public function getHideAccount()
    {
        return $this->hideAccount;
    }

    /**
     * Sets a new hideAccount
     *
     * @param string $hideAccount
     * @return self
     */
    public function setHideAccount($hideAccount)
    {
        $this->hideAccount = $hideAccount;
        return $this;
    }

    /**
     * Gets as labelTemplate
     *
     * @return string
     */
    public function getLabelTemplate()
    {
        return $this->labelTemplate;
    }

    /**
     * Sets a new labelTemplate
     *
     * @param string $labelTemplate / 8X4_A4_PDF,8X4_thermal,8X4_A4_TC_PDF,6X4_A4_PDF,6X4_thermal,8X4_CI_PDF,8X4_CI_thermal
     * @return self
     */
    public function setLabelTemplate($labelTemplate)
    {
        $this->labelTemplate = $labelTemplate;
        return $this;
    }

    /**
     * Gets as receiptTemplate
     *
     * @return string
     */
    public function getReceiptTemplate()
    {
        return $this->receiptTemplate;
    }

    /**
     * Sets a new receiptTemplate
     *
     * @param string $receiptTemplate
     * @return self
     */
    public function setReceiptTemplate($receiptTemplate)
    {
        $this->receiptTemplate = $receiptTemplate;
        return $this;
    }

    /**
     * Gets as docDetach
     *
     * @return string
     */
    public function getDocDetach()
    {
        return $this->docDetach;
    }

    /**
     * Sets a new docDetach
     *
     * @param string $docDetach
     * @return self
     */
    public function setDocDetach($docDetach)
    {
        $this->docDetach = $docDetach;
        return $this;
    }

    /**
     * Gets as logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Sets a new logo
     *
     * @param string $logo
     * @return self
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * Gets as customerLogo
     *
     * @return \Dhl\DataTypesGlobal\CustomerLogoType
     */
    public function getCustomerLogo()
    {
        return $this->customerLogo;
    }

    /**
     * Sets a new customerLogo
     *
     * @param \Dhl\DataTypesGlobal\CustomerLogoType $customerLogo
     * @return self
     */
    public function setCustomerLogo(\Dhl\DataTypesGlobal\CustomerLogoType $customerLogo)
    {
        $this->customerLogo = $customerLogo;
        return $this;
    }

    /**
     * Gets as resolution
     *
     * @return integer
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Sets a new resolution
     *
     * @param integer $resolution
     * @return self
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;
        return $this;
    }


}

