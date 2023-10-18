<?php

$texto = 'User1';
$numero = '12344';

if ($texto == 'User1' && $numero == '1234') {
    echo 'Genial, puedes pasar!!';
} elseif ($texto == 'User1') {
    echo 'Lo siento, el usuario es correcto, pero la contraseña no';
} elseif ($numero == '1234') {
    echo 'Lo siento, este usuario no es válido';
} else {
    echo 'No has acertado ninguna';
}

/*
Se pueden dar 4 opciones:
* Acierta todo.
* Acierta usuario, falla el numero.
* Acierta numero, falla usuario.
* Falla todo.
*/

?>
