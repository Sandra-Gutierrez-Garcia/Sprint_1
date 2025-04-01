<?php
session_start();

echo "el nombre registrado es " . $_POST["nombre"] . " y el username " .  $_POST["username"];


 $_SESSION["nombre"]= "Lucas";
 $_SESSION["username"]= "maria";

 echo  "<br> imprimir informacion de session: " . $_SESSION["nombre"] ." el username " .  $_SESSION["username"];

 echo "<br> Numero de la linea actual del archivo es " . __line__;
 echo "<br> El archivo se encuentra en la ruta " .__DIR__;
 

    
?>
