<?php 



function dividir($num1,$num2){

    if($num2==0){
    echo'error 0';
    }
    else {  echo $num1/$num2;
    } 
    }

dividir(10,2);

echo'<br>';

function division($num1,$num2){

    if($num2!=0){
        echo $num1/$num2;

    }
    else {  echo'error 0';
    } 
}

division(10,5);

   
?>