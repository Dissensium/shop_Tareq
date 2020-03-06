<?php 

include_once "ClassDbManager.php";
include_once "ClassDbBroker.php";

function  test_showAllDatabase()
{      
    echo "<h1> test avec le port 3306 </h1> ";   
    //Your MySQL server connection details.
    $host = '127.0.0.1';
    $port = '3306';
    $user = 'root';
    $password = '';
     
    //Connect to the MySQL server using PDO.
    $pdo = new PDO("mysql:host=$host;port=$port", $user, $password);
     
    //Execute a "SHOW DATABASES" SQL query.
    $stmt = $pdo->query('SHOW DATABASES');
    
    //Fetch the columns from the returned PDOStatement
    $databases = $stmt->fetchAll(PDO::FETCH_COLUMN);
    
    //Loop through the database list and print it out.
    foreach($databases as $database){
        //$database will contain the database name
        //in a string format
        echo $database, '<br>';
    }    
    return 1;
}

function test_DbManager_conexion()
{
    echo "<h1> test de la class ClassDbManager </h1> ";
    try
		{
            $host = "localhost";
            $port = "3308";
            $dbname = "zeggani_shop";
            $user ="root";
            $password ="";

            $myClassDbManager = new ClassDbManager($host,$port,$dbname,$user, $password); 
            echo "<h2> showAllDatabase </h2> ";
            $myClassDbManager->showAllDatabase();            
            echo "<h2> showAllTable </h2> ";
            $myClassDbManager->showAllTable();
           
		}
		catch(PDOException $e)
		{
			echo 'Erreur de connexion au serveur MySQL ! <br /> Erreur détectée : '.$e->getMessage();
			exit(); 
		}
}

test_showAllDatabase();
test_DbManager_conexion();
$myClassDbManager = ClassDbBroker::getInstance();
$rows = $myClassDbManager->getArticlesByCaterory("toto");
echo "<pre> \n";
print_r($rows);
echo "</pre> \n";
