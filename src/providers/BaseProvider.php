<?php

namespace Aries\Ghasedak\Providers;

class BaseProvider {

    protected $API_BASE;

    protected $receiver, $sender, $message, $localId, $date, $type, $messageId;

    protected $params;

    protected $number;

    protected $isRead;

    public function URLBuilder($string, $empty = false)
    {
        if($empty) {
            $this->API_BASE = $string;
        } else {
            $this->API_BASE .= $string;
        }
        return $this;
    }
}