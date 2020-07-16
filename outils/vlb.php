<html>

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
    <title>Gatien Oudoire - VLB</title>
</head>

<body>
    <?php include('../header.php');
    if ($_GET['v']) {
        $format = explode(".", $_GET['v']);
        if ($format[0] == "youtube" || $format[1] == "youtube"){
            $idVideo = explode("=", end($format));
            echo '<div class="lecteurVideo"><iframe width="600" height="400" src="https://www.youtube-nocookie.com/embed/'.$idVideo[1].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
        }else {
            echo '<div class="lecteurVideo"><video controls width="600" height="400"><source src="' . $_GET["v"] . '" type="video/'.end($format).'"></video></div><span id="play_pause"></span>';
        }
    } else {
        echo "<form id='app' action=''><label class='titre'>Lecteur Vidéo - VLB</label><br><br><label>Entrez le lien de la vidéo : </label><input name='v' type='url'><input class='jsp' type='submit'></form>";    }
    ?>
</body>

</html>


