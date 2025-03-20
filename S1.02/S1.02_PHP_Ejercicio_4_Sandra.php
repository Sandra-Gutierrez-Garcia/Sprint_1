<html>
    <head>
        <title>Ejercicio_4</title>
</head>

<?php

//Varaibles
$numeroEnd=10;
$sumacontar=2;

function contador($numeroEnd,$sumacontar){
    for($contador=0;$numeroEnd>=$contador;$contador){
        echo  $contador;
        $contador +=$sumacontar;
        //echo  $contador;
     
    }
}
//Crido los contadores
contador($numeroEnd, 1);
echo "<br>"; // que haga un salto de linia para que no se ajuste
contador($numeroEnd, $sumacontar);



?>

</html>