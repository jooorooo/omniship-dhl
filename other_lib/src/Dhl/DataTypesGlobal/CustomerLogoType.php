<?php

namespace Dhl\DataTypesGlobal;

/**
 * Class representing CustomerLogoType
 *
 * CustomerLogo
 * XSD Type: CustomerLogo
 */
class CustomerLogoType
{

    /**
     * @property mixed $logoImage
     */
    private $logoImage = null;

    /**
     * @property string $logoImageFormat
     */
    private $logoImageFormat = null;

    /**
     * Gets as logoImage
     *
     * @return mixed
     */
    public function getLogoImage()
    {
        return $this->logoImage;
    }

    /**
     * Sets a new logoImage
     *
     * @param mixed $logoImage
     * @return self
     */
    public function setLogoImage($logoImage)
    {
        $this->logoImage = $logoImage;
        return $this;
    }

    /**
     * Gets as logoImageFormat
     *
     * @return string
     */
    public function getLogoImageFormat()
    {
        return $this->logoImageFormat;
    }

    /**
     * Sets a new logoImageFormat
     *
     * @param string $logoImageFormat
     * @return self
     */
    public function setLogoImageFormat($logoImageFormat)
    {
        $this->logoImageFormat = $logoImageFormat;
        return $this;
    }


}

