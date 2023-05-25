<?php

// $host_db = "localhost";
// $user_db = "id17970443_nohely";
// $pass_db = "MOONbin64./ca";
// $db_name = "nohe";


$host_db = "localhost";
$user_db = "id17970443_nohely";
$pass_db = "MOONbin64./ca";
$db_name = "id17970443_nohe";



$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}


?>