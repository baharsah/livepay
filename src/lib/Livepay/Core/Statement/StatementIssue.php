<?php 


namespace Livepay\Core\Statement ; 

use Livepay\Config\Config ;
use Livepay\Core\Exception\StatementException ; 



class StatementIssue {

    public function __construct(Config $config){

        try {

            $statement = new($config::$pluginList[$config::$plugin]["statement"]); 
            

        }catch(\Exception $e) {
            throw new StatementException(Config::$lang::$lang["Statement"]["Exception"] , $e->getCode() , $e->getPrevious()) ;
        }

        

    }


}