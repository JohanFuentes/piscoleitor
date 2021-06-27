<?php
require 'vendor/autoload.php';

use MongoDB\Client;

$client = new Client('mongodb://localhost:27017');
$collection = $client->prueba->usuarios;

$cursor = $collection->find();

foreach ($cursor as $usuario) {
   var_dump($usuario);
};

?>

