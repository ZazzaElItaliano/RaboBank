<?php 

session_start();
include("conexion.php");
$dni = $_SESSION['dni']; 

$obtenerID="SELECT id_cuenta FROM cuenta WHERE dni='$dni'";
$sacarID=mysqli_query($conexion,$obtenerID);
$idObtenido=mysqli_fetch_assoc($sacarID);
$almacenarId=$idObtenido['id_cuenta'];

$consultaMovimientos = "SELECT * FROM movimiento WHERE id_cuenta = $almacenarId";
$resultadoMovimientos = mysqli_query($conexion, $consultaMovimientos);












?>