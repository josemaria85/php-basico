<?php
if (isset($_POST["nombre"]) && isset($_FILES["fichero"])) {
    $nombre = $_POST["nombre"];
    $fichero = $_FILES["fichero"];
    echo $nombre. "<br>";
    echo "<pre>";
    print_r($fichero);
    echo "</pre>";
    move_uploaded_file($_FILES["fichero"]["tmp_name"],"fichero/".$_FILES["fichero"]["name"]);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Ficheros</title>
</head>

<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nombre" id="nombre">
        <input type="file" name="fichero" id="fichero">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>