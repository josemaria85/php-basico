<?php

#1ºforma
//abir en modo escritura
$f=fopen("datos.txt","w");
//variable texto a escribir
$escribir="texoeoifj ofkj odf odfkodkf";
//escritura del dato
fwrite($f,$escribir);
fwrite($f,"text a insertar 2");
//cerrar archivo
fclose($f);


#2 forma
//escribir todo de golpe
file_put_contents("datos.txt",$escribir);