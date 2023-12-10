<?php 
session_start();
include("conexion.php");
$dni = $_SESSION['dni']; 

$cantidadPedida=$_POST["cantidad"];
$asunto=$_POST["asunto"];
$cantidadFormat=floatval($cantidadPedida);



$obtenerID="SELECT id_cuenta FROM cuenta WHERE dni='$dni'";
$sacarID=mysqli_query($conexion,$obtenerID);
$idObtenido=mysqli_fetch_assoc($sacarID);
$almacenarId=$idObtenido['id_cuenta'];

$consultaSaldo="SELECT saldo FROM cuenta WHERE dni='$dni'";
$ejecutar=mysqli_query($conexion, $consultaSaldo);
$guardar=mysqli_fetch_assoc($ejecutar);
$saldoUsuario=$guardar['saldo'];


$consultaFecha="SELECT fecha_nac FROM usuario WHERE dni='$dni'";
$fecha=mysqli_query($conexion,$consultaFecha);
$fechaObtenida=mysqli_fetch_assoc($fecha);
$almacenarFecha=$fechaObtenida['fecha_nac'];



function calcularEdad($almacenarFecha)
{
    // Crear objetos DateTime para la fecha de nacimiento y la fecha actual
    $fechaNacimientoObj = new DateTime($almacenarFecha);
    $fechaActualObj = new DateTime();

    // Calcular la diferencia entre las fechas
    $diferencia = $fechaNacimientoObj->diff($fechaActualObj);

    // Obtener la edad en años
    $edad = $diferencia->y;

    return $edad;
}
$fechaActual = date('Y-m-d');
$edad=calcularEdad($almacenarFecha);

//sABER SI TIENE EL 15% DE LO Q PIDE EN CUENTA

$porcentajeSaldo= $cantidadFormat*0.15;

//Comprobar si tiene algun prestamo pendiente 

$consultaPrestamosPendientes = "SELECT COUNT(*) as cantidad FROM prestamos WHERE id_cuenta='$almacenarId' AND estado='pendiente'";
$resultadoPrestamosPendientes = mysqli_query($conexion, $consultaPrestamosPendientes);
$arrayPrestamosPendientes = mysqli_fetch_assoc($resultadoPrestamosPendientes);
$prestamosPendientes = $arrayPrestamosPendientes['cantidad'];

if($edad>18 && $saldoUsuario>=$porcentajeSaldo && $prestamosPendientes==0){


        $estadoDefecto="pendiente";    
        $insertarSolicitud="INSERT INTO prestamos (estado,concepto,cantidad,fecha_creacion, id_cuenta) VALUES ('$estadoDefecto','$asunto','$cantidadPedida','$fechaActual','$almacenarId')";
        $ejecutarSolicitud=mysqli_query($conexion,$insertarSolicitud);
        if ($ejecutarSolicitud) {
            echo '
            <script>
            alert("La solicitud se ha enviado satisfactoriamente");
            window.location="../pedirPrestamo.php"
            </script>';
        } else {
            echo "Error al registrar la solicitud de préstamo: " . mysqli_error($conexion);
        }
}else {
    echo '
    <script>
    alert("Lo sentimos no reuenes todos los requisitos para solicitar un prestamo ");
    window.location="../pedirPrestamo.php"
    </script>';
}















?>