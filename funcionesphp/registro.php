<?php
session_start();

require '../vendor/autoload.php';
use MongoDB\Client;

$client = new Client('mongodb://localhost:27017');
$usuario = $client->piscoleitor->usuarios;

$insertOneresult = $usuario->insertOne([
        'nombre'=> $_POST["nombre"],
        'correo'=> $_POST["correo"],
        'clave'=> $_POST["clave"]
]);


header("Location:../index.php");


?>

