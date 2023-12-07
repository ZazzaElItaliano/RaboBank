<?php 

session_start();
include("conexion.php");


$dni=$_POST['dni'];
$contrasena=$_POST['contrasena'];



if($dni=="111111111Q" && $contrasena=="admin"){
    $_SESSION['dni']=$dni;
    header("location:../paginaAdmin.php");
    exit;
}else{
    echo '
    <script>
    alert("Acceso denegado, llama a un administrador para consultar datos");
    window.location="../loginAdmin.php"
    </script>';

    exit;
}






?>