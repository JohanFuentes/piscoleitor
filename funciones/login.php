<?php
session_start();
require 'vendor/autoload.php';
use MongoDB\Client;

$client = new Client('mongodb://localhost:27017');
$usuario = $client->casino->usuario;
$usr = $usuario->find(array(email=>$_POST["email"],pass=>$_POST["pass"]));
$login = false;
$name = "";
foreach($usr as $u){
//      echo $u['username']."<br>";
        $name=$u['name'];
        $pass=$u['pass'];
        $login=true;
}
if($login){

$_SESSION["user"] = Array("name"=> $name, "email" => $_POST["email"],"pass"=> $_POST["pass"] );

header("Location:/");
}else{
header("Location:/ingreso.php");

}




?>