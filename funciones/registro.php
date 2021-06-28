<?php
session_start();

require 'vendor/autoload.php';
use MongoDB\Client;

$client = new Client('mongodb://localhost:27017');
$usuario = $client->casino->usuario;

$insertOneresult = $usuario->insertOne([
        'name'=> $_POST["nombre"],
        'email'=> $_POST["email"],
        'pass'=> $_POST["pass"]
]);


header("Location:/ingreso.php");


?>