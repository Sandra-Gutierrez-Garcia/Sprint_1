<?php
session_start();

$nombre = $username =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = test_input($_POST["nombre"]);
    $username = test_input($_POST["username"]);

}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

echo "el nombre registrado es " . $_POST["nombre"] . " y el username " .  $_POST["username"];


 $_SESSION["nombre"]= "Lucas";
 $_SESSION["username"]= "maria";

 echo  "<br> imprimir informacion de session: " . $_SESSION["nombre"] ." el username " .  $_SESSION["username"];


    
?>
