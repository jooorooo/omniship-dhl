<?php

namespace Dhl\DataTypesGlobal;

/**
 * Class representing DocImageType
 *
 * DocImage
 * XSD Type: DocImage
 */
class DocImageType
{

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property mixed $image
     */
    private $image = null;

    /**
     * @property string $imageFormat
     */
    private $imageFormat = null;

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as image
     *
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * @param mixed $image
     * @return self
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Gets as imageFormat
     *
     * @return string
     */
    public function getImageFormat()
    {
        return $this->imageFormat;
    }

    /**
     * Sets a new imageFormat
     *
     * @param string $imageFormat
     * @return self
     */
    public function setImageFormat($imageFormat)
    {
        $this->imageFormat = $imageFormat;
        return $this;
    }


}

