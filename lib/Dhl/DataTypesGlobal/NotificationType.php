<?php

namespace Dhl\DataTypesGlobal;

/**
 * Class representing NotificationType
 *
 * 
 * XSD Type: Notification
 */
class NotificationType
{

    /**
     * @property string $emailAddress
     */
    private $emailAddress = null;

    /**
     * @property string $message
     */
    private $message = null;

    /**
     * Gets as emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Sets a new emailAddress
     *
     * @param string $emailAddress
     * @return self
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * Gets as message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }


}

