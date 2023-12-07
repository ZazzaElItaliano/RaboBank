<?php 
session_start();
include("conexion.php");
$dni = $_SESSION['dni']; 

// Obtener el ID de la cuenta asociada al usuario
$obtenerID = "SELECT id_cuenta FROM cuenta WHERE dni='$dni'";
$sacarID = mysqli_query($conexion, $obtenerID);
$idObtenido = mysqli_fetch_assoc($sacarID);
$almacenarId = $idObtenido['id_cuenta'];

// Consulta para obtener los movimientos asociados a la cuenta del usuario
$consultaMovimientos = "SELECT * FROM movimiento WHERE id_cuenta = $almacenarId";
$resultadoMovimientos = mysqli_query($conexion, $consultaMovimientos);

// Mostrar los movimientos
while ($movimiento = mysqli_fetch_assoc($resultadoMovimientos)) {
    echo "Concepto: " . $movimiento['concepto'] . "<br>";
    echo "Cantidad: " . $movimiento['cantidad'] . "<br>";
    echo "Fecha: " . $movimiento['fecha'] . "<br>";
    echo "Hora: " . $movimiento['hora'] . "<br>";
    echo "-----------------------------<br>";
}

?>
