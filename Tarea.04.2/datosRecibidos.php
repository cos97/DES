<?php

$user=$_GET["usuario"];
$pass=$_GET["contrasena"];
validar($user,$pass);
function validar($user, $pass){

    if ($user == 'User1' && $pass == '1234') {
        echo 'Genial, puedes pasar!!';
    } elseif ($user == 'User1') {
        echo 'Lo siento, el usuario es correcto, pero la contraseña no';
    } elseif ($pass == '1234') {
        echo 'Lo siento, este usuario no es válido';
    } else {
        echo 'No has acertado ninguna';
    }
}

/*
Se pueden dar 4 opciones:
* Acierta todo.
* Acierta usuario, falla el pass.
* Acierta pass, falla usuario.
* Falla todo.
*/

?>
