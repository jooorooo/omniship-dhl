<?php

namespace Dhl\DataTypes;

/**
 * Class representing LabelImageType
 *
 * LabelImage
 * XSD Type: LabelImage
 */
class LabelImageType
{

    /**
     * @property string $outputFormat
     */
    private $outputFormat = null;

    /**
     * @property mixed $outputImage
     */
    private $outputImage = null;

    /**
     * @property string $outputImageNPC
     */
    private $outputImageNPC = null;

    /**
     * Gets as outputFormat
     *
     * @return string
     */
    public function getOutputFormat()
    {
        return $this->outputFormat;
    }

    /**
     * Sets a new outputFormat
     *
     * @param string $outputFormat
     * @return self
     */
    public function setOutputFormat($outputFormat)
    {
        $this->outputFormat = $outputFormat;
        return $this;
    }

    /**
     * Gets as outputImage
     *
     * @return mixed
     */
    public function getOutputImage()
    {
        return $this->outputImage;
    }

    /**
     * Sets a new outputImage
     *
     * @param mixed $outputImage
     * @return self
     */
    public function setOutputImage($outputImage)
    {
        $this->outputImage = $outputImage;
        return $this;
    }

    /**
     * Gets as outputImageNPC
     *
     * @return string
     */
    public function getOutputImageNPC()
    {
        return $this->outputImageNPC;
    }

    /**
     * Sets a new outputImageNPC
     *
     * @param string $outputImageNPC
     * @return self
     */
    public function setOutputImageNPC($outputImageNPC)
    {
        $this->outputImageNPC = $outputImageNPC;
        return $this;
    }


}

