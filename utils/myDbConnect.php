<?php


class  MyDbConfig {
    private $host = "127.0.0.1";
    private $dbName = "my_porfolio";
    private $userName = "riozacki";
    private $password = "";
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