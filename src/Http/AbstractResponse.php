<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 15.5.2017 г.
 * Time: 18:31 ч.
 */

namespace Omniship\Dhl\Http;

use Omniship\Http\ResponseParser;
use Omniship\Message\AbstractResponse AS BaseAbstractResponse;

class AbstractResponse extends BaseAbstractResponse
{
    /**
     * @var \SimpleXMLElement
     */
    protected $xml;
    /**
     * @var string
     */
    protected $content;

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if(!empty($this->getXml()->GetQuoteResponse->Note->Condition)) {
            return trim(preg_replace('~([\s]{2,})~', ' ', str_replace(["\n\r", "\r\n", "\r", "\n"], ' ', (string)$this->getXml()->GetQuoteResponse->Note->Condition->ConditionData)));
        } elseif(!empty($this->getXml()->Response->Status->Condition)) {
            return trim(preg_replace('~([\s]{2,})~', ' ', str_replace(["\n\r", "\r\n", "\r", "\n"], ' ', (string)$this->getXml()->Response->Status->Condition->ConditionData)));
        } elseif(!empty($this->getXml()->AWBInfo->Status->Condition)) {
            return trim(preg_replace('~([\s]{2,})~', ' ', str_replace(["\n\r", "\r\n", "\r", "\n"], ' ', (string)$this->getXml()->AWBInfo->Status->Condition->ConditionData)));
        }
        return null;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if(!empty($this->getXml()->GetQuoteResponse->Note->Condition)) {
            return (string)$this->getXml()->GetQuoteResponse->Note->Condition->ConditionCode;
        } elseif(!empty($this->getXml()->Response->Status->Condition)) {
            return (string)$this->getXml()->Response->Status->Condition->ConditionCode;
        } elseif(!empty($this->getXml()->AWBInfo->Status->Condition)) {
            return (string)$this->getXml()->AWBInfo->Status->Condition->ConditionCode;
        }
        return null;
    }
    /**
     * {@inheritdoc}
     */
    public function getRequestFormatted()
    {
        if(!empty($request = $this->getRequest()) && !empty($data = $request->getData())) {
            return $data->toXml();
        }
        return null;
    }
    /**
     * {@inheritdoc}
     */
    public function getResponseFormatted()
    {
        if(is_null($this->content)) {
            $this->content = $this->data->getContents();
        }
        return $this->content;
    }

    /**
     * @return \stdClass
     */
    protected function getXml()
    {
        if(!is_null($this->xml)) {
            return $this->xml;
        }
        return $this->xml = ResponseParser::xml($this->content = $this->getResponseFormatted());
    }

}