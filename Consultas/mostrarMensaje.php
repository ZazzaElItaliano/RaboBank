<?php 
session_start();
include("conexion.php");
$dni = $_SESSION['dni'];
$mostrarMensaje="SELECT mensaje FROM chat where dni='$dni'";
$ejecucion1=mysqli_query($conexion,$mostrarMensaje);



?>