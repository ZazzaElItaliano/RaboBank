<?php 

include("conexion.php");


if (!isset($_SESSION['dni'])) {
    header("location:../login.php");
    exit;
}

$dni = $_SESSION['dni']; 

$consulta = "SELECT nombre FROM usuario WHERE dni='$dni'";
$ejecucion = mysqli_query($conexion, $consulta);

if ($fila = mysqli_fetch_assoc($ejecucion)) {
    $nombreUsuario = $fila['nombre'];
    $nombreMayus=strtoupper($nombreUsuario);
    
    echo " $nombreMayus";
} else {
    
    echo "Usuario no encontrado";
}
?>