<?php
session_start();

require 'vendor/autoload.php';
use MongoDB\Client;

$client = new Client('mongodb://localhost:27017');
$fiesta = $client->casino->fiesta;

$insertOneresult = $fiesta->insertOne([
        'codigo'=> $_POST["codigo"],
        'nom_fiesta'=>$_POST["nom_fiesta"],
        'invitados'=>$_POST["invitados"],
        'mensaje'=>$_POST["mensaje"],
        'fecha'=>$_POST["fecha"],
        'id'=>$_POST["id"]
        
]);



?>