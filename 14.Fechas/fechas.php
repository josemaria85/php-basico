<?php
    //formateo de una fecha
    $f="2019/05/25";
    $fecha=date("Y-m-d",strtotime($f));
    echo $fecha;
    echo "<br>";
    //url fechas[Web de ayuda de PHP] (http://php.net/manual/es/function.date.php)

    //ver fecha actual en un array
    print_r(getdate(time()));
    echo "<br>";

    //fecha local
    print_r(localtime(time()));

    //sumar dias tiene que estar las fechas en formato americano
    $date_futuro=strtotime("+ 5 day ",strtotime($f));
    print_r (date('d/m/Y',$date_futuro));
    //fechay hora
    echo "<br>";
    echo date("d/m/Y H:i:s");
?>