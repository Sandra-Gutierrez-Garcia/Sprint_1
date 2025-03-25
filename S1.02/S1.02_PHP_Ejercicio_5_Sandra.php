<html>
    <head>
        <title>Ejercicio_5</title>
</head>

<?php

//Varaible 
$notas=33;

function clasificaciones (int $notas){
    if($notas>=60){
        echo "Primera División";
    }else if($notas>=45){
        echo "Segunda División";
    }else if($notas>=33){
         echo "Tercera División";
    }else{
        echo "estudinat reprovara";
    }
}

clasificaciones(67);
echo "<br>";
clasificaciones(59);
echo "<br>";
clasificaciones(44);
echo "<br>";
clasificaciones(5);



?>

</html>