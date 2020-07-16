<?php
session_start();

$_SESSION['IP'] = $_SERVER['REMOTE_ADDR'];

$fichier = fopen('..\logs.txt', 'a');

$text = "[".$_SESSION['IP']."]: outils/index.php"."\r\n";

fwrite($fichier, $text);

fclose($fichier);
?>
<!DOCTYPE html>
<html lang="fr" id="htmlprincip">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Salut, je suis lycéen et ma passion c'est de créer des sites internet. Gatien Oudoire. Se Connecter. Lycée. Nancy. Loritz">
    <meta name="theme-color" content="black">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo-siteweb-256.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="apple-touch-icon" href="img/logo-siteweb-256.png">
    <link rel="apple-touch-startup-image" href="img/logo-siteweb.png" />
    <title>Gatien Oudoire - Outils</title>
</head>

<body>
    <?php include('../header.php'); ?>

    <div id="liste">
        <div v-for="item in info.data">
            <br><a :href="item.url">{{ item.name }}</a><br>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>



        <script>
            var app = new Vue({
			el: "#liste",data () {return {info:null}},
			mounted () {axios
					.get('data.json')
					.then(response => (this.info = response))}	})
        </script>
    </div>

</body>