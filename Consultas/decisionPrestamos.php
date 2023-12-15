<?php
include("conexion.php");
session_start();
$estado = $_POST['estado'];
$id_cuenta = $_POST['idCuenta'];

$obtenerSaldo = "SELECT saldo from cuenta where id_cuenta='$id_cuenta'";
$saldito = mysqli_query($conexion, $obtenerSaldo);
$array1 = mysqli_fetch_assoc($saldito);
$mostrarSaldo = $array1['saldo'];

$obtenerCant = "SELECT cantidad from prestamos where id_cuenta='$id_cuenta'";
$cantidad = mysqli_query($conexion, $obtenerCant);
$array2 = mysqli_fetch_assoc($cantidad);
$prestamoCantidad = $array2['cantidad'];

if ($estado == 'denegado') {
    $cambiarEstado = "UPDATE prestamos SET estado='$estado' WHERE id_cuenta='$id_cuenta' AND estado <> 'aceptado'";
    $ejecutarEstado = mysqli_query($conexion, $cambiarEstado);

    if ($ejecutarEstado) {
       
        echo '
            <script>
            alert("La solicitud se ha denegado satisfactoriamente");
            window.location="../prestamosAdmin.php"
            </script>';
    } else {
        echo "Error al denegar la solicitud de préstamo: " . mysqli_error($conexion);
    }
} elseif ($estado == 'aceptado') {
   
    
    $cantMensu = $_POST['cantidadMensual'];
    $plazo = $_POST['plazo'];


    $nuevoSaldo = $mostrarSaldo + $prestamoCantidad;

    
    $actualizarSaldo = "UPDATE cuenta SET saldo='$nuevoSaldo' WHERE id_cuenta='$id_cuenta'";
    $ejecutarActualizarSaldo = mysqli_query($conexion, $actualizarSaldo);

  
    $actPrestamo = "UPDATE prestamos SET estado='$estado', mensualidad='$cantMensu', plazo='$plazo' WHERE id_cuenta='$id_cuenta' AND estado <> 'denegado'";
    $ejecutarConsulta = mysqli_query($conexion, $actPrestamo);

    if ($ejecutarConsulta && $ejecutarActualizarSaldo) {
      
        echo '
        <script>
        alert("La solicitud se ha aceptado satisfactoriamente");
        window.location="../prestamosAdmin.php"
        </script>';
    } else {
        echo "Error al aceptar la solicitud de préstamo: " . mysqli_error($conexion);
    }
}
?>
