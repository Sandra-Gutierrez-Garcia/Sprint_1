<html>
    <head>
        <title>Ejercicio_2</title>
</head>

<?php

// Variables
$frase="Hello, World";
$frase2="Aquest és el curs de PHP";
$concotenation= $frase . " ".  $frase2;


/* Imprime la frase, strtoupper() lo que hace es imprimir en mayuscula */

echo strtoupper ( $frase ) . "<br>". strrev( $frase);
echo "<br>" .  $concotenation;



?>
</html>