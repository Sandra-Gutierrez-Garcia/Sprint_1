<?php
session_start();

?>
<!DOCTYPE html>
    <head>
    <meta charset="UTF-8">
        <title>Ejercicio_1</title>
</head>
<body>
    <header>
    <form action="S1.06_PHP_Ejercicio_2_Procesar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="username">username:</label>
        <input type="text" id="username" name="username" required>

        <input type="submit" value="Enviar">

</form>
</header>
</body>
</html>


