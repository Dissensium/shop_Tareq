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

<<<<<<< HEAD
    public function getArticlesByCaterory($myCategory)
=======
    public function getRowsFromSelectQuery($sqlQuery)
    {
        $rows = $this->myClassDbManager->getRowsFromSelectQuery($sqlQuery);
        return $rows;
    }



    public function getAllArticles($myCategory)
>>>>>>> 995d6cb0ad465c5de9b54f4b2415cd55add7b1f9
    {
        $sqlQuery = 'SELECT * FROM `articles`';
        $rows = $this->myClassDbManager->getRowsFromSelectQuery($sqlQuery);
        return $rows;
    }

    
    public function getArticlesByCaterory($myCategory)
    {
        $sqlQuery = 'SELECT * FROM `articles` where type= '. "'$myCategory'". '';
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

    public function addMember($nikname, $email, $password, $role)
    {
        $myPdo = $this->myClassDbManager->addMember($nikname, $email, $password, $role);
    }

<<<<<<< HEAD
    public function addArticle($nomFichier,$titre,$type,$prix,$courteDescription,$Description){
        $myPdo = $this->myClassDbManager->addArticle($nomFichier,$titre,$type,$prix,$courteDescription,$Description);

    }
    public function getUserRole($usernam,$password)
=======
    public function addArticle($nomFichier, $titre, $type, $prix, $courteDescription, $Description)
>>>>>>> 995d6cb0ad465c5de9b54f4b2415cd55add7b1f9
    {
        $myPdo = $this->myClassDbManager->addArticle($nomFichier, $titre, $type, $prix, $courteDescription, $Description);
    }

<<<<<<< HEAD
        return $this->myClassDbManager->getUserRole($usernam,$password);

    }
    public function addPersonne($Nom,$prénom,$pays,$codepostal,$adressedelivraison,$adressedefacturation,$numtel){
      $myPdo = $this->myClassDbManager->addPersonne($Nom,$prénom,$pays,$codepostal,$adressedelivraison,$adressedefacturation,$numtel);
    }

=======
    public function getUserRole($usernam, $password)
    {
        $roleSt = "";
        $rows = $this->myClassDbManager->getUserRole($usernam, $password);
        if (sizeof($rows) == 1) {
            var_dump($rows[0]['role']);
            $roleSt = $rows[0]['role'];
        } else {
            if (sizeof($rows) >= 1) {
                echo "Problème de consistance de la base de données <br> \n";
            }
        }
        return $roleSt;
>>>>>>> 995d6cb0ad465c5de9b54f4b2415cd55add7b1f9

    }

    public function addPersonne($Nom, $prénom, $pays, $codepostal, $adressedelivraison, $adressedefacturation, $numtel)
    {
        $myPdo = $this->myClassDbManager->addPersonne($Nom, $prénom, $pays, $codepostal, $adressedelivraison, $adressedefacturation, $numtel);
    }
}
