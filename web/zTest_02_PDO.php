<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Large rounded red border */
        hr.myClass {
            border: 2px solid red;
            border-radius: 5px;
        }
    </style>
</head>

<body>


    <?php

    $host = "localhost";
    $port = "3308";
    $dbname = "zeggani_shop";
    $user = "root";
    $password = "";

    //Connect to the MySQL server using PDO.
    //$this->pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $user, $password);
    $dsn = "mysql:host=$host;dbname=$dbname;port=$port";
    $pdo = new PDO($dsn, $user, $password);
    $rowsResult = array();
    $sqlQuery = 'SELECT * FROM `images`';
    $stmt = $pdo->query($sqlQuery);
    while ($row = $stmt->fetch()) {
        $rowsResult[] = $row;
    }
    echo "<h1> la table image </h1>";
    echo "<pre>";
    print_r($rowsResult);
    echo "<pre>";

    ?>

    <h1>test afficgage article</h1>
    </table>
  <table class="table">
    <thead>
      <tr>
        <th>nombre</th>
        <th>carre</th>
      </tr>
    </thead>
    <tbody>

<?php 



foreach ($rowsResult as $line){

    echo $line['nomFichier']."<br> \n";
    echo $line['courteDescription']."<br> \n";
    echo $line['prix']."<br> \n";



}






?>


</body>

</html>