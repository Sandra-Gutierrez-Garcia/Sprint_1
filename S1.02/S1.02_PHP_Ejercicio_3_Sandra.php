<html>
    <head>
        <title>Ejercicio_3</title>
</head>

<?php

// Variables Parte A
$y=12;
$x=15;

$n=11.90;
$m=7.2;

// Variables Parte A
$numeroUno=20;
$numeroDos=20;
$operador="";





// operaciones de X i Y
echo "Valor de la variable Y " . ($y) . " y el valor de la varaible X " . ($x) .
"<br> la suma Y+X es " . ($y + $x) .  
"<br> la restra Y+X es " . ($y - $x) .
"<br> El producto Y+X es " . ($y * $x) . 
"<br> El producto Y+X es " . ($y % $x); 


// operaciones de N i M
echo "<br><br>Valor de la variable N " . $n . " y el valor de la varaible M " . $m .
"<br> la suma Y+X es " . ($n + $m) .  
"<br> la restra Y+X es " . ($n - $m) .
"<br> El producto Y+X es " . ($n * $m) . 
"<br> El producto Y+X es " . ($n % $m);

// operaciones de N i M
echo "<br><br> El doble de las variables X= " .( $x*=2) . " Y= " .  ($y*=2) . " N= " . ($n*=2) .
" M= " .  ($m*=2) . 
"<br> la suma de todas las variables " . ($n +$m + $y +$x) .
"<br> el producto de todas las variables " . ($n*$m*$x*$y);

// Parte b crear una calculadora

function Calculadora($numeroUno, $numeroDos, $operador){
    switch($operador){
        case "+":
          echo "<br><br>El resultado es de la suma es  " . ($numeroUno + $numeroDos);
        break;
        
        case "-":
            echo"<br>El resultado es de la resta es " . ($numeroDos - $numeroUno);
        break;

        case "*":
            echo "<br>El resultado es de la multiplicacio es " . ($numeroDos * $numeroUno);
        break;
        case "/":
            echo "<br>El resultado es de la divisio es " .  ($numeroDos / $numeroUno);
        break;


    }
}

//Lammar el funcion
Calculadora(20, 10 , "+");
Calculadora(20, 10 , "-");
Calculadora(20, 10 , "*");
Calculadora(20, 10 , "/");

?>
</html>