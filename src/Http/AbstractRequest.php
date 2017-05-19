<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Dhl\Http;

use Omniship\Exceptions\InvalidResponseException;
use Omniship\Message\AbstractRequest AS BaseAbstractRequest;

abstract class AbstractRequest extends BaseAbstractRequest
{
    /**
     * Url to services
     * @var string
     */
    protected $testEndpoint = 'https://xmlpitest-ea.dhl.com/XMLShippingServlet?isUTF8Support=true';

    /**
     * Url to services
     * @var string
     */
    protected $liveEndpoint = 'https://xmlpi-ea.dhl.com/XMLShippingServlet?isUTF8Support=true';

    /**
     * @return mixed
     */
    public function getUsername() {
        return $this->getParameter('username');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setUsername($value) {
        return $this->setParameter('username', $value);
    }

    /**
     * @return mixed
     */
    public function getPassword() {
        return $this->getParameter('password');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPassword($value) {
        return $this->setParameter('password', $value);
    }

    /**
     * @return mixed
     */
    public function getShipperAccountNumber() {
        return $this->getParameter('shipper_account_number');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setShipperAccountNumber($value) {
        return $this->setParameter('shipper_account_number', $value);
    }

    /**
     * @return mixed
     */
    public function getBillingAccountNumber() {
        return $this->getParameter('billing_account_number');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setBillingAccountNumber($value) {
        return $this->setParameter('billing_account_number', $value);
    }

    /**
     * @return mixed
     */
    public function getDutyAccountNumber() {
        return $this->getParameter('duty_account_number');
    }

    public function sendData($data) {
        $httpRequest = $this->httpClient->post($this->getEndpoint(), [], $data->toXml());
        if($httpRequest->getStatusCode() != 200) {
            throw new InvalidResponseException(sprintf('Return response with status code: %s', $httpRequest->getStatusCode()), $httpRequest->getStatusCode());
        }
        return $this->createResponse($httpRequest->getBody());
    }

    /**
     * Get url associated to a specific service
     *
     * @return string URL for the service
     */
    public function getEndpoint()
    {
        return $this->getTestMode() ? $this->testEndpoint : $this->liveEndpoint;
    }

    abstract protected function createResponse($data);

}