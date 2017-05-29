<?php

namespace Dhl\DataTypes;

/**
 * Class representing LabelType
 *
 * Label
 * XSD Type: Label
 */
class LabelType
{

    /**
     * @property string $labelTemplate
     */
    private $labelTemplate = null;

    /**
     * @property string $logo
     */
    private $logo = null;

    /**
     * @property \Dhl\DataTypes\CustomerLogoType $customerLogo
     */
    private $customerLogo = null;

    /**
     * @property integer $resolution
     */
    private $resolution = null;

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
     * @param string $labelTemplate
     * @return self
     */
    public function setLabelTemplate($labelTemplate)
    {
        $this->labelTemplate = $labelTemplate;
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
     * @return \Dhl\DataTypes\CustomerLogoType
     */
    public function getCustomerLogo()
    {
        return $this->customerLogo;
    }

    /**
     * Sets a new customerLogo
     *
     * @param \Dhl\DataTypes\CustomerLogoType $customerLogo
     * @return self
     */
    public function setCustomerLogo(\Dhl\DataTypes\CustomerLogoType $customerLogo)
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

