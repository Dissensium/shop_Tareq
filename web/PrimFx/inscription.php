<?php

$host = "localhost";
$port = "3308";
$dbname = "zeggani_shop";
$user = "root";
$password = "";
$dsn = "mysql:host=$host;dbname=$dbname;port=$port";
$bdd = new PDO($dsn, $user, $password);
echo '<h1> Inscription </h1>';

echo "pseudo : ".$_POST['pseudo']."<br> \n";
echo "mail   : ".$_POST['mail']."<br> \n";
echo "mail2  : ".$_POST['mail2']."<br> \n";
echo "mdp    : ".$_POST['mdp']."<br> \n";


if(isset($_POST['forminscription'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
         if($mail == $mail2) {
            echo " mail == mail2 ok <br> \n";
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               echo "RowCount is $mailexist ok <br> \n";
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     echo " mdp == mdp2 ok <br> \n";
                     $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($pseudo, $mail, $mdp));
                     $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
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
?>