<?php 
session_start();
include("conexion.php");
$dni = $_SESSION['dni']; 

$cantidad=$_POST['cantidadRetiro'];

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
