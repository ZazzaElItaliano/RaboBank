<?php 

include("conexion.php");


$mostrarPrestamos="SELECT estado,concepto,cantidad, id_cuenta FROM prestamos";
$sacarPrestamos=mysqli_query($conexion,$mostrarPrestamos);

















?>