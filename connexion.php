<?php
//ev = éventuel
$ev_utilisateur =  $_POST['usernameEntree'];
$ev_mdp = $_POST['passwordEntree'];
$erreur = "";
$essais = 0;
if(!empty($ev_utilisateur)){

$bdd = new PDO('mysql:host=localhost;dbname=connect', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$requete = $bdd->prepare('SELECT username, mdp FROM principal WHERE username = :clientLogin AND mdp = :clientMdp');

$requete->execute(array(
    'clientLogin' => $ev_utilisateur,
    'clientMdp' => $ev_mdp
));

$user_test = $requete->fetch();

echo $user_test['mdp'];

if($ev_mdp == $user_test['mdp'] && $ev_utilisateur == $user_test['username']){
    $erreur = "Connexion réussie";
    infos_erreur($erreur, $essais);
}
else {
    $erreur = "Identifiants incorrects";
    $essais++;
    infos_erreur($erreur, $essais);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Gatien Oudoire - Connexion</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href="css/connexion.css">
        <link rel="icon" href="img\logo-siteweb.png">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    </head>

    <body>

        <nav>
            <br>
            <div class="logo">
                <h1>Gatien Oudoire - Connexion</h1>
            </div>
            <br>
        </nav>

        <br>
        <br>
        <br>
        <br>
        <br>

        <main>
            <form action="" method="post">
                <div class="div-connexion">
                    <br>
                    <label>Nom d'utilisateur :</label>
                    <br>
                    <br>
                    <input type="text" class="text-entree" name="usernameEntree" id="usernameEntree" placeholder="Entrez votre nom">
                    <br>
                    <br>
                    <label>Mot de passe :</label>
                    <br>
                    <br>
                    <input type="password" class="text-entree" name="passwordEntree" id="password" placeholder="Entrez votre mot de passe">
                    <br>
                    <br>
                    <input type="submit" class="boutton-connexion" name="valider" value="Valider">
                    <br>
                    <br>
                    <p><?php 
                            function infos_erreur($erreur, $essais){
                            echo $erreur; 
                            if($essais != 0){
                                echo "Il vous reste", $essais;
                                } 
                            ?>
                            }
                            </p>
                </div>
            </form>
        </main>

        <footer id="footer">
            <br>
            <center>
                <p class="bas">Nous utilisons des cookies uniquement pour sauvergarder vos informations de connexion</p>
            </center>
            <center>
                <input type="button" value="Accepter" onclick="validerCookie()">
            </center>
            <br>
        </footer>
        <script src="js/design-connexion.js"></script>
    </body>
</html>