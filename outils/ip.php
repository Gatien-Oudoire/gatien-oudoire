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
    <title>Gatien Oudoire - Voir mon IP</title>
</head>

<body>
    <?php include('../header.php'); ?>
    <div id="app">
        <p>Votre adresse IP est :</p><br>
        <?php
        echo $_SERVER['REMOTE_ADDR'];
        ?>
    </div>
</body>

</html>