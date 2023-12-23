<?php
if (isset($_POST['usuario'])) {
$usuario = $_POST['usuario'];
// Procesar la información (simulación)
$respuesta = "Hola, $usuario. La petición fue procesada con éxito.";
// Enviar la respuesta
echo $respuesta;
} else {
echo "Error: No se recibieron datos.";
}
?>
