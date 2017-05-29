<?php

namespace Dhl\DataTypesGlobal\MultiLabelsType;

/**
 * Class representing MultiLabelAType
 */
class MultiLabelAType
{

    /**
     * @property string $docName
     */
    private $docName = null;

    /**
     * @property string $docFormat
     */
    private $docFormat = null;

    /**
     * @property mixed $docImage
     */
    private $docImage = null;

    /**
     * Gets as docName
     *
     * @return string
     */
    public function getDocName()
    {
        return $this->docName;
    }

    /**
     * Sets a new docName
     *
     * @param string $docName
     * @return self
     */
    public function setDocName($docName)
    {
        $this->docName = $docName;
        return $this;
    }

    /**
     * Gets as docFormat
     *
     * @return string
     */
    public function getDocFormat()
    {
        return $this->docFormat;
    }

    /**
     * Sets a new docFormat
     *
     * @param string $docFormat
     * @return self
     */
    public function setDocFormat($docFormat)
    {
        $this->docFormat = $docFormat;
        return $this;
    }

    /**
     * Gets as docImage
     *
     * @return mixed
     */
    public function getDocImage()
    {
        return $this->docImage;
    }

    /**
     * Sets a new docImage
     *
     * @param mixed $docImage
     * @return self
     */
    public function setDocImage($docImage)
    {
        $this->docImage = $docImage;
        return $this;
    }


}

