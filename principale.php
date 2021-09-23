<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        
        
    </head>
    <body style='background:#fff;' >
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
         <!--   ?php
                session_start();
                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message : echo "Bonjour $user, vous êtes connecté";
                    
                }
            ? -->
            
            <?php
            session_start();
            $username = $_SESSION['username'];
            $db = new PDO('mysql:host=localhost;port=3307;dbname=loginsystem','root','root');
            $requete = "SELECT * FROM user where mail = '$username'";
            $result = $db->query($requete);
            //$result->execute();
            $donnee=$result->fetch();
            $token=$donnee['token'];
            $view=$donnee['view'];
            $db=null;
            ?>
           

            <script id="myScript"></script>
            <h1>
                
            <script type="text/javascript">
                var url="https://predictik.toucantoco.com/scripts/embedLauncher.js?id=61a12a85-698c-4191-9eb8-2453ec877889&token=";
                //var url="https://predictik.toucantoco.com/scripts/embedLauncher.js?id=357d34d5-5367-480b-82ca-54f564585160&token=" ;
                var user_token='<?php echo $token;?>';
                var const_view="&view=";
                var user_view='<?php echo $view;?>';
                document.getElementById('myScript').src = url+user_token+const_view+user_view;
            </script>
            </h1>

           
        </div>
    </body>
</html>