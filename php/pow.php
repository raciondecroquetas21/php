<?php

function division($num1,$num2){

    if($num2!=0){
        $resultado=$num1/$num2;
       return $resultado;
    }
    else {  echo'error 0';
    } 
}

$resultado = division(10,5);


function imprimir_al_cubo ($resultado){
  
    echo pow($resultado,3);
}

imprimir_al_cubo ( $resultado);

?>

