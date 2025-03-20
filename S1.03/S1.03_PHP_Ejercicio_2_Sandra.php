<html>
    <head>
        <title>Ejercicio_2</title>
</head>

<?php



// Creamos la array
$Array1 =array("Kyo", "Rocky", "Maria", "Carlos", "Nicolas" );

//Cuando elemtos tiene
var_dump($Array1);//vemos los pociociones de cada una
echo count ($Array1);

//Eliminar un elemento
unset($Array1[3]);// Elimina un elemento


$Array1= array_values($Array1); 
echo "<br><br>";
var_dump($Array1);// me dice dettalamente que tiene la array
// Renicio las claves de la Array para que el order esta bien
echo count ($Array1);

foreach ($Array1  as $Imprimir) {
 // creamos foreach para imprimir la array
 echo "$Imprimir <br>";
}

?>

</html>