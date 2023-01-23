<?php
include_once('../utils/myDbConnect.php');

class Users
{
    public $connect;
    private $tableUser = 'users';
    private $id_users;
    private $name;
    private $first_name;
    private $mail;
    private $mailConfirm;
    private $password;
    private $passwordConfirm;

    public function __construct()
    {
        $this->connect = new MyDbConfig();
        $this->connect = $this->connect->getConnection();
    }

    public function getTableUser(){
		return $this->tableUser;
	}

	public function setTableUser($tableUser){
		$this->tableUser = $tableUser;
	}

	public function getId_users(){
		return $this->id_users;
	}

	public function setId_users($id_users){
		$this->id_users = $id_users;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getFirst_name(){
		return $this->first_name;
	}

	public function setFirst_name($first_name){
		$this->first_name = $first_name;
	}

	public function getMail(){
		return $this->mail;
	}

	public function setMail($mail){
		$this->mail = $mail;
	}

	public function getMailConfirm(){
		return $this->mailConfirm;
	}

	public function setMailConfirm($mailConfirm){
		$this->mailConfirm = $mailConfirm;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getPasswordConfirm(){
		return $this->passwordConfirm;
	}

	public function setPasswordConfirm($passwordConfirm){
		$this->passwordConfirm = $passwordConfirm;
	}


    // CRUD

    // Read pour récupérer la liste de tous les utilisateurs
    public function getUsers(){
    
        $myQuery = 'SELECT 
                            * 
                        FROM 
                            ' . $this->tableUser . '';
        $stmt = $this->connect->prepare($myQuery);
        $stmt->execute();
        return $stmt;
    }

    //Read d'un seul utilisateur 
    public function getSingleUser()
    {
        $myQuery = 'SELECT 
                            * 
                        FROM 
                            ' . $this->tableUser . '
                        WHERE
                            name = :name';

        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(":name", $this->name);
        $stmt->execute();
        return $stmt;
    }

    public function verifyMail()
    {
        $myQuery = 'SELECT 
                            *
                        FROM
                            ' . $this->tableUser . '
                        WHERE
                            mail = :mail';

        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(":mail", $this->mail);
        $stmt->execute();
        return $stmt;
    }
    
    public function createUser() {
        $myQuery = 'INSERT INTO
                            ' . $this->tableUser . '
                        SET
                        name = :name,
                        first_name = :first_name,
                        mail = :mail,
                        password = :password';
        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':first_name', $this->first_name);
        $stmt->bindParam(':mail', $this->mail);
        $stmt->bindParam(':password', $this->password);
        return $stmt->execute();
    }

    // UPDATE  -> NOM 
    public function updateUser()
    {
        $myQuery = 'UPDATE
                            ' . $this->tableUser . '
                        SET
                    
                        nom = :nom,
                        prenom = :prenom,
                        mail = :mail,
                        mailc = :mailc,
                        tel = :tel,
                        adresse = :adresse,
                        cp = :cp,
                        ville = :ville,
                        mdp = :mdp,
                        mdpc = :mdpc
                        WHERE
                            nom = :nom2';
        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':prenom', $this->prenom);
        $stmt->bindParam(':mail', $this->mail);
        $stmt->bindParam(':mailc', $this->mailc);
        $stmt->bindParam(':tel', $this->tel);
        $stmt->bindParam(':adresse', $this->adresse);
        $stmt->bindParam(':cp', $this->cp);
        $stmt->bindParam(':ville', $this->ville);
        $stmt->bindParam(':mdp', $this->mdp);
        $stmt->bindParam(':mdpc', $this->mdpc);
        if ($stmt->execute) {
            return true;
        } else {
            return false;
        }
    }

    // DELETE -> NOM
    public function deleteUser()
    
    {/*
        $myQuery = 'DELETE FROM ' . $this->tableUser . ' WHERE nom = :nom';
        $stmt = $this->connect->prepare($myQuery);
     $stmt->bindParam(':nom', $this->nom);
        die(var_dump($stmt));
        if ($stmt->execute) {
            var_dump('iffifififif');
            return true;
        
        } else {
            var_dump('lese else');
            return false;

        }
        */
        $myQuerry = "DELETE FROM utilisateurs WHERE nom = '".$this->nom."'";
        $this->connect->exec($myQuerry);
    }
} 
?>