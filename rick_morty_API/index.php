<!DOCTYPE html>
<html lang="pt-BR">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script defer src="./script.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <!--Buscador[1]-->
    <!-- <div class="group">
        <input type="text" placeholder="'Rick Sanchez'/'1,2,3...'" id="buscador">
        <button onclick="procurarRick()">Buscar</button>
        <div id="resultadoRick"></div>
    </div> -->
    <!--[/1]-->
    <!--CARD[2]-->
    <div class="container my-5">
        <h1 class="text-center mb-4">RICK AND  MORTY</h1>
        <div class="group">
        <input type="text" placeholder="'Rick Sanchez'/'1,2,3...'" id="buscador">
        <button onclick="procurarRick()">Buscar</button>
        <div id="resultadoRick"></div>
        </div>
        <div id="rick-container" class="row row-cols-2 row-cols-sm-4 row-cols-md-3 ">
        </div>
    </div>
    <!-- <button id="botaoAbrir">abrir</button> -->
    <!--[/2]-->    
<?php

$dsn = 'mysql:dbname=db_rick_morty_api';
$usuario = 'root';
$senha = '';

$conn = new PDO($dsn,$usuario,$senha);

var_dump($dsn,$usuario,$senha);
?>


</body>
</html>