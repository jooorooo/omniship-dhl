<?php

namespace Dhl\DataTypes;

/**
 * Class representing ContactType
 *
 * 
 * XSD Type: Contact
 */
class ContactType
{

    /**
     * @property string $personName
     */
    private $personName = null;

    /**
     * @property string $phoneNumber
     */
    private $phoneNumber = null;

    /**
     * @property string $phoneExtension
     */
    private $phoneExtension = null;

    /**
     * @property string $faxNumber
     */
    private $faxNumber = null;

    /**
     * @property string $telex
     */
    private $telex = null;

    /**
     * @property \Dhl\DataTypes\EmailType $email
     */
    private $email = null;

    /**
     * @property integer $mobilePhoneNumber
     */
    private $mobilePhoneNumber = null;

    /**
     * Gets as personName
     *
     * @return string
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * @param string $personName
     * @return self
     */
    public function setPersonName($personName)
    {
        $this->personName = $personName;
        return $this;
    }

    /**
     * Gets as phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Sets a new phoneNumber
     *
     * @param string $phoneNumber
     * @return self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Gets as phoneExtension
     *
     * @return string
     */
    public function getPhoneExtension()
    {
        return $this->phoneExtension;
    }

    /**
     * Sets a new phoneExtension
     *
     * @param string $phoneExtension
     * @return self
     */
    public function setPhoneExtension($phoneExtension)
    {
        $this->phoneExtension = $phoneExtension;
        return $this;
    }

    /**
     * Gets as faxNumber
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * Sets a new faxNumber
     *
     * @param string $faxNumber
     * @return self
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    /**
     * Gets as telex
     *
     * @return string
     */
    public function getTelex()
    {
        return $this->telex;
    }

    /**
     * Sets a new telex
     *
     * @param string $telex
     * @return self
     */
    public function setTelex($telex)
    {
        $this->telex = $telex;
        return $this;
    }

    /**
     * Gets as email
     *
     * @return \Dhl\DataTypes\EmailType
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param \Dhl\DataTypes\EmailType $email
     * @return self
     */
    public function setEmail(\Dhl\DataTypes\EmailType $email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as mobilePhoneNumber
     *
     * @return integer
     */
    public function getMobilePhoneNumber()
    {
        return $this->mobilePhoneNumber;
    }

    /**
     * Sets a new mobilePhoneNumber
     *
     * @param integer $mobilePhoneNumber
     * @return self
     */
    public function setMobilePhoneNumber($mobilePhoneNumber)
    {
        $this->mobilePhoneNumber = $mobilePhoneNumber;
        return $this;
    }


}

