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
    <script src="https://code.jquery.com/jquery-1.6.2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <li><a class="dropdown-item" href="misdatos.php">Mis datos</a></li>
                    <li><a class="dropdown-item" href="miscodigos.php">Mis codigos</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="../funcionesphp/logout.php">Sing out</a></li>
                    <li><a class="dropdown-item" style="display:none;" href="#">Salir de la fiesta</a></li>
                    <li><a class="dropdown-item" style="display:none;" href="#">Terminar la fiesta</a></li>
                  </ul>
                </li>
            </ul>

          </div>
        </div>
      </nav>
</header>    

<!--
<div style="margin-top:2%;">
<center><h1 class="display-4">Mis datos</h1></center>
</div>

<div id="div_home" style="margin:5%;">

<div style="margin-top:2%; margin-bottom:2%;">
<label for="formFile" class="form-label">Nombre</label>
<input class="form-control" type="text" placeholder="nombre" aria-label="Disabled input example" id="input1" disabled>
</div>

<div style="margin-top:2%; margin-bottom:2%;">
<label for="formFile" class="form-label">Contrase??a</label>
<input class="form-control" type="password" placeholder="contrase??a" aria-label="Disabled input example" id="input2" disabled>
</div>

</div>

       <center>
        <button style="display: block; margin: 3%;" type="button" class="btn btn-primary btn-lg botones_home" id="si">Modificar datos</button>
       <button style="display: none; margin: 3%;" type="button" class="btn btn-success btn-lg botones_home" id="no">Guardar datos</button>

	</center>
-->

<center>

<div style="margin-top:2%;">
<center><h1 class="display-4">Mis datos</h1></center>
</div>

<div id="div_home" style="margin:5%;">

<!-- <form action="../../funcionesphp/configurarfiesta.php" method="POST"> -->

<div style="margin-top:2%; margin-bottom:2%;">
<h2>Nombre: <?php echo $_SESSION["user"]["nombre"];?></h2>
<!-- <input class="form-control" type="number" aria-label="Disabled input example" id="input1" name="limitep" value="" disabled> -->
</div>

<div style="margin-top:2%; margin-bottom:2%;">
<h2>Clave: <?php echo $_SESSION["user"]["clave"];?></h2>
<!-- <input class="form-control" type="number" value="" name="limitev" aria-label="Disabled input example" id="input2" disabled> -->
</div>

</div>

</center>

<div id="formulario" style="display: none;">

<form action="../funcionesphp/misdatos.php" method="POST">

<div class="row mb-3">
      <center><label for="exampleFormControlInput1" class="form-label">Nombre</label></center>

      <center><div class="col-sm-10 contain__inputs">
        <input type="text" class="form-control inputs__form" name="nombre" id="codigo">
      </div></center>

      </div>

      <div class="row mb-3">
        <center><label for="exampleFormControlInput1" class="form-label">Clave</label></center>

        <center><div class="col-sm-10 contain__inputs">
          <input type="text" class="form-control inputs__form" name="clave" id="codigo">
        </div></center>

        </div>
<center>
 <button type="submit" class="btn btn-success btn-lg botones_home" id="no">Guardar datos</button>
</center>

</form>


</div>

<center><div class="containerCheck" style="margin-bottom: 2vh; margin-top: 2vh;">
          <input type="checkbox" name="check" id="check2" value="1" onchange="javascript:showContent('formulario','check2')" />
          <b>Modificar datos</b>
</div></center>

<!--
<script src="../scripts/enable.js"></script>
-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>


<?php

}else{

        header("Location:../index.php");

}

?>

