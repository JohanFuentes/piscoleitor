<?php
session_start();

require '../vendor/autoload.php';
use MongoDB\Client;

$client = new Client('mongodb://localhost:27017');
$usuario = $client->piscoleitor->usuarios;
$usr = $usuario->find(array(correo=>$_POST["correo"],clave=>$_POST["clave"]));
$login = false;
$nombre = "";

foreach($usr as $u){

        $nombre=$u['nombre'];
	$login=true;

}
if($login){

$_SESSION["user"] = Array("nombre"=> $nombre, "correo" => $_POST["correo"], "clave" => $_POST["clave"]);

header("Location: ../home.php");
}else{
header("Location: ../index.php");

}


?>
