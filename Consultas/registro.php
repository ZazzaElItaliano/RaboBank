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
$contrasena_encriptada=hash('sha512',$contrasena);

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
        $consultaExistencia = "SELECT COUNT(*) as count FROM cuenta WHERE iban = '$iban'";
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

//Correo no se repita
$compruebaCorreo="SELECT * FROM usuario WHERE email='$email'";
$consultaCorreo = mysqli_query($conexion, $compruebaCorreo) or die("Error al insertar cuenta: " . mysqli_error($conexion));

if(mysqli_num_rows($consultaCorreo)>0){
    echo '<script>
        alert("Corre electronico existente, seleccione otro");
        window.location="../registros.php"
        </script>';
    exit();
}

//DNI no se repita
$compruebaDNI="SELECT * FROM usuario WHERE dni='$dni'";
$consultaDNI = mysqli_query($conexion, $compruebaDNI) or die("Error al insertar cuenta: " . mysqli_error($conexion));

if(mysqli_num_rows($consultaDNI)>0){
    echo '<script>
        alert("DNI existente, por favor ingrese su propio DNI");
        window.location="../registros.php"
        </script>';
    exit();
}

//Telefono no se repita
$compruebaTFL="SELECT * FROM usuario WHERE telefono='$telefono'";
$consultaTFL = mysqli_query($conexion, $compruebaTFL) or die("Error al insertar cuenta: " . mysqli_error($conexion));

if(mysqli_num_rows($consultaTFL)>0){
    echo '<script>
        alert("Teléfono existente, por favor registrese con otro");
        window.location="../registros.php"
        </script>';
    exit();
}





//meter datos del registro del usuario
$meterdatos= "INSERT INTO usuario (nombre,apellido,email,dni,fecha_nac,direccion,provincia,pais,ciudad,codigo_postal,contrasena,telefono) VALUES ('$nombre','$apellido','$email','$dni','$fechaNac','$direccion','$provincia','$pais','$ciudad','$cp','$contrasena_encriptada','$telefono')";
$resultado = mysqli_query( $conexion, $meterdatos ) or die ( "Algo ha ido mal en la consulta a la base de datos");

//crear cuenta bancaria
$crearCuenta="INSERT INTO cuenta (saldo, iban, dni) VALUES (0, '$iban2', '$dni')";
$resultadoCuenta = mysqli_query($conexion, $crearCuenta) or die("Error al insertar cuenta: " . mysqli_error($conexion));






echo   

        '<script>
        alert("Usuario registrado con exito");
        window.location="../login.php"
        </script>'

?>