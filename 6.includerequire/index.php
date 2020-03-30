<?php
//include si no encuentra el fichero dara un warning con un error y seguira la ejecucion
include("./include.php");
//require da error y para la ejecucion.
require("./require");

//nos los incluye una sola vez y que no esten en otras partes del codigo ya incluidas.
include_once("./include.php");
require_once("./require");


?>