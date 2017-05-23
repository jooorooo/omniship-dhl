<?php

namespace Dhl\DCTRequestdatatypes;

/**
 * Class representing QtdShpType
 *
 * 
 * XSD Type: QtdShpType
 */
class QtdShpType
{

    /**
     * @property string $globalProductCode
     */
    private $globalProductCode = null;

    /**
     * @property string $localProductCode
     */
    private $localProductCode = null;

    /**
     * @property \Dhl\DCTRequestdatatypes\QtdShpExChrgType[] $qtdShpExChrg
     */
    private $qtdShpExChrg = array(
        
    );

    /**
     * Gets as globalProductCode
     *
     * @return string
     */
    public function getGlobalProductCode()
    {
        return $this->globalProductCode;
    }

    /**
     * Sets a new globalProductCode
     *
     * @param string $globalProductCode
     * @return self
     */
    public function setGlobalProductCode($globalProductCode)
    {
        $this->globalProductCode = $globalProductCode;
        return $this;
    }

    /**
     * Gets as localProductCode
     *
     * @return string
     */
    public function getLocalProductCode()
    {
        return $this->localProductCode;
    }

    /**
     * Sets a new localProductCode
     *
     * @param string $localProductCode
     * @return self
     */
    public function setLocalProductCode($localProductCode)
    {
        $this->localProductCode = $localProductCode;
        return $this;
    }

    /**
     * Adds as qtdShpExChrg
     *
     * @return self
     * @param \Dhl\DCTRequestdatatypes\QtdShpExChrgType $qtdShpExChrg
     */
    public function addToQtdShpExChrg(\Dhl\DCTRequestdatatypes\QtdShpExChrgType $qtdShpExChrg)
    {
        $this->qtdShpExChrg[] = $qtdShpExChrg;
        return $this;
    }

    /**
     * isset qtdShpExChrg
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQtdShpExChrg($index)
    {
        return isset($this->qtdShpExChrg[$index]);
    }

    /**
     * unset qtdShpExChrg
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQtdShpExChrg($index)
    {
        unset($this->qtdShpExChrg[$index]);
    }

    /**
     * Gets as qtdShpExChrg
     *
     * @return \Dhl\DCTRequestdatatypes\QtdShpExChrgType[]
     */
    public function getQtdShpExChrg()
    {
        return $this->qtdShpExChrg;
    }

    /**
     * Sets a new qtdShpExChrg
     *
     * @param \Dhl\DCTRequestdatatypes\QtdShpExChrgType[] $qtdShpExChrg
     * @return self
     */
    public function setQtdShpExChrg(array $qtdShpExChrg)
    {
        $this->qtdShpExChrg = $qtdShpExChrg;
        return $this;
    }


}

