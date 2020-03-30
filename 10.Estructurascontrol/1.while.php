<?php
    $a=10;
    $b=5;

    //se ejecuta hasta que b sea igual a a
    while($a!=$b){
        echo "valor de b es: $b <br>";
        $b++;
    }

    //se ejecuta al menos una vez
    do{
        $b=5;
    }while($a!=$b);
?>