<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "huellas_amor";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>