<?php

//1ºforma fopen --> modo lectura--r modo escritura-->write  modo creacion-->a 
$dir="datos.txt";
$file=fopen($dir,"r");
//leer linea a linea
while(!feof($file)){
    echo fgetc($file);
}
//cerramos
fclose($file);

//2º forma leer fichero de golpe
$file=file_get_contents($dir);
print_r($file);

//leer linea a linea
$lineas=file($dir);
foreach ($lineas as $num_linea => $linea) {
    echo $num_linea." --> ".$linea;
}

//para parar la ejecucion usar die("texto motivo parar")
