<?php

/*
session_start();

require '../vendor/autoload.php';
use MongoDB\Client;

$client = new Client('mongodb://localhost:27017');
$fiesta = $client->piscoleitor->fiestas;

//$id = new MongoDB\BSON\ObjectID($_SESSION["fiesta"]["id"]);

$updateResult = $fiesta->updateOne(['_id'=>$_SESSION["fiesta"]["id"],['$set'=>['estado'=> false ]]);

//$_SESSION["fiesta"]["estado"] = false;

 // header("Location:logoutfiesta.php");
 */

/*
session_start();
$DB_CONNECTION_STRING="mongodb://localhost:27017";
  require '../vendor/autoload.php';
  $manager = new MongoDB\Driver\Manager( $DB_CONNECTION_STRING );

  $filter = ['_id' => new MongoDB\BSON\ObjectID($_SESSION["fiesta"]["id"])];
  $options = ['estado'=>false];

  $login = false;
  $query = new MongoDB\Driver\Query($filter, $options);
  $docs = $manager->executeQuery('piscoleitor.fiestas', $query);

  foreach($docs as $doc){
  	print_r($doc);
  }
 */
session_start();
require '../vendor/autoload.php';

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->update(
    ['_id' => new MongoDB\BSON\ObjectID($_SESSION["fiesta"]["id"])],
    ['$set' => ['estado' => false]]
);

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$result = $manager->executeBulkWrite('piscoleitor.fiestas', $bulk);

$_SESSION["fiesta"]["estado"] = false;

 header("Location:logoutfiesta.php");

?>

