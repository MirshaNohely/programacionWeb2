<?php
session_start();
include "conexion.php";
$no_cuenta = $_GET['no_cuenta'];

// Verificar si el usuario tiene permisos para eliminar (opcional)
// Puedes implementar la lógica de permisos aquí

// Eliminar el usuario de la base de datos
$consulta_sql = "DELETE FROM persona WHERE no_cuenta = $no_cuenta";
$resultado = $conexion->query($consulta_sql);

if ($resultado) {
    echo "Usuario eliminado correctamente";
} else {
    echo "Error al eliminar el usuario: " . $conexion->error;
}

// Redirigir a la página principal después de eliminar
header("Location: ../Principal.php");
exit();
?>
