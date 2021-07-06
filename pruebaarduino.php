<?php session_start(); ?>
<center>
<h2>Usuario: <?php echo($_SESSION["relacion"]["correopersona"]); ?></h2>
<h2>Id de fiesta: <?php echo($_SESSION["relacion"]["idfiesta"]); ?></h2>
<h2>Nombre de fiesta: <?php echo($_SESSION["fiesta"]["nombre"]); ?></h2>
<h2>Vasos consumidos: <?php echo($_SESSION["relacion"]["vasosconsumidos"]); ?></h2>
</center>

<center>
<a style="text-decoration: none;" href="funcionesphp/funcionarduino.php"><button style="display: block; margin: 5%; " type="button" class="btn btn-primary btn-lg botones_home">Agregar un vaso</button></a>
</center>

