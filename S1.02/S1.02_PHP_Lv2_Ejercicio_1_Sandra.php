<html>
    <head>
        <title>Ejercicio_1</title>
</head>

<?php
//variables 
$precio=0; //integer 
$duracionLlmada=0; //integer 

function CostarLLamada(int $duracionLlmada=3){
    if($duracionLlmada<=3){
        echo "El consto es de 10 centimentos";

    }else{
      $precio=$duracionLlmada*5; 
      echo "El precio es de " . $precio+10 . " centimos";
    }

}
CostarLLamada();
echo "<br>";
CostarLLamada(6);


?>
</html>