<?php 

include("conexion.php");

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['dni'])) {
    // Redirige a la página de login si no ha iniciado sesión
    header("location:../login.php");
    exit;
}

$dni = $_SESSION['dni']; // Obtiene el DNI desde la sesión

$consulta = "SELECT iban FROM cuenta WHERE dni='$dni'";
$ejecucion = mysqli_query($conexion, $consulta);

if ($fila = mysqli_fetch_assoc($ejecucion)) {
    $iban = $fila['iban'];

    // Puedes utilizar $nombreUsuario para tu saludo personalizado
    echo "$iban";
} else {
    // Manejar el caso en que no se encuentre el usuario
    echo "¡Hola! Bienvenido a nuestro sitio.";
}
?>