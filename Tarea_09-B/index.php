<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "cos7";
$password = "Gemimarda1997@";
$dbname = "BBDD_Store";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Comenzar transacción
$conn->begin_transaction();

try {
    // Actualizar unidades en tienda 1
    $sqlUpdateTienda1 = "UPDATE TABLA_stock SET unidades = 9 WHERE nombre_tienda = 'tienda1'";
    $conn->query($sqlUpdateTienda1);

    // Actualizar unidades en tienda 2
    $sqlUpdateTienda2 = "UPDATE TABLA_stock SET unidades = 15 WHERE nombre_tienda = 'tienda2'";
    $conn->query($sqlUpdateTienda2);

    // Insertar registro para la tienda 3
    $sqlInsertTienda3 = "DELETE FROM TABLA_stock WHERE nombre_tienda = 'tienda3'";
    $conn->query($sqlInsertTienda3);

    // Confirmar la transacción
    $conn->commit();
    
    echo "Transacción realizada con éxito.";
} catch (Exception $e) {
    // Revertir la transacción en caso de error
    $conn->rollback();
    echo "Error en la transacción: " . $e->getMessage();
}

// Cerrar la conexión
$conn->close();
?>
