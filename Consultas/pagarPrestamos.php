<?php
session_start();
include("conexion.php");
$dni = $_SESSION['dni'];

$id = $_POST['identificadorPrestamo'];
$cantidad = $_POST['cantidadDevolver'];

$cantPagar = "SELECT cantidad_pagar FROM prestamos WHERE id_prestamo='$id'";
$consulta = mysqli_query($conexion, $cantPagar);
$arrayCant = mysqli_fetch_assoc($consulta);
$cantFinal = $arrayCant['cantidad_pagar'];

if ($cantidad > $cantFinal) {
    echo '<script> 
        alert("No puedes pagar más de lo que debes");
        window.location="../pagarPrestamos.php";
        </script>';
} else {
    $cantFinalAct = (float)$cantFinal - (float)$cantidad;
    $actPrestamo = "UPDATE prestamos SET cantidad_pagar='$cantFinalAct' WHERE id_prestamo='$id'";
    $consultoria = mysqli_query($conexion, $actPrestamo);

    if ($cantFinalAct <= 0) {
      
        $eliminarPrestamo = "DELETE FROM prestamos WHERE id_prestamo='$id'";
        $consultaEliminar = mysqli_query($conexion, $eliminarPrestamo);

        if ($consultaEliminar) {
    
            $obtenerSaldo = "SELECT saldo FROM cuenta WHERE dni='$dni'";
            $consultaSaldo = mysqli_query($conexion, $obtenerSaldo);
            $arraySaldo = mysqli_fetch_assoc($consultaSaldo);
            $saldoActual = $arraySaldo['saldo'];

            $nuevoSaldo = $saldoActual - (float)$cantidad;

            $actualizarSaldo = "UPDATE cuenta SET saldo='$nuevoSaldo' WHERE dni='$dni'";
            $consultaActualizarSaldo = mysqli_query($conexion, $actualizarSaldo);

            if ($consultaActualizarSaldo) {
                echo '<script> 
                    alert("El préstamo se ha pagado satisfactoriamente y se ha eliminado. Saldo actualizado.");
                    window.location="../pagarPrestamos.php";
                    </script>';
            } else {
                echo "Error al actualizar el saldo: " . mysqli_error($conexion);
            }
        } else {
            echo "Error al eliminar el préstamo: " . mysqli_error($conexion);
        }
    } else {
        echo '<script> 
            alert("El préstamo se ha pagado satisfactoriamente");
            window.location="../pagarPrestamos.php";
            </script>';
    }
}
?>
