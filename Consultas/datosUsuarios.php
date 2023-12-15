<?php 
include("conexion.php");


$consulta = "SELECT * FROM usuario";
$resultado2 = mysqli_query($conexion, $consulta) or die("Algo ha ido mal en la consulta a la base de datos");

$consulta = "SELECT * FROM cuenta";
$resultado3= mysqli_query($conexion, $consulta) or die("Algo ha ido mal en la consulta a la base de datos");

$consulta = "SELECT * FROM movimiento";
$resultado4= mysqli_query($conexion, $consulta) or die("Algo ha ido mal en la consulta a la base de datos");



?>