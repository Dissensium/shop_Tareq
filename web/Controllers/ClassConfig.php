<?php

class ClassConfig
{

    private static $MySingletonInstance = null;

    private $myClassConfig = null;
    private $iniArray = null;

    private function __construct()
    {
        $configFileName = "../config.ini";
        echo "configFileName : $configFileName <br>\n";
        $this->iniArray = parse_ini_file($configFileName);
    }

    public static function getInstance()
    {
        if (is_null(self::$MySingletonInstance)) {
            self::$MySingletonInstance = new ClassConfig();
        }

        return self::$MySingletonInstance;
    }

    public function getParam($myIniKey)
    {
        $param = $this->iniArray[$myIniKey];
        if (is_null($param)) {
            echo "problème de configuration avec config.ini";
            die;
        }
        return $param;
    }

    public function getConfig()
    {
        return $this->iniArray;
    }

    public function getHost()
    {
        return $this->iniArray['host'];
    }

    public function getPort()
    {
        return $this->iniArray['port'];
    }

    public function getDbname()
    {
        return $this->iniArray['dbname'];
    }

    public function getUser()
    {
        return $this->iniArray['user'];
    }

    public function getPassword()
    {
        return $this->iniArray['password'];
    }
    public function getSalt()
    {
      return $this->iniArray['salt'];
    }
}
