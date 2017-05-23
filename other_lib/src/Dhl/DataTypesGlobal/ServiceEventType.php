<?php

namespace Dhl\DataTypesGlobal;

/**
 * Class representing ServiceEventType
 *
 * Complex type to describe a service event. Eg
 *  Pickup, Delivery
 * XSD Type: ServiceEvent
 */
class ServiceEventType
{

    /**
     * Two letter Code denoting a specific service
     *  event
     *
     * @property string $eventCode
     */
    private $eventCode = null;

    /**
     * Description of the service event code
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Gets as eventCode
     *
     * Two letter Code denoting a specific service
     *  event
     *
     * @return string
     */
    public function getEventCode()
    {
        return $this->eventCode;
    }

    /**
     * Sets a new eventCode
     *
     * Two letter Code denoting a specific service
     *  event
     *
     * @param string $eventCode
     * @return self
     */
    public function setEventCode($eventCode)
    {
        $this->eventCode = $eventCode;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description of the service event code
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of the service event code
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

