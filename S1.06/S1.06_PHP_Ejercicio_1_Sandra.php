<?php
session_start();
include include "S1.06_PHP_Ejercicio_3_Sandra.php"
?>
<!DOCTYPE html>
    <head>
    <meta charset="UTF-8">
        <title>Ejercicio_1</title>
</head>
<body>
    <header>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="username">username:</label>
        <input type="text" id="username" name="username" required>

        <input type="submit" value="Enviar">

</form>
</header>
</body>
</html>
<?php

echo "el nombre registrado es " . $_POST["nombre"] . " y el username " .  $_POST["username"];


 $_SESSION["nombre"]= "Lucas";
 $_SESSION["username"]= "maria";




    
?>
