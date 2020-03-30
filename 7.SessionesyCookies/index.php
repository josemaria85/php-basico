<?php
//inicializamos sessiones
session_start();

//nos permite navegar entre paginas y verificar que tienen los mismos valores, la misma session para validaciones, envio de formularios...
//asignamos un valor a la session
$_SESSION["mi_session"] = "valor session";

//puede coger un tercer parametro que es el tiempo de expiracion de la coockie
setcookie("nombre", "valor coockie");

?>

<a href="./sessiones.php">Ir a session</a>
<a href="./coockies.php">Ir a coockie</a>