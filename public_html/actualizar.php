<?php
// Realiza la conexión a la base de datos

// Verifica si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtén los datos enviados desde el formulario
  $nombre = $_POST['nombre'];
  $carrera = $_POST['carrera'];
  $noCuenta = $_POST['no_cuenta'];
  
  // Realiza la consulta SQL para actualizar el registro
  $sql = "UPDATE persona SET nombre_usuario='$nombre', carrera='$carrera' WHERE no_cuenta=$noCuenta";
  
  // Ejecuta la consulta
  // ...
  
  // Verifica si la consulta se ejecutó correctamente
  // ...
}
?>
