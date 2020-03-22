<?php
include_once "ClassDbBroker.php";

echo "<pre>";
print_r($_POST);
echo "</pre>";

if(isset($_POST['nom'])) {
   $Nom = htmlspecialchars($_POST['nom']);
   $prénom = htmlspecialchars($_POST['prenom']);
   $pays = htmlspecialchars($_POST['pays']);
   $codepostal = htmlspecialchars($_POST['codepostal']);
   $adressedelivraison = htmlspecialchars($_POST['adressedelivraison']);
   $adressedefacturation= htmlspecialchars ($_POST['adressedefacturation']);
   $numtel= htmlspecialchars ($_POST['numtel']);
  echo "post_submit ok";
   if(!empty($Nom) AND !empty($prénom) AND !empty($pays) AND !empty($codepostal) AND !empty($adressedelivraison)
   AND !empty($adressedefacturation)AND !empty($numtel)) {

        $myClassDbBroker = ClassDbBroker::getinstance();
        $myClassDbBroker->addPersonne($Nom,$prénom,$pays,$codepostal,$adressedelivraison,$adressedefacturation,$numtel);

    }
  }
