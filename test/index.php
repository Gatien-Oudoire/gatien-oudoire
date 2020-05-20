<?php
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
$reponse = $bdd->query('SELECT * FROM jeux_video');
while ($donnees = $reponse->fetch()){
    echo '<p>', $donnees['nom'], '</p>';
}
?>