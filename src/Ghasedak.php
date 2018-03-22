<?php
namespace Aries\Ghasedak;


use Aries\Ghasedak\Interfaces\BaseInterface;
use Aries\Ghasedak\Providers\Kavenegar\Kavenegar;
use Aries\Ghasedak\Traits\SetProperties;

class Ghasedak implements BaseInterface {

    use SetProperties;

    private $provider;

    public function __construct($provider)
    {
        $this->provider = $this->which($provider);
    }

    private function which($provider)
    {
        $class = null;

        switch ($provider) {
            case "kavenegar":
                $class = new Kavenegar();
                break;
        }

        return $class;
    }
}