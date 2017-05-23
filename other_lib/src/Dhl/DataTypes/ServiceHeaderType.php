<?php

namespace Dhl\DataTypes;

/**
 * Class representing ServiceHeaderType
 *
 * Standard routing header
 * XSD Type: ServiceHeader
 */
class ServiceHeaderType
{

    /**
     * Time this message is sent
     *
     * @property \DateTime $messageTime
     */
    private $messageTime = null;

    /**
     * A string, peferably number, to uniquely identify individual messages. Minimum
     * length must be 28 and maximum length is 32
     *
     * @property string $messageReference
     */
    private $messageReference = null;

    /**
     * @property string $siteID
     */
    private $siteID = null;

    /**
     * @property string $password
     */
    private $password = null;

    /**
     * Gets as messageTime
     *
     * Time this message is sent
     *
     * @return \DateTime
     */
    public function getMessageTime()
    {
        return $this->messageTime;
    }

    /**
     * Sets a new messageTime
     *
     * Time this message is sent
     *
     * @param \DateTime $messageTime
     * @return self
     */
    public function setMessageTime(\DateTime $messageTime)
    {
        $this->messageTime = $messageTime;
        return $this;
    }

    /**
     * Gets as messageReference
     *
     * A string, peferably number, to uniquely identify individual messages. Minimum
     * length must be 28 and maximum length is 32
     *
     * @return string
     */
    public function getMessageReference()
    {
        return $this->messageReference;
    }

    /**
     * Sets a new messageReference
     *
     * A string, peferably number, to uniquely identify individual messages. Minimum
     * length must be 28 and maximum length is 32
     *
     * @param string $messageReference
     * @return self
     */
    public function setMessageReference($messageReference)
    {
        $this->messageReference = $messageReference;
        return $this;
    }

    /**
     * Gets as siteID
     *
     * @return string
     */
    public function getSiteID()
    {
        return $this->siteID;
    }

    /**
     * Sets a new siteID
     *
     * @param string $siteID
     * @return self
     */
    public function setSiteID($siteID)
    {
        $this->siteID = $siteID;
        return $this;
    }

    /**
     * Gets as password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }


}

