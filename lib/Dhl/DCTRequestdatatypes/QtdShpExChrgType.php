<?php

namespace Dhl\DCTRequestdatatypes;
use Dhl\Traits\Request;

/**
 * Class representing QtdShpExChrgType
 *
 * 
 * XSD Type: QtdShpExChrgType
 */
class QtdShpExChrgType
{

    use Request;

    /**
     * @property string $specialServiceType
     */
    private $specialServiceType = null;

    /**
     * @property string $localSpecialServiceType
     */
    private $localSpecialServiceType = null;

    /**
     * Gets as specialServiceType
     *
     * @return string
     */
    public function getSpecialServiceType()
    {
        return $this->specialServiceType;
    }

    /**
     * Sets a new specialServiceType
     *
     * @param string $specialServiceType
     * @return self
     */
    public function setSpecialServiceType($specialServiceType)
    {
        $this->specialServiceType = $specialServiceType;
        return $this;
    }

    /**
     * Gets as localSpecialServiceType
     *
     * @return string
     */
    public function getLocalSpecialServiceType()
    {
        return $this->localSpecialServiceType;
    }

    /**
     * Sets a new localSpecialServiceType
     *
     * @param string $localSpecialServiceType
     * @return self
     */
    public function setLocalSpecialServiceType($localSpecialServiceType)
    {
        $this->localSpecialServiceType = $localSpecialServiceType;
        return $this;
    }


}

