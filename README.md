# Toucan_Toco </br>
Ceci est un exemple d'application multitenant en utilisant toucan toco </br>
login.php : fenetre principale pour se connecter </br>
inscription.php : fenetre pour s'inscrire </br>
verif_inscri.php : vérification des données saisies lors de l'inscription </br>
verif_login.php : si l'utilisateur a saisie correctement le mail et le mot de passe, il sera redirigé vers principale.php </br>
principale.php : script toucan toco </br>
token.js : création d'un token </br></br>
Ps : test_php+js.php est un fichier test similaire à inscription.php, sauf que lors de l'inscription, au lieu de seulement ajouter le mail, mot de passe et le view à la base de donnée, il rajoutera de plus le token qui devra être créer par js </br>
Ce code ne marche pas car il n'y a pas de liaison entre php et js
