<?php

include_once "ClassDbBroker.php";
include_once "ClassConfig.php";


// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION


$salt = ClassConfig::getInstance()->getSalt();
$email = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$password = sha1($salt.$password);








   $myClassDbBroker = ClassDbBroker::getinstance();
             
               
   if ($myClassDbBroker->isUserExists($email,$password) ){
    $_SESSION['username'] = $email;
    $_SESSION['password'] = $password;
    echo "je suis loger";

   }else{
    echo "je suis loger";
   }
   




   
        
//}

