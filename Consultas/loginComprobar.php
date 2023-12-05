<?php 

session_start();
include("conexion.php");


$dni=$_POST['dni'];
$contrasena=$_POST['contrasena'];
$contrasena=hash('sha512', $contrasena); 

$consultaAcceso="SELECT * FROM usuario WHERE dni='$dni' AND contrasena='$contrasena'";
$validarAcesso=mysqli_query($conexion,$consultaAcceso);


if(mysqli_num_rows($validarAcesso)>0){
    $_SESSION['dni']=$dni;
    header("location:../home.php");
    exit;

}else{
    echo '
    <script>
    alert("Acceso denegado, por favor revisa tus datos");
    window.location="../login.php"
    </script>';

    exit;
}




?>