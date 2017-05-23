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
            $xmlWriter->writeAttribute('xsi:schemaLocation', static::$DHL_REQ . ' ' . $className . '.xsd');

            if(!empty($this->schemaVersion)) {
                $xmlWriter->writeAttribute('schemaVersion', $this->schemaVersion);
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

        print_r(htmlspecialchars($xmlWriter->outputMemory(true)));
        exit;

        $xmlWriter->startElement('Request');
        $xmlWriter->startElement('ServiceHeader');
        foreach ($this->_headerParams as $name => $infos)
        {
            $xmlWriter->writeElement($name, $this->$name);
        }
        $xmlWriter->endElement(); // End of Request
        $xmlWriter->endElement(); // End of ServiceHeader

        foreach ($this->_bodyParams as $name => $infos)
        {
            if ($this->$name)
            {
                if (is_object($this->$name))
                {
                    $this->$name->toXML($xmlWriter);
                }
                elseif (is_array($this->$name))
                {
                    if ('string' == $this->_params[$name]['type'])
                    {
                        foreach ($this->$name as $subelement)
                        {
                            $xmlWriter->writeElement($name, $subelement);
                        }
                    }
                    else
                    {
                        if (!isset($this->_params[$name]['disableParentNode']) || false == $this->_params[$name]['disableParentNode'])
                        {
                            $xmlWriter->startElement($name);
                        }

                        foreach ($this->$name as $subelement)
                        {
                            $subelement->toXML($xmlWriter);
                        }

                        if (!isset($this->_params[$name]['disableParentNode']) || false == $this->_params[$name]['disableParentNode'])
                        {
                            $xmlWriter->endElement();
                        }
                    }
                }
                else
                {
                    $xmlWriter->writeElement($name, $this->$name);
                }
            }
        }

        $xmlWriter->endElement(); // End of parent node

        // End of class name tag
        if (null !== $this->_xmlNodeName)
        {
            $xmlWriter->endElement();
        }

        $xmlWriter->endDocument();

        return $xmlWriter->outputMemory(true);
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
                } else {
                    if(substr($name, -1) == 's' && 'Dhl\DataTypesGlobal\\'.substr($name, 0, -1) . 'Type' == get_class($value)) {
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
                foreach($value AS $key => $val) {
                    if($val) {
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

}