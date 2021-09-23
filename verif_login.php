<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = new PDO('mysql:host=localhost;port=3307;dbname=loginsystem','root','root');

    if($username !== "" && $password !== "")
    {
        $requete = "SELECT * FROM user where mail = '$username' and password = '$password' ";
        $result = $db->prepare($requete);
        $result->execute();
        if($result->rowcount()>0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: principale.php');
        }
        else
        {   
            header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
$db=null; // fermer la connexion
?>