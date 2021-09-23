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
            echo ("
            <script type='text/javascript'> 
            const jwt = require('jsonwebtoken');
            var mysql = require('mysql');
            
            var usertest='testtest';
            var passtest='test1';
            var viewtest='test';
            
            if (usertest!=='' && passtest!==''){
            
            
            
            const fakeUser = {
                username: usertest,
                roles: ['USER'],    
                privileges: {
                    'test':['view']
                },
                groups:[],
            };
            
            
            var createtoken=jwt.sign(fakeUser,'UwmcoMtXgRaYs8Sstz831j-J_GgJif848BoK-5PZfGA',{algorithm:'HS256'});
            
            
            
            
            var con = mysql.createConnection({
              host: 'localhost',
              port: 3307,
              user: 'root',
              password: 'root',
              database: 'loginsystem'
            });
            
            con.connect(function(err) {
              if (err) throw err;
              console.log('Connected!');
                    con.query('SELECT * FROM user where mail = ?',usertest, function (err, result, fields) {
                        if (err) throw err;
                        console.log(result.length);
                        if(result.length==0){
                            var sql = 'INSERT INTO user (mail, password,token, view) VALUES (?,?,?,?)';
                            con.query(sql,[usertest,passtest,createtoken,viewtest], function (err, result) {
                                if (err) throw err;
                              
                               
                                con.destroy();
                                });
                        } else {
                            
                            con.destroy();
                        }
                            
                
            });
            });
            }</script>");
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


