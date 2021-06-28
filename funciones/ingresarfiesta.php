<?php
session_start();

require 'vendor/autoload.php';
use MongoDB\Client;

$client = new Client('mongodb://localhost:27017');
$fiesta = $client->casino->fiesta;


$insertOneresult = $fiesta->insertOne([
        'codigo'=> $_POST["codigo"]
        
]);
$codigo=false;
if($codigo){

  $_SESSION["codigo"] = Array("codigo"=> $_POST["codigo"] );
  
  header("Location:/");
  }else{
  header("Location:/ingreso.php");
  
  }


?>

