<?php

namespace Livepay\Module\Midtrans ; 
use Midtrans\Config as MTConfig ; 
use Livepay\Config\Config as LPConfig ; 

class Config {


    public function __construct(LPConfig $config){



        // Assigning Livepay Config to Midtrans

        MTConfig::$clientKey = $config::$clientKey ; 
        MTConfig::$serverKey = $config::$serverKey ; 
        MTConfig::$isProduction = $config::$environment == "Production" ; 


}

}