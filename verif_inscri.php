<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['view'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $view = $_POST['view'];

    $db = new PDO('mysql:host=localhost;port=3307;dbname=loginsystem','root','root');

    if($username !== "" && $password !== "" && $view !==""){
        $requete = "SELECT * FROM user where mail = '$username' ";
        $result = $db->prepare($requete);
        $result->execute();
        if($result->rowcount()==0) {
            $requete = "INSERT INTO user (mail, password, view) VALUES ( '$username', '$password', '$view')";
            $result = $db->prepare($requete);
            $result->execute();
            header('Location: login.php');
        }
        else {
        header('Location: inscription.php?erreur=2');
        }

        
    }
    else{
        header('Location: inscription.php?erreur=1');
    }

}



$db=null; // fermer la connexion
?>


