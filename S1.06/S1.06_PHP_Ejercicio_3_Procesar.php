<?php
session_start();
include "S1.06_PHP_Ejercicio_3_Metodos.php";

 $usuario= new Informacion($_POST["nombre"],$_POST["username"]);
 echo $usuario->__toString();

 echo "<br> Numero de la linea actual del archivo es " . __line__;
 echo "<br> El archivo se encuentra en la ruta " .__DIR__;
 
?>
