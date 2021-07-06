<?php
session_start();

require '../vendor/autoload.php';
use MongoDB\Client;

$client = new Client('mongodb://localhost:27017');
$usuario = $client->piscoleitor->usuarios;

$updateResult = $usuario->updateOne(['correo'=>$_SESSION["user"]["correo"]],['$set'=>['nombre'=> $_POST["nombre"],'clave'=> $_POST["clave"]]]);

$_SESSION["user"]["nombre"] = $_POST["nombre"];
$_SESSION["user"]["clave"] = $_POST["clave"];

header("Location:../usuario/misdatos.php");

?>

