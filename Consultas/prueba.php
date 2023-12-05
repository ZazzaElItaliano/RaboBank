<?php 

$nombre="alejandro";
$longitud=strlen($nombre);
$iban="";

if($longitud>=4){
    for($i=1; $i<=4; $i++){
    
        $binario=decbin($i);
       $iban.=$binario;
    }
    
}elseif($longitud<4){
    $nombreConvertido=str_pad($nombre,4,'z');
    
}










for($i=1; $i<=4; $i++){
    
    $binario=decbin($i);
   $iban.=$binario;
}

echo $iban;
?>