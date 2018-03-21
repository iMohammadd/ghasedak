<?php
namespace Aries\Ghasedak\Traits;

trait Request {

    private function sendRequest($url, $params, $toObject = false)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "{$url}");
        curl_setopt($ch, CURLOPT_POSTFIELDS, "$params");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $res = curl_exec($ch);
        curl_close($ch);
        return json_decode($res, $toObject);
    }

    private function ParameterBuilder($params)
    {
        if (is_array($params)) {
            $i = 0;
            foreach ($params as $key => $value) {
                if (isset($value) && $value != "" && $value != null) {
                        $this->params .= "&" . $key . "=" . $this->ValueBuilder($value);
                    $i++;
                }
            }
        }

        //return $this;
    }

    private function ValueBuilder($value)
    {
        if(is_array($value)) {
            return implode(",", $value);
        }
        return $value;
    }
}