<html>
    <head>
        <title>Ejercicio_3</title>
</head>

<?php
//Creamos la array
$array= array("Lya", "Tulipan", "Maria", "Carlos", "Nicolas" );
//creamos un contador para que cuente 
$contador=0;
$trueFlase= false;
function comporvacion ($array,$contador , $trueFlase){
    // imprimimos la array para que despues con if se pueda comparar
   foreach($array as $comprobacion){
    // compreuba que ests el caracter en cada frase
    if(strpbrk($comprobacion,"a")){
        //si esta el contador incrementa 
          $contador++ ;
        
    }
   }
   if($contador==count($array)){
    $trueFlase= true;
   }else{
    $trueFlase=false;
   }
   echo "Cada palabra de la array tiene un carecter en comun: " . ($trueFlase ? "true" : "flase");

}
comporvacion ($array,$contador,$trueFlase);
?>


</html>