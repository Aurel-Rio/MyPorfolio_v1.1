<?php

include_once('../utils/myDbConnect.php');
include_once('../models/users.php');

/*-------------------CONTROLES ET VERIFICATIONS DES CHAMPS DU FORMULAIRE--------------------------*/ 
$nbrLineNameUser2 = '';
$nbrLineMailRegister = ''; 
$success = 0;
$msg = "Une erreur est survenue dans le php";
$errors = [];
if (isset($_POST['formRegister'])) {
    if (
        !empty($_POST['name'])
        && !empty($_POST['first_name'])
        && !empty($_POST['mail'])
        && !empty($_POST['mailConfirm'])
        && !empty($_POST['password'])
        && !empty($_POST['passwordConfirm'])
    ) {

        $name = trim($_POST['name']);
        $first_name = trim($_POST['first_name']);
        $mail = trim($_POST['mail']);
        $mailConfirm = trim($_POST['mailConfirm']);
        $password = trim($_POST['password']);
        $passwordConfirm = trim($_POST['passwordConfirm']);



        if ($password !== $passwordConfirm) {
            $errors['mdp'] = "PHP -> Les mots de passent ne correspondent pas !";
        } else {
            if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $errors['mail'] = "PHP -> Cette adresse e-mail n'est pas valide!";
                echo "<script>alert(\"PHP ->Cette adresse e-mail n'est pas valide!\")</script>";
                echo ($errors);
            } else if (!filter_var($mailConfirm, FILTER_VALIDATE_EMAIL)) {
                $errors['mailConf'] = "PHP -> Echec de la confirmation e-mail! ";
                echo "<script>alert(\"PHP ->Echec de la confirmation e-mail! \")</script>";
                echo ($errors);
            } else if ($mail !== $mailConfirm) {
                $errors['mailCompare'] = "PHP -> Vos e-mails ne sont pas identiques, erreur de saisie!";
                echo "<script>alert(\"PHP -> Vos e-mails ne sont pas identiques, erreur de saisie!\")</script>";

            } else {
                $verifPassword = htmlspecialchars(strip_tags($password));
                $verifName = htmlspecialchars(strip_tags($name));
                $verifMail = htmlspecialchars(strip_tags($mail));
                $verifFirst_name = htmlspecialchars(strip_tags($first_name));
    

                $newUser = new Users();

                $newUser->setName($verifName);
                $newUser->setFirst_name($verifFirst_name);
                $newUser->setMail($verifMail);
                $newUser->setPassword(password_hash($verifPassword, PASSWORD_BCRYPT));
                $stUser = $newUser->getSingleUser();
                $nbrLineNameUser2 = $stUser->rowCount();
                $stUser = $newUser->verifyMail();
                $nbrLineMailRegister = $stUser->rowCount();
            }
            if ($nbrLineNameUser2 > 0) {
                $errors['nomDoublon'] = "Erreur doublon nom";
                echo "<script>alert(\"PHP -> Ce nom existe déjà.\")</script>";

            } else if ($nbrLineMailRegister > 0) {
                $errors['mail'] = "Le mail entrer existe déjà";
                echo "<script>alert(\"PHP -> Erreur de saisie dans votre nom ou votre mot de passe !\")</script>";
                print "Le mail entrer existe déjà";
                var_dump($errors);
            }
        }
    }
/*--------------------------CREATION DE L UTILISATEUR AINSI QUE SON JSON------------------------------------------*/

    if (empty($errors)) {
        $newUser->createUser();
        //JSON data user
        session_start();
/*
        $_SESSION['nom'] =  $_POST['nom'];
        $userArray = array(
            "user0" => array(
                "nom" => "$nom",
                "prenom" => "$prenom",
                "mail" => "$mail",s
            )
        );
        $pathOfFile = "../json/newUser.json";
        $jsonArray = json_encode($userArray, JSON_UNESCAPED_UNICODE);
        $data = file_put_contents($pathOfFile, $jsonArray);
*/
        header("Location: ../views/indexUser.php");
    }
}
?>