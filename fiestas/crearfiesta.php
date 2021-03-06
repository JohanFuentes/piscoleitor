<?php

session_start();

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="../scripts/showinputs.js"></script>
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
                    <li><a class="dropdown-item" href="../usuario/misdatos.php">Mis datos</a></li>
                    <li><a class="dropdown-item" href="../usuario/miscodigos.php">Mis codigos</a></li>
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


<div style="margin-left: 10vw; margin-right: 10vw; margin-top: 10vh; margin-bottom: 10vh;">
    <div class="form__inputs2" id="formulario">
    <form id="formAjax" action="../funcionesphp/crearfiesta.php" method="POST">

      <center><h1 style="margin-bottom: 15vh;">Crear fiesta<h1></center>

    <div id="nombre" class="row mb-3">
          <center><label for="exampleFormControlInput1" class="form-label">Nombre de la fiesta </label></center>
          
          <center><div class="col-sm-10 contain__inputs">
            <input type="text" class="form-control inputs__form" name="nombre" id="codigo" placeholder="">
          </div></center>
          
    </div>


    <div id="limite" class="row mb-3">
    <center><label for="exampleFormControlInput1" class="form-label">Limite de personas (2 - 100)</label></center>
    
    <center><div class="col-sm-10 contain__inputs">
      <input type="number" class="form-control inputs__form" name="limitep" id="codigo" placeholder="">
    </div></center>
    
    </div>

    <div id="limite" class="row mb-3">
    	<center><label for="exampleFormControlInput1" class="form-label">Limite de vasos (1 - 100)</label></center>
    
   	 <center><div class="col-sm-10 contain__inputs">
      	<input type="number" class="form-control inputs__form" name="limitev" id="codigo" placeholder="">
    	</div></center>
    
    </div>


    <div id="mensaje" class="row mb-3" style="display:none;">
      <center><label for="exampleFormControlInput1" class="form-label">Mensaje (opcional)</label></center>
      
      <center><div class="col-sm-10 contain__inputs">
        <textarea class="form-control" id="exampleFormControlTextarea1" name="mensaje" rows="3"></textarea>
      </div></center>
      
      </div>

   <!--   <div id="programar" class="row mb-3" style="display: none;">
        <center><label for="exampleFormControlInput1" class="form-label">Programar (opcional)</label></center>
        
        <center><div class="col-sm-10 contain__inputs">
          <input type="date" class="form-control inputs__form" id="codigo" placeholder=" 1 - 30.000.000 ">
        </div></center>
        
        </div> -->


        <center><div class="containerCheck" style="margin-bottom: 2vh;">
          <input type="checkbox" name="check" id="check2" value="1" onchange="javascript:showContent('mensaje','check2')" />
          <b>Escribir mensaje</b>
        </div></center>

       <!-- <center><div class="containerCheck" style="margin-bottom: 2vh;">
          <input type="checkbox" name="check" id="check3" value="1" onchange="javascript:showContent('programar','check3')" />
          <b>Programar una fecha</b>
        </div></center> -->

    
    <center><button style="display: block; margin: 5%; " type="submit" class="btn btn-primary btn-lg botones_home">Crear fiesta</button></center>
    <center><strong id="error" style="color:red;" class="blink_me"></strong></center>
    </form>
    </div>
    </div>
            </center>
          </div>
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
