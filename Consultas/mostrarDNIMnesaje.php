<?php 

include("conexion.php");

$mensajesAdmin="SELECT DISTINCT dni FROM chat";
$ejecutarConsulta=mysqli_query($conexion,$mensajesAdmin);






?>