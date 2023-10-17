<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    $texto = 'User1';
    $numero = '1234';

    if ($usuario == $texto && $contrasena == $numero) {
        echo 'Genial, puedes pasar!!';
    } elseif ($usuario == $texto) {
        echo 'Lo siento, el usuario es correcto, pero la contraseña no';
    } elseif ($contrasena == $numero) {
        echo 'Lo siento, este usuario no es válido';
    } else {
        echo 'No has acertado ninguna';
    }
} else {
    echo 'Acceso no permitido';
}
?>
