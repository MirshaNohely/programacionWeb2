<?php
// Datos de conexión a la base de datos
$host_db = "localhost";
$user_db = "id17970443_nohely";
$pass_db = "MOONbin64./ca";
$db_name = "id17970443_nohe";

// Ruta del archivo SQL
$sqlFile = "ruta_del_archivo.sql";

// Crear conexión
$conn = new mysqli($host_db, $user_db, $pass_db, $db_name);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Leer el contenido del archivo SQL
$sql = file_get_contents($sqlFile);

// Ejecutar el script SQL
if ($conn->multi_query($sql) === TRUE) {
    echo "Registros insertados correctamente.";
} else {
    echo "Error al insertar registros: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
