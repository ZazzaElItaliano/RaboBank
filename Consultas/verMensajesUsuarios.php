<?php
include("conexion.php");    
session_start();

$dni = $_POST['dniUsuario'];

$consulta = "SELECT mensaje from chat where dni='$dni'";
$ejecutar = mysqli_query($conexion, $consulta);

$mensajes=array();

while ($array=mysqli_fetch_assoc($ejecutar)) {
   array_push($mensajes,$array['mensaje']);
}



?>
