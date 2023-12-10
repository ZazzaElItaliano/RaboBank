<?php 
session_start();
include("conexion.php");
$dni = $_SESSION['dni']; 

$obtenerID="SELECT id_cuenta FROM cuenta WHERE dni='$dni'";
$sacarID=mysqli_query($conexion,$obtenerID);
$idObtenido=mysqli_fetch_assoc($sacarID);
$almacenarId=$idObtenido['id_cuenta'];


$consultaPres = "SELECT estado, concepto, cantidad, plazo, fecha_creacion  FROM prestamos WHERE id_cuenta='$almacenarId' ORDER BY fecha_creacion DESC";
$ejecutarConsulta=mysqli_query($conexion,$consultaPres);













?>