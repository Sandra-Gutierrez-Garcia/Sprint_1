<html>
    <head>
        <title>Ejercicio_5</title>
</head>

<?php

//Varaible 
$notas=33;

function notas ($notas){
    if($notas>=60){
        echo "Primera Division";
    }else if($notas<=59 && $notas>=45){
        echo "Segunda Divisiom";
    }else if($notas<=44 && $notas>=33){
         echo "Tercera Divisiom";
    }else{
        echo "estudinat reprovara";
    }
}

notas(67);
echo "<br>";
notas(45);
echo "<br>";
notas(44);
echo "<br>";
notas(5);



?>

</html>