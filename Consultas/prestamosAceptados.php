<?php 

session_start();
include("conexion.php");
$dni = $_SESSION['dni']; 


$obtenerID="SELECT id_cuenta FROM cuenta WHERE dni='$dni'";
$sacarID=mysqli_query($conexion,$obtenerID);
$idObtenido=mysqli_fetch_assoc($sacarID);
$almacenarId=$idObtenido['id_cuenta'];


$prestamos = "SELECT id_prestamo, concepto, cantidad, cantidad_pagar, mensualidad, plazo FROM prestamos WHERE id_cuenta='$almacenarId' AND estado='aceptado'";
$prestamoConsulta=mysqli_query($conexion,$prestamos);





?>