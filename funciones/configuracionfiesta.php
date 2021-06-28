<?php
session_start();

require 'vendor/autoload.php';
use MongoDB\Client;

$client = new Client('mongodb://localhost:27017');
$fiesta = $client->casino->fiesta;

$insertOneresult = $fiesta->insertOne([
        'limitePersonas'=> $_POST["limite1"],
        'limiteVasos'=> $_POST["limite2"]
        
]);





?>