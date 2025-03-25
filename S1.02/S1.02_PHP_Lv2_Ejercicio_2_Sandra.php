<html>
    <head>
        <title>Ejercicio_1</title>
</head>

<?php
//variables 
$precio=0.0; //integer 
$xocolate=0.0; //integer 
$xiclets=0.0;
$carmels=0.0;

function compraXocolate(float $xocolate=2){
   return $xocolate*=1;

}
function compraXiclets(float $xiclets=1){
    return  $xiclets*=0.50;
 
 }
 function compraCarmels(float $carmels=1){
    return  $carmels*=1.50;
 
 }
 echo "El precio total es " . $precio=compraXocolate() + compraXiclets()+ compraCarmels();



?>
</html>