<?php
require_once "../includes/funciones.php";
esAdmin();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panel Admin</title>
</head>
<body>

<h1>Bienvenida <?php echo $_SESSION["nombre"]; ?></h1>

<p>Este es el panel de administración</p>

<a href="../logout.php">Cerrar sesión</a>

</body>
</html>