<?php 
function DniExiste($dni, $conexion) {
 
    $consultaExistencia = "SELECT COUNT(*) as count FROM usuario WHERE dni = '$dni'";
    $resultadoConsulta = mysqli_query($conexion, $consultaExistencia);
    $fila = mysqli_fetch_assoc($resultadoConsulta);
    $contador = $fila['count'];

    return $contador > 0;
}

function avisoDni($dni, $conexion){
    if(DniExiste($dni, $conexion)){
        echo "Dni ya existente escoja otro";
    }
}

$dniComprobado=avisoDni($dni, $conexion);

?>