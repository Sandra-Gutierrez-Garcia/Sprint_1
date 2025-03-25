<html>
    <head>
        <title>Ejercicio_4</title>
</head>

<?php

//Varaibles
$numeroEnd=10;
$sumacontar=2;

function contador(int $numeroEnd=20, int $sumacontar=2){
    for( $contador=0;$contador <=$numeroEnd;$contador += $sumacontar){
        echo  $contador;
        
     
    }
}
//Crido los contadores
contador();
echo "<br>"; 
contador(30);
echo "<br>"; 
contador($numeroEnd, 1);
echo "<br>"; 
contador($numeroEnd, $sumacontar);



?>

</html>