<?php 



namespace Livepay\Core\Exception ; 
use Exception;
use Throwable ; 
class StatementException extends Exception {
    
    function __construct($message = "" , $code = 0, Throwable $prevs = null ){
        parent::__construct($message , $code  , $prevs);
    }

}