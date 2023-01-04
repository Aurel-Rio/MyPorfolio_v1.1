<?php
/*
$servername = '127.0.0.1';
$username = 'riozacki';
$password = '';

//On essaie de se connecter
try{
    $conn = new PDO("mysql:host=$servername;dbname=my_porfolio", $username, $password);
//On définit le mode d'erreur de PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie';
    $forLog = 'Connexion réussie';
    $date = (new DateTime('NOW'))->format("y:m:d h:i:s");
    $logFile = "../log/error.log";
    $forLogAndDate = "\n" . $forLog . " " . $date . " " . "I am the best developer in the whole universe in php ";
    error_log($forLogAndDate, 3, $logFile);

    print_r('connexion à la base de donées établie');
    }
            
/*On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
*/
//----Configuration de l'accés à la base de données avec l'objet PDO----//

class  MyDbConfig {
    private $host = "127.0.0.1";
    private $dbName = "my_porfolio";
    private $userName = "riozacki";
    private $password = "Domino777.";
    public $connect;

    public  function getConnection() {
        $this->connect = null;
        try {
            $this->connect = new PDO("mysql:host=".$this->host."; dbname=".$this->dbName, $this->userName, $this->password);
            $this->connect->exec("set names utf8");
            echo 'Connexion réussie';
            $forLog = 'Connexion réussie';
            $date = (new DateTime('NOW'))->format("y:m:d h:i:s");
            $logFile = "../log/error.log";
            $forLogAndDate = "\n" . $forLog . " " . $date . " " . "LOL";
            error_log($forLogAndDate, 3, $logFile);
        
            print_r('connexion à la base de donées établie');
        } catch(PDOException $exception) {
            echo "Erreur de connexion".$exception->getMessage();
        }
        return $this->connect;
    }
}



?>