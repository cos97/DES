<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Usuarios</title>
    <style>
        table {
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Consulta de Usuarios</h1>
    <?php
    // Configuración de la conexión a la base de datos
    $servername = "localhost";
    $username = "cos7";
    $password = "Gemimarda1997@";
    $dbname = "mi_base_de_datos";
    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    // Consulta SQL para obtener los usuarios
    $sql = "SELECT id, nombre, apellido FROM usuarios";
    $result = $conn->query($sql);
    // Mostrar los resultados en una tabla HTML
    if ($result->num_rows > 0) {
        echo "<table>";
        "<tr><th>ID</th><th>Nombre</th><th>Apellido</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" .
                $row["apellido"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }
    // Cerrar la conexión
    $conn->close();
    ?>
</body>

</html>