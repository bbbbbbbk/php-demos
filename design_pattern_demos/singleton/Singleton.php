<?php
class Singleton {
    private $props = [];

    private function __construct(){}

    private function __clone(){}

    private static $_instance = null;

    /**
     * @return null|Singleton
     */
    public static function getInstance()
    {
        if(is_null(self::$_instance)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function setProperty($key, $val)
    {
        $this->props[$key] = $val;
    }

    public function getProperty($key)
    {
        return $this->props[$key];
    }
}
