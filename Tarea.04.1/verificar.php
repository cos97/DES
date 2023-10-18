<?php

    $user=$_POST["usuario"];
    $pass=$_POST["contrasena"];
    validar($user,$pass);
    function validar($user, $pass){
        if (preg_match('/^[a-zA-Z0-9]{6,15}$/', $user) && preg_match('/^[a-zA-Z]{7}$/', $pass) && $user != $pass) {
            echo "Genial";
        } else {
            header("Location: index.html?error=invalid");
        }
    }

?>