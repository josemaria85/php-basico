<?php
//funcion con parametro
function holaMundo2($param1){
    echo $param1;
    echo "<br>";
}
//funcion con parametro por defecto
function holaMundo3($param1="Hola Default"){
    echo $param1;
    echo "<br>";
}
holaMundo2("parametos");
holaMundo3();