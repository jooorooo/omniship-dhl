<?php

namespace Dhl;

/**
 * Class representing ShipmentValidateErrorResponse
 */
class ShipmentValidateErrorResponse
{

    /**
     * @property \Dhl\DataTypes\ErrorResponseType $response
     */
    private $response = null;

    /**
     * Gets as response
     *
     * @return \Dhl\DataTypes\ErrorResponseType
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * @param \Dhl\DataTypes\ErrorResponseType $response
     * @return self
     */
    public function setResponse(\Dhl\DataTypes\ErrorResponseType $response)
    {
        $this->response = $response;
        return $this;
    }


}

