<?php 

include("conexion.php");


if (!isset($_SESSION['dni'])) {

    header("location:../login.php");
    exit;
}

$dni = $_SESSION['dni']; 

$consulta = "SELECT iban FROM cuenta WHERE dni='$dni'";
$ejecucion = mysqli_query($conexion, $consulta);

if ($fila = mysqli_fetch_assoc($ejecucion)) {
    $iban = $fila['iban'];

   
    echo "$iban";
} else {
   
    echo "¡Hola! Bienvenido a nuestro sitio.";
}
?>