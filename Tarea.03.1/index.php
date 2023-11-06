<?php

$texto = 'User1';
$numero = '1234';

// Condición 1: Acierta usuario y número
if ($texto == 'User1' && $numero == '1234') {
    echo 'Genial, puedes pasar!!';
} 
// Condición 2: Acierta usuario, falla número
elseif ($texto == 'User1') {
    echo 'Lo siento, el usuario es correcto, pero la contraseña no';
} 
// Condición 3: Acierta número, falla usuario
elseif ($numero == '1234') {
    echo 'Lo siento, este usuario no es válido';
} 
// Condición 4: Falla todo
else {
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
