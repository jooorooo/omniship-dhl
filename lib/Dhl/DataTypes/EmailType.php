<?php

namespace Dhl\DataTypes;

/**
 * Class representing EmailType
 *
 * Email message
 * XSD Type: Email
 */
class EmailType
{

    /**
     * @property string $from
     */
    private $from = null;

    /**
     * @property string $to
     */
    private $to = null;

    /**
     * @property string[] $cc
     */
    private $cc = array(
        
    );

    /**
     * @property string $subject
     */
    private $subject = null;

    /**
     * @property string $replyTo
     */
    private $replyTo = null;

    /**
     * @property string $body
     */
    private $body = null;

    /**
     * Gets as from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets a new from
     *
     * @param string $from
     * @return self
     */
    public function setFrom($from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Gets as to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets a new to
     *
     * @param string $to
     * @return self
     */
    public function setTo($to)
    {
        $this->to = $to;
        return $this;
    }

    /**
     * Adds as cc
     *
     * @return self
     * @param string $cc
     */
    public function addToCc($cc)
    {
        $this->cc[] = $cc;
        return $this;
    }

    /**
     * isset cc
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCc($index)
    {
        return isset($this->cc[$index]);
    }

    /**
     * unset cc
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCc($index)
    {
        unset($this->cc[$index]);
    }

    /**
     * Gets as cc
     *
     * @return string[]
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * Sets a new cc
     *
     * @param string $cc
     * @return self
     */
    public function setCc(array $cc)
    {
        $this->cc = $cc;
        return $this;
    }

    /**
     * Gets as subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * @param string $subject
     * @return self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as replyTo
     *
     * @return string
     */
    public function getReplyTo()
    {
        return $this->replyTo;
    }

    /**
     * Sets a new replyTo
     *
     * @param string $replyTo
     * @return self
     */
    public function setReplyTo($replyTo)
    {
        $this->replyTo = $replyTo;
        return $this;
    }

    /**
     * Gets as body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param string $body
     * @return self
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }


}

