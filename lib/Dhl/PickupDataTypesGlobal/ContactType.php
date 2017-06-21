<?php

namespace Dhl\PickupDataTypesGlobal;
use Dhl\Traits\Request;

/**
 * Class representing ContactType
 *
 * 
 * XSD Type: contact
 */
class ContactType
{

    use Request;

    /**
     * Contact Person Name
     *
     * @property string $personName
     */
    private $personName = null;

    /**
     * Contact Phone Number
     *
     * @property string $phone
     */
    private $phone = null;

    /**
     * Contact Phone Extension
     *
     * @property string $phoneExtension
     */
    private $phoneExtension = null;

    /**
     * Gets as personName
     *
     * Contact Person Name
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
     * Contact Person Name
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
     * Gets as phone
     *
     * Contact Phone Number
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * Contact Phone Number
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Gets as phoneExtension
     *
     * Contact Phone Extension
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
     * Contact Phone Extension
     *
     * @param string $phoneExtension
     * @return self
     */
    public function setPhoneExtension($phoneExtension)
    {
        $this->phoneExtension = $phoneExtension;
        return $this;
    }


}

