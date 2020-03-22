<?php

class ClassDbManager
{
    private $host;
    private $port;
    private $dbname;
    private $user;
    private $password;
    private $pdo;

    public function __construct($host,$port,$dbname,$user, $password){
        $this->host = $host ;
        $this->port = $port;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;

        //Connect to the MySQL server using PDO.
        $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $user, $password);

    }

    public function getPdo(){
        return $this->pdo;
    }

    public function showAllTable(){
        try {
            $sql = "SHOW TABLES";
            //Prepare our SQL statement,
            $statement = $this->pdo->prepare($sql);
            //Execute the statement.
            $statement->execute();
            //Fetch the rows from our statement.
            $tables = $statement->fetchAll(PDO::FETCH_NUM);
            //Loop through our table names.
            foreach($tables as $table){
                //Print the table name out onto the page.
                echo $table[0], '<br>';
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
        return 1;
    }

    public function showAllDatabase(){

        //Execute a "SHOW DATABASES" SQL query.
        $stmt = $this->pdo->query('SHOW DATABASES');

        //Fetch the columns from the returned PDOStatement
        $databases = $stmt->fetchAll(PDO::FETCH_COLUMN);
        //var_dump($databases);
        //Loop through the database list and print it out.
        foreach($databases as $database){
            //$database will contain the database name
            //in a string format
            echo $database, '<br>';
        }
        return 1;
    }

    public function getRowsFromSelectQuery($sqlQuery){
        $rows = array();
        $stmt = $this->pdo->query($sqlQuery);
        while ($row = $stmt->fetch()) {
            $rows[] = $row;
        }

        return $rows;
    }


    public function addMember($nikname, $email, $password, $role){
        $insertmbr = $this->pdo->prepare("INSERT INTO membres(pseudo, mail, motdepasse, role) VALUES(?, ?, ?, ?)");
        $insertmbr->execute(array($nikname, $email, $password, $role));
    }
    public function addArticle($nomFichier,$titre,$type,$prix,$courteDescription,$Description){
        $insertArticle = $this->pdo->prepare("INSERT INTO articles(nomFichier, titre, type, prix, courteDescription, description) VALUES(?, ?, ?,?,?,?)");
        $insertArticle->execute(array($nomFichier,$titre,$type,$prix,$courteDescription,$Description));
    }
    public function getUserRolebis($username,$password)
    {
        //requête
        //$query = $this->pdo->prepare("SELECT EXISTS(SELECT * FROM membres where mail=$username and motdepasse=$password) ");

        //$query = $this->pdo->prepare("SELECT * FROM membres where mail=$username and motdepasse=$password");
        echo "SELECT * FROM membres where mail=$username <br> \n";
        $query = $this->pdo->prepare('SELECT * FROM membres where mail="'.$username.'" and motdepasse="'.$password.'"');
        $query->execute ();
        $count = $query->rowCount();
        echo " $count <br> \n";
        $resulat=false;
        if ( $count > 0 ) {
               echo "Login ou password correct" ;
               $resulat = true;
        }
        return $resulat;
      }


      public function getUserRole($username,$password)
        {
           $resultat ="";
            //requête
            //$query = $this->pdo->prepare("SELECT EXISTS(SELECT * FROM membres where mail=$username and motdepasse=$password) ");

            //$query = $this->pdo->prepare("SELECT * FROM membres where mail=$username and motdepasse=$password");
            $rows = array();
            $sqlQuery ='SELECT role FROM membres where mail="'.$username.'" and motdepasse="'.$password.'"';
            $stmt = $this->pdo->query($sqlQuery);

           while ($row = $stmt->fetch()) {
                $rows[] = $row;
            }

            $nbMembres = sizeof($rows);
            if ($nbMembres==0) {
              $resultat =""
            }else{
              $resultat=  $rows[0];
            }
             echo $resultat;
            die;
            }



    public function addPersonne($Nom,$prénom,$pays,$codepostal,$adressedelivraison,$adressedefacturation,$numtel)
    {
      $insertPers = $this->pdo->prepare("INSERT INTO personne(nom, prenom, pays, codepostal, adressedelivraison, adressedefacturation, numtel) VALUES(?, ?, ?, ?, ?, ?, ?)");
      $insertPers->execute(array($Nom,$prénom,$pays,$codepostal,$adressedelivraison,$adressedefacturation,$numtel));
    }
}

?>
