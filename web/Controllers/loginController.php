<?php
session_start();
include_once "ClassDbBroker.php";
include_once "ClassConfig.php";

define("CLIENT", "client");
define("ADMIN", "admin");

// On démarre la session AVANT d'écrire du code HTML


// On s'amuse à créer quelques variables de session dans $_SESSION


$salt = ClassConfig::getInstance()->getSalt();

$email = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$password = sha1($salt . $password);

echo "loginController";
$myClassDbBroker = ClassDbBroker::getinstance();
$myClassDbBroker->getUserRole($email, $password);
$roleSt = $myClassDbBroker->getUserRole($email, $password);
if ($roleSt == ADMIN) {
   $_SESSION['username'] = $email;
   $_SESSION['password'] = $password;
   $_SESSION['role'] = ADMIN;
} else {
   if ($roleSt == CLIENT) {
      $_SESSION['username'] = $email;
      $_SESSION['password'] = $password;
      $_SESSION['role'] = CLIENT;
   } else {
      $_SESSION['role'] = "";
   }
}

header('Location: http://localhost/shop_Tareq/web/viewHomePage.php');
  
//}
