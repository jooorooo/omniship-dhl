<?php

namespace Dhl\DCTResponse;

/**
 * Class representing GetCapabilityResponseAType
 */
class GetCapabilityResponseAType
{

    /**
     * @property \Dhl\DCTResponse\GetCapabilityResponseAType\ResponseAType $response
     */
    private $response = null;

    /**
     * @property \Dhl\DCTResponsedatatypes\BkgDetailsType[] $bkgDetails
     */
    private $bkgDetails = array(
        
    );

    /**
     * @property \Dhl\DCTResponsedatatypes\SrvType[] $srvs
     */
    private $srvs = null;

    /**
     * @property \Dhl\DCTResponsedatatypes\NoteType\ConditionAType[] $note
     */
    private $note = null;

    /**
     * Gets as response
     *
     * @return \Dhl\DCTResponse\GetCapabilityResponseAType\ResponseAType
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * @param \Dhl\DCTResponse\GetCapabilityResponseAType\ResponseAType $response
     * @return self
     */
    public function setResponse(\Dhl\DCTResponse\GetCapabilityResponseAType\ResponseAType $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Adds as bkgDetails
     *
     * @return self
     * @param \Dhl\DCTResponsedatatypes\BkgDetailsType $bkgDetails
     */
    public function addToBkgDetails(\Dhl\DCTResponsedatatypes\BkgDetailsType $bkgDetails)
    {
        $this->bkgDetails[] = $bkgDetails;
        return $this;
    }

    /**
     * isset bkgDetails
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBkgDetails($index)
    {
        return isset($this->bkgDetails[$index]);
    }

    /**
     * unset bkgDetails
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBkgDetails($index)
    {
        unset($this->bkgDetails[$index]);
    }

    /**
     * Gets as bkgDetails
     *
     * @return \Dhl\DCTResponsedatatypes\BkgDetailsType[]
     */
    public function getBkgDetails()
    {
        return $this->bkgDetails;
    }

    /**
     * Sets a new bkgDetails
     *
     * @param \Dhl\DCTResponsedatatypes\BkgDetailsType[] $bkgDetails
     * @return self
     */
    public function setBkgDetails(array $bkgDetails)
    {
        $this->bkgDetails = $bkgDetails;
        return $this;
    }

    /**
     * Adds as srv
     *
     * @return self
     * @param \Dhl\DCTResponsedatatypes\SrvType $srv
     */
    public function addToSrvs(\Dhl\DCTResponsedatatypes\SrvType $srv)
    {
        $this->srvs[] = $srv;
        return $this;
    }

    /**
     * isset srvs
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSrvs($index)
    {
        return isset($this->srvs[$index]);
    }

    /**
     * unset srvs
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSrvs($index)
    {
        unset($this->srvs[$index]);
    }

    /**
     * Gets as srvs
     *
     * @return \Dhl\DCTResponsedatatypes\SrvType[]
     */
    public function getSrvs()
    {
        return $this->srvs;
    }

    /**
     * Sets a new srvs
     *
     * @param \Dhl\DCTResponsedatatypes\SrvType[] $srvs
     * @return self
     */
    public function setSrvs(array $srvs)
    {
        $this->srvs = $srvs;
        return $this;
    }

    /**
     * Adds as condition
     *
     * @return self
     * @param \Dhl\DCTResponsedatatypes\NoteType\ConditionAType $condition
     */
    public function addToNote(\Dhl\DCTResponsedatatypes\NoteType\ConditionAType $condition)
    {
        $this->note[] = $condition;
        return $this;
    }

    /**
     * isset note
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * @return \Dhl\DCTResponsedatatypes\NoteType\ConditionAType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * @param \Dhl\DCTResponsedatatypes\NoteType\ConditionAType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }


}

