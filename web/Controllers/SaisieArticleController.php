<?php
include_once "ClassDbBroker.php";
session_start();
$email = $_SESSION['username'];
$password =$_SESSION['password'];
$myClassDbBroker = ClassDbBroker::getinstance();
if ($myClassDbBroker->isUserExists($email,$password) ){
  

    //if(isset($_POST['submit'])) {
   $nomFichier = htmlspecialchars($_POST['nomFichier']);
   $titre = htmlspecialchars($_POST['titre']);
   $type = htmlspecialchars($_POST['type']);
   $prix = htmlspecialchars($_POST['prix']);
   $courteDescription = htmlspecialchars($_POST['courteDescription']);
   $Description= htmlspecialchars ($_POST['longueDescription']);
  echo "post_submit ok";
   if(!empty($nomFichier) AND !empty($titre) AND !empty($type) AND !empty($prix) AND !empty($courteDescription)
   AND !empty($Description)) {
     echo "premier test ok";
      if(is_numeric($prix)) {
        $myClassDbBroker = ClassDbBroker::getinstance();
        $myClassDbBroker->addArticle($nomFichier, $titre,$type,$prix,$courteDescription,$Description);
        echo "test is_numeric ok";
      }
    }
    

   }else{
    
  
}

  //}
