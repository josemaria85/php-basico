<?php


//lo que se pasa a la funcion se queda dentro no tiene efecto fuera por valor
function suma($x)
{
    $x++;
    echo $x . "<br>";
}

$a = 10;

suma($a);
echo $a . "<br>";

//lo que le pasamos a la funcion si le ponemos delante un & el valor fuera se modificara. por referencia
function suma2(&$x)
{
    $x++;
    echo $x . "<br>";
}

$a = 10;

suma2($a);
echo $a . "<br>";


$letras = array ('a' => 'A', 'b' =>'B');
  $letras[] = 'C';
  echo $letras['c'];