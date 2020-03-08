<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Contextual Classes</h2>
  <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Default</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
      </tr>
      <tr class="success">
        <td>Success</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr class="info">
        <td>Danger</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr class="success">
        <td>Info</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      <tr class="info">
        <td>Warning</td>
        <td>Refs</td>
        <td>bo@example.com</td>
      </tr>
      <tr class="success">
        <td>Active</td>
        <td>Activeson</td>
        <td>act@example.com</td>

      </tr>
    </tbody>
  </table>
  <h1>test boucle for</h1>
  <table class="table">
    <thead>
      <tr>
        <th>nombre</th>
        <th>carre</th>
      </tr>
    </thead>
    <tbody>

  <?php

  for ($i = 0;$i <= 10;$i++){

    $html_string='<tr class="';

    if ($i%2 == 1)
        $html_string .= "info";
   else
        $html_string .= "success";

    $html_string.='">'."\n";
    $html_string.="<td>$i</td>\n";
    $html_string.="<th>$i*$i</th>\n";;




     //echo("nombre ".$i." son carré est ".$i*$i."</br> \n");

    echo $html_string;




  }

  


  ?>
    </tbody>


<?php

    $TableauDeTareq = array("Volvo","titi","tata");
    foreach ($TableauDeTareq as $mavariable){
      echo  $mavariable."<br> \n";
    }

?>

</div>

</body>
</html>
