<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Calculator <3</title>
    <link rel="stylesheet" href="style.css">\<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="calculadora.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Roboto+Condensed:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
</head>
<body background-color="blue">
    
 
    <form method="get" >
    
     <input type="text" name="imput_1" placeholder="valor del primer numero:">
      <br>
     <input type="text" name="imput_2" placeholder="valor del segundo numero:">
      <br>
       <select name="operacion">
            <option value="+">+</option>
            <option value="-" selected>-</option>
            <option value="*">*</option>
            <option value="/">/</option>
      </select>
      <br>
    <input type="submit" value="resultado" name= 'resultado'>
   </form>
</body>
</html>

<?php

echo '<h2>Calculadora</h2>';
if (isset($_GET['resultado'])){

      $imput_1=$_GET['imput1'];
      $imput_2=$_GET['imput2'];
      $operacion= $_GET['operacion'];

      function suma($imput_1,$imput_2)
      {
            $valor_suma = $_GET['imput_1']+$_GET['imput_2'];
      echo  $valor_suma;   
      }

      function resta($imput_1,$imput_2)
            {
                  $valor_resta = $_GET['imput_1']-$_GET['imput_2'];
            echo  $valor_resta;   
            }
      function multiplicacion($imput_1,$imput_2)
            {
                  $valor_multiplicacion = $_GET['imput_1']-$_GET['imput_2'];
            echo  $valor_multiplicacion;   
            }
      function division($imput_1,$imput_2)
            {
                  $valor_division = $_GET['imput_1']-$_GET['imput_2'];
            echo  $valor_division;   
            }





      if  ($operacion=="+") {
      suma($imput_1,$imput_2);
      } else if ($operacion=="-") {
            resta($imput_1,$imput_2);
      }else if ($operacion=="*") {
            multiplicacion($imput_1,$imput_2);
      } else if ($operacion=="/") {
            division($imput_1,$imput_2);
      }else {
            
      echo '<h3>error</h3>';
      }

}
?>