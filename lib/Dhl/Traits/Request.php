<?php

namespace Dhl\Traits;

/**
 * Created by PhpStorm.
 * User: joro
 * Date: 15.5.2017 г.
 * Time: 12:11 ч.
 */
trait Request
{


    /**
     * Class constants
     */
    protected static $DHL_REQ = 'http://www.dhl.com';
    protected static $DHL_XSI = 'http://www.w3.org/2001/XMLSchema-instance';

    /**
     * Generates the XML to be sent to DHL
     *
     * @param \XMLWriter $xmlWriter XMl Writer instance
     *
     * @return string
     */
    public function toXML(\XMLWriter $xmlWriter = null)
    {

        $className = explode('\\', get_class($this));
        $className = end($className);

        $existing_xml = false;
        if($xmlWriter instanceof \XMLWriter) {
            $existing_xml = true;
        } else {
            $xmlWriter = new \XMLWriter();
            $xmlWriter->openMemory();
            $xmlWriter->setIndent(true);
            $xmlWriter->startDocument('1.0', 'UTF-8');

            $xmlWriter->startElement('req:' . $className);
            $xmlWriter->writeAttribute('xmlns:req', static::$DHL_REQ);
            $xmlWriter->writeAttribute('xmlns:xsi', static::$DHL_XSI);
            $xmlWriter->writeAttribute('xsi:schemaLocation', static::$DHL_REQ . ' ' . (!empty($this->serviceXSD) ? $this->serviceXSD : $className) . '.xsd');

            if(method_exists($this, 'getSchemaVersion') && !empty($schema_version = $this->getSchemaVersion())) {
                $xmlWriter->writeAttribute('schemaVersion', $schema_version);
            }
        }

        $methods = get_class_methods($this);
        foreach($methods AS $method) {
            if(preg_match('~^get(.*)$~', $method, $match) > 0 && $match[1] != 'SchemaVersion') {
                $value = $this->{$match[0]}();
                $name = $match[1];
                if($value) {
                    $this->_write($xmlWriter, $name, $value);
                }
            }
        }

        if(!$existing_xml) {
            $xmlWriter->endDocument();
        }

        return $xmlWriter->outputMemory(!$existing_xml);
    }

    protected function _write(\XMLWriter $xmlWriter, $name, $value, $parent = false) {
        if($value) {
            if (is_object($value))
            {
                if($value instanceof \DateTime) {
                    if($name == 'MessageTime') {
                        $xmlWriter->writeElement($name, $value->format('Y-m-d\TH:i:sP'));
                    } else {
                        $xmlWriter->writeElement($name, $value->format('Y-m-d'));
                    }
                } elseif($value instanceof \DateInterval) {
                    $xmlWriter->writeElement($name, $value->format('PT%HH%IM'));
                } else {
                    if($this->_checkObject($name, $value)) {
                        $xmlWriter->startElement(substr($name, 0, -1));
                        $value->toXML($xmlWriter);
                        $xmlWriter->endElement();
                    } else {
                        !$parent ? $xmlWriter->startElement($name) : null;
                        $value->toXML($xmlWriter);
                        !$parent ? $xmlWriter->endElement() : null;
                    }
                }
            }
            elseif(is_array($value))
            {
                $string = !empty($value[0]) && (!is_array($value[0]) && !is_object($value[0]));
                $string ? null : $xmlWriter->startElement($name);
                foreach ($value AS $key => $val) {
                    if ($val) {
                        $this->_write($xmlWriter, $name, $val, !$string);
                    }
                }
                $string ? null : $xmlWriter->endElement();
            } else
            {
                $xmlWriter->writeElement($name, $value);
            }
        }
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return bool
     */
    private function _checkObject($name, $value) {
        if(!is_object($value) || substr($name, -1) !== 's') {
            return false;
        }
        foreach(['DataTypesGlobal', 'DCTRequestdatatypes'] as $part) {
            if('Dhl\\' . $part . '\\'.substr($name, 0, -1) . 'Type' == get_class($value)) {
                return true;
            }
        }
        return false;
    }
}