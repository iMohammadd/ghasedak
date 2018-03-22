<?php
namespace Aries\Ghasedak\Providers\Kavenegar;

use Aries\Ghasedak\Interfaces\BaseInterface;
use Aries\Ghasedak\Providers\BaseProvider;
use Aries\Ghasedak\Traits\Request;

class Kavenegar extends BaseProvider implements BaseInterface {

    use Request;

    public function __construct()
    {
        $this->init();
        return $this;
    }

    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
        return $this;
    }

    public function setMessage($message)
    {

            $this->message = $message;

        return $this;
    }

    public function setSender($sender)
    {
        $this->sender = $sender;
        return $this;
    }

    public function setLocalId($localId)
    {
        $this->localId = $localId;
        return $this;
    }

    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
        return $this;
    }

    public function send()
    {
        $params = [
            'receptor'  =>  $this->receiver,
            'message'   =>  $this->message,
            'sender'    =>  $this->sender,
            'date'      =>  $this->date,
            'type'      =>  $this->type,
            'localid'   =>  $this->localId
        ];

        $this->ParameterBuilder($params);

        //return $this->params;
        $this->URLBuilder("sms/send.json");

        //return $this->API_BASE;
        $result = $this->sendRequest($this->API_BASE, $this->params);

        return $result;
    }

    public function sendGroup()
    {
        $params = [
            'receptor'  =>  $this->receiver,
            'message'   =>  $this->message,
            'sender'    =>  $this->sender,
            'date'      =>  $this->date,
            'type'      =>  $this->type,
            'localid'   =>  $this->localId
        ];

        $this->ParameterBuilder($params);

        //return $this->params;
        $this->URLBuilder("sms/sendarray.json");

        //return $this->API_BASE;
        $result = $this->sendRequest($this->API_BASE, $this->params);

        return $result;
    }

    public function cancel()
    {
        $params = [
            'messageid' =>  $this->messageId
        ];

        $this->ParameterBuilder($params);

        $this->URLBuilder("/sms/cancel.json");

        return $this->sendRequest($this->API_BASE, $this->params);
    }

    public function getStatus()
    {
        $params = [
            'messageid' =>  $this->messageId
        ];

        $this->ParameterBuilder($params);

        $this->URLBuilder('/sms/status.json');

        return $this->sendRequest($this->API_BASE, $this->params);
    }

    public function getMessage()
    {
        $params = [
            'messageid' =>  $this->messageId
        ];

        $this->ParameterBuilder($params);

        $this->URLBuilder('/sms/select.json');

        return $this->sendRequest($this->API_BASE, $this->params);
    }

    public function getMessages()
    {
        $params = [
            'linenumber'    =>  $this->number,
            'isread'        =>  $this->isRead
        ];

        $this->ParameterBuilder($params);

        $this->URLBuilder('sms/receive.json');

        $result = $this->sendRequest($this->API_BASE, $this->params);

        return $result;
    }

    public function getInfo()
    {
        $this->ParameterBuilder([]);

        $this->URLBuilder('/account/info.json');

        return $this->sendRequest($this->API_BASE, $this->params);
    }

    public function init()
    {
        $API_KEY = config('ghasedak.kavenegar.api');
        $this->URLBuilder("https://api.kavenegar.com/v1/" . $API_KEY . "/", true);
    }

    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    public function isRead($isRead = 0)
    {
        $this->isRead = $isRead;
        return $this;
    }
}