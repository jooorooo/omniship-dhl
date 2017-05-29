<?php

namespace Dhl\DCTResponsedatatypes;

/**
 * Class representing ProdNtwrkType
 *
 * 
 * XSD Type: ProdNtwrkType
 */
class ProdNtwrkType
{

    /**
     * @property string $networkTypeCode
     */
    private $networkTypeCode = null;

    /**
     * Gets as networkTypeCode
     *
     * @return string
     */
    public function getNetworkTypeCode()
    {
        return $this->networkTypeCode;
    }

    /**
     * Sets a new networkTypeCode
     *
     * @param string $networkTypeCode
     * @return self
     */
    public function setNetworkTypeCode($networkTypeCode)
    {
        $this->networkTypeCode = $networkTypeCode;
        return $this;
    }


}

