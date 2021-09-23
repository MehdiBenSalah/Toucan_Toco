<html>  

    <head>
        <meta charset="utf-8">
            <!-- importer le fichier de style -->
            <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        </head>
        
    <body>
        <div id="container">

        <form action="verif_inscri.php" method="POST">
            <h1>Inscription</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

               
                <label><b>Vue</b></label>
                <select name="view" id="view">
                <option value="">--Choisir une vue--</option>
                <option value="ANKYI">ANKYI</option>
                <option value="CCAAW">CCAAW</option>
                <option value="CIMBB">CIMBB</option>
                <option value="CUQAM">CUQAM</option>
                <option value="DNQDD">DNQDD</option>
                <option value="FBUMG">FBUMG</option>

                <option value="GJJHK">GJJHK</option>
                <option value="GOKXL">GOKXL</option>
                <option value="GOOBU">GOOBU</option>
                <option value="IDGFP">IDGFP</option>
                <option value="KFZMY">KFZMY</option>
                <option value="KZKKE">KZKKE</option>
                <option value="LAYPA">LAYPA</option>
                <option value="OJOBU">OJOBU</option>
                <option value="QOQTS">QOQTS</option>
                <option value="UAGPU">UAGPU</option>
                <option value="UKPGS">UKPGS</option>
                <option value="UUUQX">UUUQX</option>
                <option value="VHDHF">VHDHF</option>
                <option value="VKWQH">VKWQH</option>
                <option value="VVTVA">VVTVA</option>
                <option value="ZMNYA">ZMNYA</option>
                <option value="ZOWMK">ZOWMK</option>
                </select>

                <input type="submit" id='submit' value='INSCRIPTION' >

                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1)
                        echo "<p style='color:red'>Veuillez remplir le formulaire</p>";
                    if($err==2)
                        echo "<p style='color:red'>Utilisateur existant</p>";
                }
                ?>
        </form>
        <p>Vous avez déjà un compte ? <a href="login.php">Connectez vous ici</a></p>
        </div>
    </body>

</html>