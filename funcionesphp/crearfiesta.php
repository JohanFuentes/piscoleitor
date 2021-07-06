<?php
session_start();

require '../vendor/autoload.php';
use MongoDB\Client;

$client = new Client('mongodb://localhost:27017');
$fiesta = $client->piscoleitor->fiestas;

date_default_timezone_set('America/Santiago');
$fecha = date('d-m-Y');

if(isset($_POST["mensaje"]) && $_POST["mensaje"] != ""){

$insertOneresult = $fiesta->insertOne([
	'nombre'=> $_POST["nombre"],
	'fecha' => $fecha,
        'limitep'=> $_POST["limitep"],
	'limitev'=> $_POST["limitev"],
	'mensaje'=> $_POST["mensaje"],
	'estado' => true,
	'correocreador'=> $_SESSION["user"]["correo"]

]);

}else{

$insertOneresult = $fiesta->insertOne([
	'nombre'=> $_POST["nombre"],
	'fecha' => $fecha,
        'limitep'=> $_POST["limitep"],
	'limitev'=> $_POST["limitev"],
	'estado' => true,
	'correocreador'=> $_SESSION["user"]["correo"]

]);
}

$_SESSION["fiesta"] = Array("id"=> $insertOneresult->getInsertedId(),"nombre"=> $_POST["nombre"], "limitep" => $_POST["limitep"], "limitev" => $_POST["limitev"], "correocreador" => $_SESSION["user"]["correo"],"estado" => true);

//ingreso datos a relacion fiesta - usuario

$relacion = $client->piscoleitor->relacion;

$insert = $relacion->insertOne([
        'idfiesta'=> $insertOneresult->getInsertedId(),
        'correopersona' => $_SESSION["user"]["correo"],
        'piscopor'=> 50,
        'cocapor'=> 50,
        'limitev' => null,
        'vasosconsumidos'=> 0
]);

$_SESSION["relacion"] = Array("id"=>$insert->getInsertedId(),"idfiesta"=>$insertOneresult->getInsertedId() ,"correopersona"=> $_SESSION["user"]["correo"], "piscopor" => 50, "cocapor" => 50, "limitev" => null, "vasosconsumidos" => 0);

header("Location:../fiestas/crearFiesta/homefiesta.php");


?>

