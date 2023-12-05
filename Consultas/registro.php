<?php
include("conexion.php");

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$dni=$_POST["dni"];
$email=$_POST["email"];
$fechaNac=$_POST["fechaNac"];
$direccion=$_POST["direccion"];
$cp=$_POST["cp"];
$telefono=$_POST["telefono"];
$ciudad=$_POST["ciudad"];
$provincia=$_POST["provincia"];
$pais=$_POST["pais"];
$contrasena=$_POST["contrasena"];

function calcularIban($nombre){

    $nombreMinus=strtolower($nombre);
    $longitudNombre=strlen($nombreMinus);
    $abecedario="abcdefghijklmnñopqrstuvwxyz";
    $iban="";
    
    if($longitudNombre>=4){
    
        for($i=0;$i<4; $i++){
    
        $posicionAlfa=strpos($abecedario, $nombreMinus[$i]);    
        $iban.=decbin($posicionAlfa);
        
        }
    
    }elseif($longitudNombre<4){
        $nombreConvertido=str_pad($nombreMinus, 4, 'z');
        for($i=0;$i<4; $i++){
            
            $posicionAlfa=strpos($abecedario, $nombreConvertido[$i]);    
            $iban.=decbin($posicionAlfa);
        } 
    }
   return $iban;   

    }

  function ibanExiste($iban, $conexion) {
        // Verificar si el IBAN ya existe en la base de datos
        $consultaExistencia = "SELECT COUNT(*) as count FROM usuario WHERE iban = '$iban'";
        $resultadoConsulta = mysqli_query($conexion, $consultaExistencia);
        $fila = mysqli_fetch_assoc($resultadoConsulta);
        $contador = $fila['count'];
    
        return $contador > 0;
    }





    function IbanUnico($nombre, $conexion) {
        $iban = calcularIban($nombre);
    
        while (ibanExiste($iban, $conexion)) {
            $iban = incrementarIban($iban);
        }
    
        return $iban;
    }
    
  



    function incrementarIban($iban) {
    
        return $iban . '1'.'0';
    }

$iban2=IbanUnico($nombre, $conexion);

$meterdatos= "INSERT INTO usuario (nombre,apellido,email,dni,fecha_nac,direccion,provincia,pais,ciudad,codigo_postal,iban,contrasena,telefono) VALUES ('$nombre','$apellido','$email','$dni','$fechaNac','$direccion','$provincia','$pais','$ciudad','$cp','$iban2','$contrasena','$telefono')";
$resultado = mysqli_query( $conexion, $meterdatos ) or die ( "Algo ha ido mal en la consulta a la base de datos");

echo   

        '<script>
        alert("Usuario registrado con exito");
        window.location="../login.php"
        </script>'

?>