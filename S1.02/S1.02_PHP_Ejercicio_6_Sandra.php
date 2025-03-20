<html>
    <head>
        <title>Ejercicio_5</title>
</head>

<?php


function isBitten  (){
   echo rand(true,false) ? "True" : "Flase";
   // rand() para que de valor alatorio entre true o flase 
   // despues utilizado un operador que depende del resultado dija palabra o otra
}
  
echo "  Que Charlie et mossegarà el dit " . isBitten();
?>

</html>