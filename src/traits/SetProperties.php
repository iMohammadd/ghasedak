<?php
namespace  Aries\Ghasedak\Traits;

trait SetProperties {
    public function setReceiver($receiver)
    {
        $this->provider->setReceiver($receiver);
        return $this;
    }

    public function setMessage($message)
    {
        $this->provider->setMessage($message);
        return $this;
    }

    public function setSender($sender)
    {
        $this->provider->setSender($sender);
        return $this;
    }

    public function setLocalId($localId)
    {
        $this->provider->setLocalId($localId);
        return $this;
    }

    public function setDate($date)
    {
        $this->provider->setDate($date);
        return $this;
    }

    public function setType($type)
    {
        $this->provider->setType($type);
        return $this;
    }

    public function setNumber($number)
    {
        $this->provider->setNumber($number);
        return $this;
    }

    public function isRead($isRead)
    {
        $this->provider->isRead($isRead);
        return $this;
    }

    public function setMessageId($messageId)
    {
        $this->provider->setMessageId($messageId);
        return $this;
    }

    public function send()
    {
        return $this->provider->send();
    }

    public function sendGroup()
    {
        return $this->provider->sendGroup();
    }

    public function cancel()
    {
        return $this->provider->cancel();
    }

    public function getStatus()
    {
        return $this->provider->getStatus();
    }

    public function getMessages()
    {
        return $this->provider->getMessages();
    }

    public function getMessage()
    {
        return $this->provider->getMessage();
    }

    public function getInfo()
    {
        return $this->provider->getInfo();
    }

    public function init()
    {
        return $this->provider->init();
    }
}