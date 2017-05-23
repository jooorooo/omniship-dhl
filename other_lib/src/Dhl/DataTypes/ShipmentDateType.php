<?php

namespace Dhl\DataTypes;

/**
 * Class representing ShipmentDateType
 *
 * 
 * XSD Type: ShipmentDate
 */
class ShipmentDateType
{

    /**
     * @property \DateTime $shipmentDateFrom
     */
    private $shipmentDateFrom = null;

    /**
     * @property \DateTime $shipmentDateTo
     */
    private $shipmentDateTo = null;

    /**
     * Gets as shipmentDateFrom
     *
     * @return \DateTime
     */
    public function getShipmentDateFrom()
    {
        return $this->shipmentDateFrom;
    }

    /**
     * Sets a new shipmentDateFrom
     *
     * @param \DateTime $shipmentDateFrom
     * @return self
     */
    public function setShipmentDateFrom(\DateTime $shipmentDateFrom)
    {
        $this->shipmentDateFrom = $shipmentDateFrom;
        return $this;
    }

    /**
     * Gets as shipmentDateTo
     *
     * @return \DateTime
     */
    public function getShipmentDateTo()
    {
        return $this->shipmentDateTo;
    }

    /**
     * Sets a new shipmentDateTo
     *
     * @param \DateTime $shipmentDateTo
     * @return self
     */
    public function setShipmentDateTo(\DateTime $shipmentDateTo)
    {
        $this->shipmentDateTo = $shipmentDateTo;
        return $this;
    }


}

