<html>
    <head>
        <title>Ejercicio_1</title>
</head>

<?php


$string="Lucas";
$integer=12;
$double=12.5;
$on= true;

/* para crear una constant use define()*/
define("Nombre", "Sandra Gutierrez"); 

/* use Using single porque si estaba todo 
junto solo me imprimia nombre"*/
echo  "<h1>" . Nombre ."</h1>";

echo "Ese es el integer " . $integer . " Ese es el string " . 
$string . " ese son el double o float " .$double . " Eso es la boolean " . $on ;



?>
</html>