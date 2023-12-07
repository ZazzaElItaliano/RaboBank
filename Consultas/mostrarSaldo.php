<?php
session_start();
include("conexion.php");
$dni = $_SESSION['dni']; 



$consultaSaldo="SELECT saldo FROM cuenta WHERE dni='$dni'";
$ejecutar=mysqli_query($conexion, $consultaSaldo);
$guardar=mysqli_fetch_assoc($ejecutar);
$saldoUsuario=$guardar['saldo'];




?>