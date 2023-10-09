<?php



namespace Livepay\I18n ; 
use Livepay\Config\Config ; 
class I18n {

    public static array $lang ; 

    public function __construct(Config $config) {

        $directoryPath = sprintf('%s/' , $config::$langName);
        $files = glob($directoryPath . '*');
        
        foreach ($files as $file) {
            if (is_file($file)) {
                include $file;
            }


        }

        $this->lang = $lang ; 

    }

}