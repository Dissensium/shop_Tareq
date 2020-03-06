<?php

include_once "ClassConfig.php";
include_once "ClassDbManager.php";


class ClassDbBroker
{

    private static $MySingletonInstance = null;

    private $myClassDbManager;


    private function __construct()
    {
        $myClassConfig = ClassConfig::getInstance();
        $host = $myClassConfig->getHost();
        $port = $myClassConfig->getPort();
        $dbname = $myClassConfig->getDbname();
        $user = $myClassConfig->getUser();
        $password = $myClassConfig->getPassword();
        $this->myClassDbManager = new ClassDbManager($host, $port, $dbname, $user, $password);
    }

    public static function getInstance()
    {
        if (is_null(self::$MySingletonInstance)) {
            self::$MySingletonInstance = new ClassDbBroker();
        }

        return self::$MySingletonInstance;
    }

    public function getArticlesByCaterory($myCategory)
    {
        $sqlQuery = 'SELECT * FROM `articles`';
        $rows = $this->myClassDbManager->getRowsFromSelectQuery($sqlQuery);
        return $rows;
    }

    public function emailExiste($email)
    {
        $myPdo = $this->myClassDbManager->getPdo();
        $reqmail = $myPdo->prepare("SELECT * FROM membres WHERE mail = ?");
        $reqmail->execute(array($email));
        $mailexist = $reqmail->rowCount();
        echo " mailexist  $mailexist <br> \n";
        $result = false;
        if ($mailexist >= 1) {
            $result = true;
        }
        return $result;
    }

    public function addMember($nikname, $email, $password){
        $myPdo = $this->myClassDbManager->addMember($nikname, $email, $password);
    }
}
