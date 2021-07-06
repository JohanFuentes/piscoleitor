<?php

session_start();

require '../vendor/autoload.php';

$bulk = new MongoDB\Driver\BulkWrite;

if(isset($_POST["limitev"]) && $_POST["limitev"]!=""){

$bulk->update(
    ['_id' => new MongoDB\BSON\ObjectID($_SESSION["relacion"]["id"])],
    ['$set' => ['piscopor' => $_POST["piscopor"], 'cocapor' => $_POST["cocapor"], 'limitev' => $_POST["limitev"]]]
);

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$result = $manager->executeBulkWrite('piscoleitor.relacion', $bulk);

$_SESSION["relacion"]["piscopor"] = $_POST["piscopor"];
$_SESSION["relacion"]["cocapor"] = $_POST["cocapor"];
$_SESSION["relacion"]["limitev"] = $_POST["limitev"];

}else{

$bulk->update(
    ['_id' => new MongoDB\BSON\ObjectID($_SESSION["relacion"]["id"])],
    ['$set' => ['piscopor' => $_POST["piscopor"], 'cocapor' => $_POST["cocapor"]]]
);

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$result = $manager->executeBulkWrite('piscoleitor.relacion', $bulk);

$_SESSION["relacion"]["piscopor"] = $_POST["piscopor"];
$_SESSION["relacion"]["cocapor"] = $_POST["cocapor"];

}

header("Location:../fiestas/ingresarFiesta/homefiesta.php");

?>

