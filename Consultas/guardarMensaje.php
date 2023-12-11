<?php 
session_start();
include("conexion.php");
$dni = $_SESSION['dni'];

$mensaje=$_POST['mensaje'];


$guardarMensaje = "INSERT INTO chat (mensaje, dni) VALUES ('$mensaje', '$dni')";
$ejecucion=mysqli_query($conexion,$guardarMensaje);

$mostrarMensaje="SELECT mensaje FROM chat where dni='$dni'";
$ejecucion1=mysqli_query($conexion,$mostrarMensaje);






?>