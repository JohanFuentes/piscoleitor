<?php
session_start();

require '../vendor/autoload.php';


if(isset($_SESSION["user"]) && isset($_SESSION["fiesta"]) && isset($_SESSION["relacion"])){

$bulk = new MongoDB\Driver\BulkWrite;

$vasos = $_SESSION["relacion"]["vasosconsumidos"]+1;

$bulk->update(
    ['_id' => new MongoDB\BSON\ObjectID($_SESSION["relacion"]["id"])],
    ['$set' => ['vasosconsumidos' => $vasos]]
);

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$result = $manager->executeBulkWrite('piscoleitor.relacion', $bulk);

}

$_SESSION["relacion"]["vasosconsumidos"]+=1;

header("Location: ../pruebaarduino.php");

?>
