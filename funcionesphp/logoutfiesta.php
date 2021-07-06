<?php

SESSION_START();
unset($_SESSION["fiesta"]);
unset($_SESSION["relacion"]);
header("location:../home.php");

?>
