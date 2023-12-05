<?php
include("conexion.php");

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$dni=$_POST["dni"];
$email=$_POST["email"];
$fechaNac=$_POST["fechaNac"];
$direccion=$_POST["direccion"];
$cp=$_POST["cp"];
$telefono=$_POST["telefono"];
$ciudad=$_POST["ciudad"];
$provincia=$_POST["provincia"];
$pais=$_POST["pais"];
$contrasena=$_POST["contrasena"];

$meterdatos= "INSERT INTO usuario"


?>