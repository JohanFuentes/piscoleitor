<?php

session_start();

require '../vendor/autoload.php';
use MongoDB\Client;

$client = new Client('mongodb://localhost:27017');
$fiesta = $client->piscoleitor->fiestas;
$fst = $fiesta->find(array(correocreador => $_SESSION["user"]["correo"]));

/*
foreach($fst as $f){

	echo($f["_id"]);
	echo(" - ");
        

}
 */







if(isset($_SESSION["user"])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../scripts/copiarCodigo.js"></script>
    <title>Document</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="../home.php">Piscoleitor</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">

            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            </ul>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <div class="container">
                        <a class="navbar-brand" href="../home.php">
                          Home <img src="https://image000.flaticon.com/png/512/1297/1297859.png" alt="" width="30" height="24">
                        </a>
                      </div>
                </li>             

                <li class="nav-item">
                    <div class="container">
                        <a class="navbar-brand" href="../mas.php">
                          Ingresar o crear fiesta <img src="https://image000.flaticon.com/png/512/1665/1665731.png" alt="" width="30" height="24">
                        </a>
                      </div>
                </li>

                <li class="nav-item dropdown container">
                    
                  <a class="dropdown-toggle navbar-brand" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Usuario <img src="https://image000.flaticon.com/png/512/2550/2550425.png" alt="" width="30" height="24">
                  </a>
                
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="misdatos.php">Mis datos</a></li>
                    <li><a class="dropdown-item" href="miscodigos.php">Mis codigos</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="../funcionesphp/singout.php">Sing out</a></li>
                    <li><a class="dropdown-item" style="display:none;" href="#">Salir de la fiesta</a></li>
                    <li><a class="dropdown-item" style="display:none;" href="#">Terminar la fiesta</a></li>
                  </ul>
                </li>
            </ul>

          </div>
        </div>
      </nav>
</header>    

<center><h1 class="display-4">Lista de codigos</h1></center>


<div style="margin:5%;">

	<div class="table-responsive">
	  <table class="table">
    	
 	 <thead>
    	<tr>
	<th scope="col">Codigo</th>
	<th scope="col">Nombre</th>
      	<th scope="col">Fecha de creación</th>
      	<th scope="col">Estado</th>
      	<th scope="col">Copiar codigo</th>
    	</tr>
  	</thead>
	<tbody>

<?php $i=1;   foreach($fst as $f){ ?>

    	<tr>
	<th scope="row" id="<?php echo($i);?>"><?php echo($f["_id"]); ?></th>
	<td><?php echo($f["nombre"]); ?></td>
      	<td><?php echo($f["fecha"]); ?></td>
      	<td><?php if($f["estado"]==1){echo("activo");}else{echo("inactivo");} ?></td>
	<td>
	<button onclick="copiarAlPortapapeles('<?php echo($i);?>')" style="border:none; background-color:white;">
                  <img src="https://w7.pngwing.com/pngs/863/167/png-transparent-computer-icons-symbol-copying-cut-copy-and-paste-symbol-miscellaneous-angle-text.png" alt="" width="30" height="24">              
 		</button>
	</td>
	</tr>


<?php $i=$i+1; } ?>
    	
  	</tbody>
  	  </table>
	</div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>

<?php

}else{

        header("Location:../index.php");

}

?>
