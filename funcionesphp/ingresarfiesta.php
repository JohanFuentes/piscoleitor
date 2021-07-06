<?php
/*
session_start();
require '../vendor/autoload.php';
use MongoDB\Client;


//$id = new MongoId('60e27e066b134e7d326c52e2');
$id = new MongoDB\BSON\ObjectID('60e27e066b134e7d326c52e2');

$client = new Client('mongodb://localhost:27017');
$fiesta = $client->piscoleitor->fiestas;
$fst = $fiesta->findOne([_id => $id]);
$login = false;
$limitep = "";

foreach($fst as $f){

	//$limitep = $f['limitep'];
        $nombre = $f['nombre'];
        $limitep = $f['limitep'];
        $limitev = $f['limitev'];
        $fecha = $f['fecha'];
	$estado = $f['estado']; 
        $login = true;

}

echo($id);

if($login){

$_SESSION["fiesta"] = Array("nombre"=> $nombre, "limitep" => $limitep, "limitev" => $limitev, "fecha" => $fecha, "estado" => $estado);

header("Location: ../fiestas/ingresarFiesta/homefiesta.php");
}else{
header("Location: ../fiestas/ingresarfiesta.php");

}*/

if(strlen($_POST["id"])==24){

session_start();
$DB_CONNECTION_STRING="mongodb://localhost:27017";
  require '../vendor/autoload.php';
  $manager = new MongoDB\Driver\Manager( $DB_CONNECTION_STRING );

  $filter = ['_id' => new MongoDB\BSON\ObjectID($_POST["id"])];
  $options = [];

  $login = false;
  $query = new MongoDB\Driver\Query($filter, $options);
  $docs = $manager->executeQuery('piscoleitor.fiestas', $query);

  foreach ($docs as $doc) {
	  $id = $doc->_id; 
	  $nombre = $doc->nombre;
	  $fecha=$doc->fecha;
	  $limitep=$doc->limitep;
	  $limitev=$doc->limitev;
	  $estado=$doc->estado;
	  $correocreador = $doc->correocreador;
	  $login = true;
  //or you can: echo "$doc->item  $row->qty  $row->status<br />";
  }

if($login && $estado){

$_SESSION["fiesta"] = Array("id"=>$id ,"nombre"=> $nombre, "limitep" => $limitep, "limitev" => $limitev, "fecha" => $fecha, "estado" => $estado, "correocreador" => $correocreador);



// ingresar datos si no estan ingresados en relacion


  $filtro = ['idfiesta' => new MongoDB\BSON\ObjectID($_POST["id"]),'correopersona'=>$_SESSION["user"]["correo"]];
  $opciones = [];

  $login2 = false;
  $query2 = new MongoDB\Driver\Query($filtro, $opciones);
  $docs2 = $manager->executeQuery('piscoleitor.relacion', $query2);

  foreach ($docs2 as $doc) {
	  $id = $doc->_id;
	  $idfiesta = $doc->idfiesta;
	  $correopersona = $doc->correopersona;
	  $piscopor = $doc->piscopor;
	  $cocapor = $doc->cocapor;
	  $limitev = $doc->limitev;
	  $vasosconsumidos = $doc->vasosconsumidos;
          $login2 = true;
  //or you can: echo "$doc->item  $row->qty  $row->status<br />";
  }



if($login2==false){

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

}else{

$_SESSION["relacion"] = Array("id"=>$id,"idfiesta"=>$idfiesta,"correopersona"=>$correopersona , "piscopor" => $piscopor, "cocapor" => $cocapor, "limitev" => $limitev, "vasosconsumidos" => $vasosconsumidos);

}



header("Location: ../fiestas/ingresarFiesta/homefiesta.php");
}else{
header("Location: ../fiestas/ingresarfiesta.php");

}
}else{
header("Location: ../fiestas/ingresarfiesta.php");
}

?>

