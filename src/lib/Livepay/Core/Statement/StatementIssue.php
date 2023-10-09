<?php 


namespace Livepay\Core\Statement ; 

use Livepay\Config\Config ;
use Livepay\Core\Exception\StatementException ; 



class StatementIssue {

    public function __construct(Config $config){

        try {
            $confClass = $config::$pluginList[$config::$plugin]["config"];
            $confObject = new($confClass($config));
            $statementClass = $config::$pluginList[$config::$plugin]["statement"];
            // $statementObject = new $statementClass() 
            

        }catch(\Exception $e) {
            throw new StatementException(Config::$lang::$lang["Statement"]["Exception"] , $e->getCode() , $e->getPrevious()) ;
        }

        

    }


}