<?php
$arr=array("uno","dos","tres");

//1ºforma acceso solo al valorr
foreach ($arr as $value ) {
    echo $value."<br>";
}

//2ºforma
foreach ($arr as $key => $value) {
    echo $arr[$key]."la clave es : $key<br>";
}
?>