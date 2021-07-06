<?php

session_start();

if(isset($_SESSION["user"]) && isset($_SESSION["fiesta"])){

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
    <script type="text/javascript" src="../../scripts/showinputs.js"></script>
    <title>Document</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="../../home.php">Piscoleitor</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">

            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            </ul>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <div class="container">
                        <a class="navbar-brand" href="homefiesta.php">
                          Home <img src="https://image000.flaticon.com/png/512/1297/1297859.png" alt="" width="30" height="24">
                        </a>
                      </div>
                </li>             

                <li class="nav-item">
                    <div class="container">
                        <a class="navbar-brand" href="../../mas.php">
                          Ingresar o crear fiesta <img src="https://image000.flaticon.com/png/512/1665/1665731.png" alt="" width="30" height="24">
                        </a>
                      </div>
                </li>

                <li class="nav-item dropdown container">
                    
                  <a class="dropdown-toggle navbar-brand" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Usuario <img src="https://image000.flaticon.com/png/512/2550/2550425.png" alt="" width="30" height="24">
                  </a>
                
		  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <li><a class="dropdown-item" href="../../usuario/misdatos.php">Mis datos</a></li>
                    <li><a class="dropdown-item" href="../../usuario/miscodigos.php">Mis codigos</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="../../funcionesphp/logout.php">Sing out</a></li>
                    <li><a class="dropdown-item"  href="../../funcionesphp/logoutfiesta.php">Salir de la fiesta</a></li>
                    <li><a class="dropdown-item"  href="../../funcionesphp/terminarfiesta.php">Terminar la fiesta</a></li>
                  </ul>
                </li>
            </ul>

          </div>
        </div>
      </nav>
</header>    

<div id="div_home">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
	<center><h1 class="display-4"><?php echo $_SESSION["fiesta"]["nombre"];?></h1></center>


<form action="../../funcionesphp/relacion.php" method="POST">

        <center>

          <div id="nombre" class="row mb-3" style="margin: 5%;">
                <center><label for="exampleFormControlInput1" class="form-label">Porcentaje pisco</label></center>
                
                <center><div class="col-sm-10 contain__inputs">

		<label style="font-size: 40px;" id="valuno" for="uno" ><?php echo($_SESSION["relacion"]["piscopor"]."%"); ?></label>
                  <input id="uno" name="piscopor" type="range" min="0" max="100" value="<?php echo($_SESSION["relacion"]["piscopor"]."%"); ?>" step="10">
                  
                </div></center>
                
          </div>


          <div id="nombre" class="row mb-3" style="margin: 5%;">
            <center><label for="exampleFormControlInput1" class="form-label">Porcentaje coca cola</label></center>
            
            <center><div class="col-sm-10 contain__inputs">

              <label style="font-size: 40px;" id="valdos" for="dos" ><?php echo($_SESSION["relacion"]["cocapor"]."%"); ?></label>
              <input id="dos" name="cocapor" type="range" min="0" max="100" value="<?php echo($_SESSION["relacion"]["cocapor"]."%"); ?>" step="10">

            </div></center>
            
          </div>

       
          <div id="limite" class="row mb-3" style="display: none; margin: 5%;">
            <center><label for="exampleFormControlInput1" class="form-label">Ingresar limite de vasos</label></center>
            
            <center><div class="col-sm-10 contain__inputs">
              <input style="width: min-content;" name="limitev" type="number" class="form-control inputs__form" id="codigo" value="<?php echo($_SESSION["relacion"]["limitev"]); ?>">
            </div></center>
            
            </div>

<?php if(isset($_SESSION["relacion"]["limitev"])){ ?>    


<center><h4>limite de vasos: <?php echo($_SESSION["relacion"]["limitev"]); ?></h4></center>

            <center><div class="containerCheck" style="margin: 2%;">
              <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent('limite','check')" />
              <b>Cambiar limite de vasos</b>
            </div></center>

<?php }else{ ?>

	<center><div class="containerCheck" style="margin: 2%;">
              <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent('limite','check')" />
              <b>Ingresar limite de vasos</b>
            </div></center>



<?php } ?>

<center><button style="display: block; margin: 5%; " type="submit" class="btn btn-primary btn-lg botones_home">Guardar datos</button></center>


</center>

</form>


<center>

            <a style="text-decoration: none;" href="configuracionfiesta.php"><button style="display: block; margin: 5%; " type="button" class="btn btn-primary btn-lg botones_home">Configuracion de la fiesta</button></a>

        </center>
      </div>
    </div>
</div>

    <script src="../../scripts/ranges.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>

<?php

}else if(isset($_SESSION["user"])){

	header("Location: ../../home.php");

}else{
        header("Location:../../index.php");

}

?>
