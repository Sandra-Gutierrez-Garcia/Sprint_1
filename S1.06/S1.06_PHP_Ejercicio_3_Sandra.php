<?php
declare(strict_types=1); 

include "S1.06_PHP_Ejercicio_3_Metodos.php";

$nombre = (string) $_POST["nombre"]="Lucas";
$username = (string) $_POST["username"]="Pokemon";

 $usuario= new Informacion( $nombre,  $username);
 echo $usuario;

 echo "<br> Numero de la linea actual del archivo es " . __line__;
 echo "<br> El archivo se encuentra en la ruta " .__DIR__;
 
?>
