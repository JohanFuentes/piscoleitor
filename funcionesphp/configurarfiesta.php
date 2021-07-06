<?php
session_start();

require '../vendor/autoload.php';
use MongoDB\Client;

$client = new Client('mongodb://localhost:27017');
$fiesta = $client->piscoleitor->fiestas;

$updateResult = $fiesta->updateOne(['nombre'=>$_SESSION["fiesta"]["nombre"]],['$set'=>['limitep'=> $_POST["limitep"],'limitev'=> $_POST["limitev"]]]);

$_SESSION["fiesta"]["limitep"] = $_POST["limitep"];
$_SESSION["fiesta"]["limitev"] = $_POST["limitev"];

header("Location:../fiestas/crearFiesta/configuracionfiesta.php");

?>

