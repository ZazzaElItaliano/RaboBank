<?php
session_start();
include("conexion.php");

$dni = $_SESSION['dni'];

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$fechaNac = $_POST["fechaNac"];
$direccion = $_POST["direccion"];
$cp = $_POST["cp"];
$ciudad = $_POST["ciudad"];
$provincia = $_POST["provincia"];
$pais = $_POST["pais"];


if ($_FILES["imagen"]["error"] === UPLOAD_ERR_OK) {
    // Asegúrate de que el tipo de archivo es una imagen
    $allowedTypes = array("image/jpeg", "image/png", "image/gif");
    $tipoImagen = $_FILES["imagen"]["type"];
    
    if (in_array($tipoImagen, $allowedTypes)) {
        // Genera un nombre único para la imagen
        $nombreImagen = uniqid("imagen_") . "_" . $_FILES["imagen"]["name"];

        // Define la carpeta donde se almacenarán las imágenes
        $carpetaImagenes = "../fotos/";

        // Mueve la imagen al directorio deseado
        move_uploaded_file($_FILES["imagen"]["tmp_name"], $carpetaImagenes . $nombreImagen);

        // Actualiza la base de datos con el nombre de la imagen
        $consultaImagen = "UPDATE usuario SET foto='$nombreImagen' WHERE dni='$dni'";
        mysqli_query($conexion, $consultaImagen);
    } else {
        echo "Error: Solo se permiten archivos de tipo imagen (JPEG, PNG, GIF).";
    }
}


$consultaDatos = "UPDATE usuario SET 
    nombre='$nombre',
    apellido='$apellido',
    fecha_nac='$fechaNac',
    direccion='$direccion',
    codigo_postal='$cp',
    ciudad='$ciudad',
    provincia='$provincia',
    pais='$pais'
    WHERE dni='$dni'";

if (mysqli_query($conexion, $consultaDatos)) {
    echo '
    <script>
    alert("Datos actualizados correctamente");
    window.location="../perfil.php"
    </script>';

} else {
    echo "Error al actualizar los datos: " . mysqli_error($conexion);
}
?>
