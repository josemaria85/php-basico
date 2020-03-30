<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="./get.php" method="get">
        <input type="text" name="nombre" id="nombre">
        <input type="submit" value="Enviar">
    </form>

    <form action="./post.php" method="post">
        <input type="text" name="apellido" id="apellido">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>