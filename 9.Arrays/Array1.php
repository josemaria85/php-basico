<?php
#Array
//creacion array// tener en cuenta que inicia en el 0
    $array1=array("1","2","3",array("juan","pedro"));
    //mostrar todo el array
    print_r($array1);
    //acceder a un elemento del array
    $array1[2];
    //mostrar preformateado
    echo "<pre>";
    print_r($array1);
    echo "</pre>";


    #Array asociativo
    $arr_ass=array(
        "1"=>"valor1", 
        "2"=>"valor2",
        "3"=>"valor3"
    );
    echo $arr_ass[1];
?>