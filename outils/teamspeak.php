<?php
$urlToken = 'https://mtxserv.com/oauth/v2/token?';

$query = array(
    'grant_type'    => 'https://mtxserv.com/grants/api_key',
    'client_id'     => '865_5ahr7kt8w7400s0og8gcss4c4ks4cksosw04sggg488w8oocsk',
    'client_secret' => '24mxvjepxyhw44g0wwg0gs8wc0owwwk8sgocsoscsssw480ks',
    'api_key'       => 'vYnmP1SgUQINvKxkAPakbLYAbzr9tP8Y79Wr0agp3CbtbtuEx'
);

$response = file_get_contents($urlToken . http_build_query($query));

$output = json_decode($response);

$urlAPIvalide = "'https://mtxserv.com/api/v1/viewers/teamspeak?ip=teamspeak5.mtxserv.fr&port=10002&access_token=" . $output->{'access_token'} . "'";

?>


<html>

<head>
    <title>Gatien Oudoire - TS</title>
    <meta charset="utf-8">
    <meta name="theme-color" content="black">
    <meta name="description" content="Informations sur le serveur teamspeak">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/logo-siteweb-256.png">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>
    <style>
        .teamspeak-box {
            left: 350px;
            right: 350px;
            background-color: black;
            position: absolute;
        }

        .sous-categorie{
            font-family: Varela;
            color: white;
            font-size: 16px;
        }
    </style>
    <?php include('../header.php'); ?>

    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
    <div id="info_serveur">
        <div class="teamspeak-box">
            <br>
            <h2 class="sous-categorie">Nom du serveur: </h2><p>{{ info.data.name}}</p><br>
            <h2 class="sous-categorie">Adresse IP du serveur: </h2><a href="teamspeak5.mtxserv.fr:10002">{{ info.data.ip }}:{{ info.data.port }}</a><br><br>
            <h2 class="sous-categorie">Personnne(s) connectée(s) :</h2><p>{{ info.data.current_clients }}/{{ info.data.max_clients }} </p>
            <br>
        </div>
    </div>
    <script>
        var app = new Vue({
            el: "#info_serveur",
            data() {
                return {
                    info: null
                }
            },
            mounted() {
                axios
                    .get(<?php echo $urlAPIvalide; ?>)
                    .then(response => (this.info = response))
            }
        })
    </script>
</body>

</html>