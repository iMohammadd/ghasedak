<?php
namespace Aries\Ghasedak\Interfaces;

interface BaseInterface {

    public function setReceiver($receiver);

    public function setMessage($message);

    public function setSender($sender);

    public function setLocalId($localId);

    public function setDate($date);

    public function setType($type);

    public function setNumber($number);

    public function isRead($isRead);

    public function send();

    public function sendGroup();

    public function cancel();

    public function getStatus();

    public function getMessages();

    public function getMessage();

    public function getInfo();

    public function init();

}