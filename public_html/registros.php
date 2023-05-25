<?php

// Datos de conexión a la base de datos

$host_db = "localhost";

$user_db = "id17970443_nohely";

$pass_db = "MOONbin64./ca";

$db_name = "id17970443_nohe";


// Conexión a la base de datos
$conn = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Generar 1500 registros
for ($i = 1; $i <= 1500; $i++) {
    $nombre = "Persona" . $i;
    $carrera = "Carrera" . $i;
    $noCuenta = $i;
    $direccion = "Dirección" . $i;
    $telefono = "12345678";
    $email = "persona" . $i . "@example.com";
    $password = "password" . $i;
    $fechaRegistro = date("Y-m-d H:i:s");
    $permisos = 2;

    $sql = "INSERT INTO persona (nombre_usuario, carrera, no_cuenta, direccion, telefono, email, password, fecha_registro, permisos) VALUES ('$nombre', '$carrera', $noCuenta, '$direccion', '$telefono', '$email', '$password', '$fechaRegistro', $permisos)";

    if (mysqli_query($conn, $sql)) {
        echo "Registro insertado: " . $nombre . "<br>";
    } else {
        echo "Error al insertar registro: " . mysqli_error($conn) . "<br>";
    }
}

// Cerrar conexión
mysqli_close($conn);

?>
