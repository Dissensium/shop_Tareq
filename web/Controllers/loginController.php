<?php
session_start();
include_once "ClassDbBroker.php";
include_once "ClassConfig.php";

define("CLIENT","client");
define("ADMIN","admin");

// On démarre la session AVANT d'écrire du code HTML


// On s'amuse à créer quelques variables de session dans $_SESSION


$salt = ClassConfig::getInstance()->getSalt();
$email = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$password = sha1($salt.$password);








   $myClassDbBroker = ClassDbBroker::getinstance();
   $roleSt = $myClassDbBroker->getUserRole($email,$password);         
   echo  $roleSt;
 
      if ( $roleSt==CLIENT){
         echo "ADMIN <br> \n";
         $_SESSION['username']=$email;
         $_SESSION['password']=$password;
         $_SESSION['role']=CLIENT;

      }else{

         if ( $roleSt==ADMIN){
            $_SESSION['username']=$email;
            $_SESSION['password']=$password;
            $_SESSION['role']=ADMIN;
         }else{
            echo "Normale <br> \n";            
         }
      }


  







//}
