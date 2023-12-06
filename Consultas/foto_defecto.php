<?php 
include("conexion.php");
$dni = $_SESSION['dni']; 


$consulta = "SELECT * FROM usuario WHERE dni='$dni'";
$ejecutar=mysqli_query($conexion,$consulta);
if(mysqli_num_rows($ejecutar)>0){
    $array=mysqli_fetch_assoc($ejecutar);
}
if($array['foto']==''){
    echo '<img src="fotos/foto_defecto.png" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">';

}else{

    echo '<img src="fotos/' . $array['foto'] . '" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">';


}


?>