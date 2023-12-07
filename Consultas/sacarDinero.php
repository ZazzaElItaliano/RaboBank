<?php 
session_start();
include("conexion.php");
$dni = $_SESSION['dni']; 

$cantidad=$_POST['cantidadRetiro'];
$cantidadFormat=floatval($cantidad);


$consultaSaldo="SELECT saldo FROM cuenta WHERE dni='$dni'";
$ejecutar=mysqli_query($conexion, $consultaSaldo);
$guardar=mysqli_fetch_assoc($ejecutar);
$saldoUsuario=$guardar['saldo'];

if((float)$cantidad>(float)$saldoUsuario){
    echo '<script>
        alert("No puedes sacar mas dinero del que tienes en cuenta, deja de ser pobre");
        window.location="../cajeroAutomatico.php"
        </script>';
    
}else{
    $saldoFinal=(float)$saldoUsuario-(float)$cantidad;
    $actSaldo="UPDATE cuenta SET saldo='$saldoFinal' WHERE dni='$dni'";
    $ejecutar2=mysqli_query($conexion, $actSaldo);
}



$obtenerID="SELECT id_cuenta FROM cuenta WHERE dni='$dni'";
$sacarID=mysqli_query($conexion,$obtenerID);
$idObtenido=mysqli_fetch_assoc($sacarID);
$almacenarId=$idObtenido['id_cuenta'];


$fechaActual = date('Y-m-d');
$horaActual = date('H:i:s');

$actMovimientos = "INSERT INTO movimiento (concepto, cantidad, fecha, hora, id_cuenta) VALUES ('$asunto', '$cantidadFormat', '$fechaActual', '$horaActual', '$almacenarId')";
$ejecutarMov=mysqli_query($conexion,$actMovimientos);


if ($ejecutarMov) {
    echo '<script>alert("Movimiento almacenado correctamente");</script>';
} else {
    echo "Error al almacenar el movimiento: " . mysqli_error($conexion);
}





if (!$ejecutar2) {
    die('Error en la actualización del saldo: ' . mysqli_error($conexion));
}

if ($ejecutar2) {
    echo '<script>
        alert("Saldo retirado, gracias por confiar en BancoRabo");
        window.location="../cajeroAutomatico.php"
        </script>';
    exit();
}
