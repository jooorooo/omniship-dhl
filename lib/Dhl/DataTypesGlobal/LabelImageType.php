<?php

namespace Dhl\DataTypesGlobal;

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
     * @property \Dhl\DataTypesGlobal\MultiLabelsType\MultiLabelAType[] $multiLabels
     */
    private $multiLabels = null;

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
     * Adds as multiLabel
     *
     * @return self
     * @param \Dhl\DataTypesGlobal\MultiLabelsType\MultiLabelAType $multiLabel
     */
    public function addToMultiLabels(\Dhl\DataTypesGlobal\MultiLabelsType\MultiLabelAType $multiLabel)
    {
        $this->multiLabels[] = $multiLabel;
        return $this;
    }

    /**
     * isset multiLabels
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMultiLabels($index)
    {
        return isset($this->multiLabels[$index]);
    }

    /**
     * unset multiLabels
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMultiLabels($index)
    {
        unset($this->multiLabels[$index]);
    }

    /**
     * Gets as multiLabels
     *
     * @return \Dhl\DataTypesGlobal\MultiLabelsType\MultiLabelAType[]
     */
    public function getMultiLabels()
    {
        return $this->multiLabels;
    }

    /**
     * Sets a new multiLabels
     *
     * @param \Dhl\DataTypesGlobal\MultiLabelsType\MultiLabelAType[] $multiLabels
     * @return self
     */
    public function setMultiLabels(array $multiLabels)
    {
        $this->multiLabels = $multiLabels;
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

