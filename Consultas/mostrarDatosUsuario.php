<?php 

include("conexion.php");
$dni = $_SESSION['dni']; 

$consulta = "SELECT * FROM usuario WHERE dni='$dni'";
$ejecutar=mysqli_query($conexion,$consulta);
while ($columna = mysqli_fetch_array( $ejecutar )){
    $nombre=$columna['nombre'];
    $apellido=$columna['apellido'];
    $email=$columna['email'];
    $dni=$columna['dni'];
    $fechaNac=$columna['fecha_nac'];
    $direccion=$columna['direccion'];
    $provincia=$columna['provincia'];
    $pais=$columna['pais'];
    $ciudad=$columna['ciudad'];
    $cp=$columna['codigo_postal'];

}






?>