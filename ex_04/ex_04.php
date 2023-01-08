<?php

function my_password_hash($password){
    $aléatoire=uniqid();
    $salt=MD5($aléatoire);
    $mot_pass=password_hash($password,PASSWORD_DEFAULT,["salt"=>$salt]);
    $array_to_return=[
        "hash"=>$mot_pass,
        "salt"=>$aléatoire
    ];
    return $array_to_return;
}

function my_password_verify($password,$salt,$hash){
    $salt=MD5($salt);
    $mot_pass_hashee=password_hash($password,PASSWORD_DEFAULT,["salt"=>$salt]);
    if ($hash==$mot_pass_hashee){
        return true;
    } else { 
        return false;}

}

// echo(MD5("hello"));
// print_r((my_password_hash("toto"));
// $array=my_password_hash("toto");
// var_dump(my_password_verify("tot5",$array["salt"], $array["hash"]));
