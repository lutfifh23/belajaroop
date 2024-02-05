<?php

function myAutoLoad($class){
    if (preg_match("/\A\w+\z/", $class)) {
        include "classes/". $class . ".php";
    }
}

spl_autoload_register("myAutoLoad");

$cat = new Cat;
echo $cat->name;
?>