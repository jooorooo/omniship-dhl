<?php

namespace Dhl\DCTResponsedatatypes;

/**
 * Class representing BkgDetailsType
 *
 * 
 * XSD Type: BkgDetailsType
 */
class BkgDetailsType
{

    /**
     * @property \Dhl\DCTResponsedatatypes\OrgnSvcAreaType $originServiceArea
     */
    private $originServiceArea = null;

    /**
     * @property \Dhl\DCTResponsedatatypes\DestSvcAreaType $destinationServiceArea
     */
    private $destinationServiceArea = null;

    /**
     * @property \Dhl\DCTResponsedatatypes\QtdShpType[] $qtdShp
     */
    private $qtdShp = array(
        
    );

    /**
     * @property string $calcNextDayInd
     */
    private $calcNextDayInd = null;

    /**
     * Gets as originServiceArea
     *
     * @return \Dhl\DCTResponsedatatypes\OrgnSvcAreaType
     */
    public function getOriginServiceArea()
    {
        return $this->originServiceArea;
    }

    /**
     * Sets a new originServiceArea
     *
     * @param \Dhl\DCTResponsedatatypes\OrgnSvcAreaType $originServiceArea
     * @return self
     */
    public function setOriginServiceArea(\Dhl\DCTResponsedatatypes\OrgnSvcAreaType $originServiceArea)
    {
        $this->originServiceArea = $originServiceArea;
        return $this;
    }

    /**
     * Gets as destinationServiceArea
     *
     * @return \Dhl\DCTResponsedatatypes\DestSvcAreaType
     */
    public function getDestinationServiceArea()
    {
        return $this->destinationServiceArea;
    }

    /**
     * Sets a new destinationServiceArea
     *
     * @param \Dhl\DCTResponsedatatypes\DestSvcAreaType $destinationServiceArea
     * @return self
     */
    public function setDestinationServiceArea(\Dhl\DCTResponsedatatypes\DestSvcAreaType $destinationServiceArea)
    {
        $this->destinationServiceArea = $destinationServiceArea;
        return $this;
    }

    /**
     * Adds as qtdShp
     *
     * @return self
     * @param \Dhl\DCTResponsedatatypes\QtdShpType $qtdShp
     */
    public function addToQtdShp(\Dhl\DCTResponsedatatypes\QtdShpType $qtdShp)
    {
        $this->qtdShp[] = $qtdShp;
        return $this;
    }

    /**
     * isset qtdShp
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQtdShp($index)
    {
        return isset($this->qtdShp[$index]);
    }

    /**
     * unset qtdShp
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQtdShp($index)
    {
        unset($this->qtdShp[$index]);
    }

    /**
     * Gets as qtdShp
     *
     * @return \Dhl\DCTResponsedatatypes\QtdShpType[]
     */
    public function getQtdShp()
    {
        return $this->qtdShp;
    }

    /**
     * Sets a new qtdShp
     *
     * @param \Dhl\DCTResponsedatatypes\QtdShpType[] $qtdShp
     * @return self
     */
    public function setQtdShp(array $qtdShp)
    {
        $this->qtdShp = $qtdShp;
        return $this;
    }

    /**
     * Gets as calcNextDayInd
     *
     * @return string
     */
    public function getCalcNextDayInd()
    {
        return $this->calcNextDayInd;
    }

    /**
     * Sets a new calcNextDayInd
     *
     * @param string $calcNextDayInd
     * @return self
     */
    public function setCalcNextDayInd($calcNextDayInd)
    {
        $this->calcNextDayInd = $calcNextDayInd;
        return $this;
    }


}

