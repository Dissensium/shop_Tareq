<?php 
 include_once getenv('TMPDIR')."includes\includeViewHeader.php";
?>




        <?php
        function afficheArticle($nomdefichier, $prix, $courteDescription)
        {
            $html_string = '<div class="col-sm-3">' . "\n";
            $html_string .= '   <div class="thumbnail">' . "\n";
            $html_string .= '       <a href="'. $nomdefichier .'" target="_blank">' . " \n";
            $html_string .= '           <img src="'.$nomdefichier.'" alt="'.$nomdefichier.'" style="width:100%">' . " \n";
            $html_string .= '               <div class="caption">' . "\n";
            $html_string .= '                   <ul>'. " \n";;
            $html_string .= "                       <li> $prix </li> \n";
            $html_string .= "                       <li> $courteDescription </li> \n";
            $html_string .= '                   </ul>'. "\n";           
            $html_string .= '               </div>' . "\n";
            $html_string .= '       </a>'. "\n";  
            $html_string .= '   </div>' . "\n";
            $html_string .= '</div>' . "\n";

            return  $html_string;
        }

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
        $sqlQuery = 'SELECT * FROM `articles`';
        $stmt = $pdo->query($sqlQuery);
        while ($row = $stmt->fetch()) {
            $rowsResult[] = $row;
        }
        /* echo "<h1> la table image </h1>";
        echo "<pre>";
        print_r($rowsResult);
        echo "<pre>"; */

        ?>



        <div class="container" style="margin-top:30px">
        <div class="row">
        <?php
        
        include_once getenv('TMPDIR') . "includes\includeViewContentLeft.php";
        
?>
        <div class="col-sm-8">
            <h2>mes articles </h2>
            <h5>blabla</h5>

        <!-- loop cross images-->   
        <div class="container">
        <div class="row"> 
        <?php
        
        
        foreach ($rowsResult as $line) {

            $nomdefichier = $line['nomFichier'] ;
            $courteDescription= $line['courteDescription'];
            $prix= $line['prix'];
            echo  afficheArticle($nomdefichier, $prix, $courteDescription);

        }
        ?>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <?php
    include_once getenv('TMPDIR')."includes\includeViewFooter.php";
?>

