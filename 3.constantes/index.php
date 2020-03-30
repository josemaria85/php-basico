<?php
    //constante simple, texto numeros arrays...
    define("MI_CONSTANTE","HOLA");

    //constante arrray
    define("MI_ARRAY",array("2","3"));
    $_miconstante=MI_CONSTANTE;

    //mostrarlas
    echo MI_CONSTANTE;;
    echo $_miconstante;

    //imprimir array
    print_r(MI_ARRAY[0]);
?>