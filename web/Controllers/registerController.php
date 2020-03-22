<?php

include_once "ClassDbBroker.php";
include_once "ClassConfig.php";
define("CLIENT","client");


if(isset($_POST['submit'])) {
   $nikname = htmlspecialchars($_POST['nikname']);
   $email = htmlspecialchars($_POST['email']);
   $emailConfirmation = htmlspecialchars($_POST['emailConfirmation']);
   $salt = ClassConfig::getInstance()->getSalt();
   $password = sha1($salt.$_POST['password']);
   $passwordConfirmation = sha1($salt.$_POST['passwordConfirmation']);


      if(!empty($nikname) AND !empty($email) AND !empty($emailConfirmation) AND !empty($password) AND !empty($passwordConfirmation)) {
      $niknamelength = strlen($nikname);
      if($niknamelength <= 255) {
         if($email == $emailConfirmation) {
               if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $myClassDbBroker = ClassDbBroker::getinstance();
               if(!$myClassDbBroker->emailExiste($email)) {
                  if($password == $passwordConfirmation) {
                     $myClassDbBroker->addMember($nikname, $email, $password, CLIENT);
                     $erreur = "Votre compte a bien été créé !";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } else {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }

   echo $erreur;
}
