<?php

function my_add_elem_map($key, $value, &$map) {
    if(array_key_exists($key, $map)){
        echo "You have to give good parameters.\n";
    } else{
    $map[$key]=$value;
    return $map;
}    
}

function my_modify_elem_map($key, $value, &$map) {
    if(!array_key_exists($key, $map)) {
        echo "You have to give good parameters.\n";
    } else{
    $map[$key]=$value;
    return $map;
}
}

function my_delete_elem_map($key, &$map){
    if(!array_key_exists($key, $map)) {
        echo "You have to give good parameters.\n";
    } else{
    unset($map[$key]);
    return $map;
}
}

function my_is_elem_valid($key, $value, &$map){
    if (array_key_exists($key, $map) && $map[$key] == $value){
        return true;
    } else {
        echo "You have to give good parameters."."\n";
        return false;
    }
}


// $map=[];
// print_r(my_add_elem_map("first", "baris", $map));
// print_r(my_add_elem_map("second", "toto", $map));
// print_r(my_add_elem_map("third", "life", $map));
// print_r(my_modify_elem_map("third", 42, $map));
// print_r(my_delete_elem_map("second", $map));
// print_r(my_is_elem_valid("third", "42", $map));
