<?php


namespace Livepay\Config;

use Livepay\I18n\I18n;


class Config
{

    /** @var string $plugin Plugin Class definitor ; if null, using dummy.
     * 
     * @static
     */
    public static $plugin = null;
    /** @var string $serverkey Serverkey.
     * 
     * @static
     */
    public static $serverKey;
    /** @var string $clientKey clientKey.
     * 
     * @static
     */
    public static $clientKey;

    /** @var string $environment environment. Predefined by env. if null, you can define it by static asigning variable
     * 
     * @static
     */
    public static $environment = getenv('ENVIRONMENT');

    /** @var string $callback Callback URL for updating payment. */
    public static $callback;
    /** @var string $langName two-char language code */
    public static $langName;
    /** @var I18n $lang language Class initiated */
    public static $lang;

    /**
     * Defining i18n Language Class
     *
     * Defining i18n Language Class
     *
     * @param I18n $lang Language Initiated By I18n
     * @return int
     **/
    public function __setI18n(Config $config): int
    {
        $this->lang = (new I18n($config))::$lang;
        return 0;
    }
}