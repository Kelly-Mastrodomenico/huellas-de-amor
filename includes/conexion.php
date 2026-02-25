<?php
/*
==================================================
ARCHIVO DE CONEXIÓN A BASE DE DATOS
--------------------------------------------------
Centraliza la conexión MySQL del proyecto.

Si se cambia de hosting,
solo se deben modificar las credenciales aqui.
==================================================
*/

$host = "localhost";
$user = "root";
$password = "";
$database = "huellas_amor";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>