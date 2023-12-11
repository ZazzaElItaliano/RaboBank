<?php
include("conexion.php");
session_start();
$estado = $_POST['estado'];
$estado2=$_POST['estado'];
$id_cuenta = $_POST['idCuenta'];

if ($estado == 'denegado') {
    $cambiarEstado = "UPDATE prestamos SET estado='$estado' WHERE id_cuenta='$id_cuenta' AND estado <> 'aceptado'";
    $ejecutarEstado = mysqli_query($conexion, $cambiarEstado);

    if ($ejecutarEstado) {
        echo '
            <script>
            alert("La solicitud se ha denegado satisfactoriamente");
           
            </script>';
    } else {
        echo "Error al denegar la solicitud de préstamo: " . mysqli_error($conexion);
    }
} elseif ($estado2 == 'aceptado') {
    // Aquí puedes realizar las actualizaciones adicionales si es necesario
    
    $cantMensu = $_POST['cantidadMensual'];
    $plazo = $_POST['plazo'];

    $actPrestamo = "UPDATE prestamos SET estado='$estado',  mensualidad='$cantMensu', plazo='$plazo' WHERE id_cuenta='$id_cuenta' AND estado <> 'denegado'";
    $ejecutarConsulta = mysqli_query($conexion, $actPrestamo);
    

    if ($ejecutarConsulta) {
        echo '
            <script>
            alert("La solicitud se ha aceptado satisfactoriamente");
            
            </script>';
    } else {
        echo "Error al aceptar la solicitud de préstamo: " . mysqli_error($conexion);
    }
}
?>
