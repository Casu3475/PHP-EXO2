<?php

function my_create_map(...$array){

    $map = array();
    
    foreach ($array as $elem) {
        if (count($elem) < 2) {
            echo "The given arguments aren't valid.";
            return NULL;
        }
        $map[$elem[0]] = $elem[1];
    }
    return $map;
}

$array1 = ["pi", 3.14, 8];
$array2 = ["answer", 42];

