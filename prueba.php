<?php

date_default_timezone_set('America/Santiago');
echo(date('d-m-Y'));

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
    <script src="https://code.jquery.com/jquery-1.6.2.min.js"></script>
    <title>Document</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Piscoleitor</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">

            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            </ul>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <div class="container">
                        <a class="navbar-brand" href="home.html">
                          <img src="https://image000.flaticon.com/png/512/1297/1297859.png" alt="" width="30" height="24">
                        </a>
                      </div>
                </li>             

                <li class="nav-item">
                    <div class="container">
                        <a class="navbar-brand" href="mas.html">
                          <img src="https://image000.flaticon.com/png/512/1665/1665731.png" alt="" width="30" height="24">
                        </a>
                      </div>
                </li>

                <li class="nav-item dropdown container">
                    
                  <a class="dropdown-toggle navbar-brand" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://image000.flaticon.com/png/512/2550/2550425.png" alt="" width="30" height="24">
                  </a>
                
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Mis datos</a></li>
                    <li><a class="dropdown-item" href="#">Mis codigos</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sing out</a></li>
		    <li><a class="dropdown-item" style="display:none;" href="#">Salir de la fiesta</a></li>
                    <li><a class="dropdown-item" style="display:none;" href="#">Terminar la fiesta</a></li>
                  </ul>
                </li>
            </ul>

          </div>
        </div>
      </nav>
</header>


<img src="https://johan.fuentes.grafana.net/goto/FYwGifz7k?orgId=1">


<form>
  <p>
    ??Interesado en recibir email?
  </p>

  <p>
    <input type="text" placeholder="Escribe tu email" id="email" disabled>
</p>
</form>


  <p>
  <button id="si">habilitar</button>
  <button id="no">desabilitar</button>
  </p>



<script>

$(document).ready(function() { 
	
	$("#si").click(function(){ 
		$("#email").prop("disabled", false); 
		}); 
		
	$("#no").click(function(){ 
		$("#email").prop("disabled", true); 
		}); 
}); 

</script>




<h2>Habilitar y deshabilitar input usando JQuery</h2> 

<form id="formulario-input-ejemplo"> 

Ingresa tu nombre: <input type="text" id="nombre" disabled> 

</form> 

<button id="btnDeshabilitar" >Deshabilitar input</button> 
<button id="btnHabilitar" >Habilitar input</button> 

<!--<script src="https://code.jquery.com/jquery-1.6.2.min.js"></script> -->
<script> 

$(document).ready(function() { 
	
	$("#btnHabilitar").click(function(){ 
		$("#nombre").prop("disabled", false); 
		}); 
		
	$("#btnDeshabilitar").click(function(){ 
		$("#nombre").prop("disabled", true); 
		}); 
}); 

</script> 



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>
