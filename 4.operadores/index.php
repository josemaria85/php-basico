<?php

$a=5;
$b=3;

$cierto=true;
$falso=false;

//operadores logicos
echo ($cierto==true && $falso==false); //devuelve 1 true cumple las  dos condiciones
echo ($cierto==true || $falso==true);//devuelve 1 true si cumple una de las condiciones
echo (!$cierto==false);// si no se cumple
echo ($cierto);// si se cumple


//operadores asignacion '='



//operadores de comparacion
echo($a==$b);// devuelve 1 true si son iguales
echo($a===$b);// devuelve 1 true si son identicos
echo($a!=$b);// devuelve 1 true si son diferentes
echo($a<>$b);// devuelve 1 true si son diferentes
echo($a!==$b);// devuelve 1 true si no son identicos
echo($a<$b);// devuelve 1 true si a es menor que b
echo($a>$b);// devuelve 1 true si a es es mayor que b
echo($a>=$b);// devuelve 1 true si a es es mayor o igual que b
echo($a<=$b);// devuelve 1 true si a es menor o igual que b
echo "<br>";
echo "valor inicial $a";
echo "<br>";
//operadores de incremento y decremento
++$a;//preincremento
echo "pre-incremento";
echo($a);
echo "<br>";
$a++;//post incremento
echo "post-incremento";
echo($a);//postincremento
echo "<br>";
echo "pre-decremento";
--$a;// predecremento
echo($a);
echo "<br>";
echo "post-decremento";
$a--;
echo($a);// postdecremento


//operadores strings
$texto3="hola";
echo "<br>";
echo "Texto1"." Texto2";
$texto2="fgdf";
$texto3.=$texto2;
echo $texto3;
?>