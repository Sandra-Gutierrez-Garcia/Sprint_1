<?php
session_start();

echo "el nombre registrado es " . $_POST["nombre"] . " y el username " .  $_POST["username"];


 $_SESSION["nombre"]= "Lucas";
 $_SESSION["username"]= "maria";

 echo  "<br> imprimir informacion de session: " . $_SESSION["nombre"] ." el username " .  $_SESSION["username"];


    
?>
