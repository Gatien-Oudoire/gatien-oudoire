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
    <title>Gatien Oudoire - Accueil</title>
</head>
<?php
$lien = "https://www.instagram.com/" . $_GET['pseudo'] . "/?__a=1";
?>

<body>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>


    <div id="app">
        <img :src="info.data.graphql.user.profile_pic_url_hd">
    </div>

    <script>
        var app = new Vue({
            el: "#app",
            data() {
                return {
                    info: null
                }
            },
            mounted() {
                axios
                    .get('<?php echo $lien; ?>')
                    .then(response => (this.info = response))
            }
        })
    </script>
</body>