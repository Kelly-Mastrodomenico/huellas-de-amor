<?php session_start();

require_once "includes/conexion.php";

$sql = "SELECT * FROM mascotas 
        WHERE estado = 'disponible' 
        ORDER BY fecha_registro DESC 
        LIMIT 4";

$resultado = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Huellas de Amor</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS compilado -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<header class="p-3 bg-white shadow-sm sticky-top">
    <div class="container d-flex justify-content-between align-items-center">
        <h1 class="fs-4 m-0">🐾 Huellas de Amor</h1>
        <nav>
            <a href="adoptar.php" class="me-3">Adoptar</a>
            <a href="donaciones.php" class="me-3">Donar</a>
            <a href="login.php">Login</a>
        </nav>
    </div>
</header>

<!-- HERO PRINCIPAL
     Mobile First. -->

<section class="hero">
    <div class="container hero__content">
        <h2 class="hero__title">
            Encuentra a tu nuevo mejor amigo
        </h2>
        <p class="hero__text">
            Adopta, apadrina o acoge y cambia una vida para siempre.
        </p>
        <a href="adoptar.php" class="btn-accent">
            Explorar Mascotas
        </a>
    </div>
</section>

<!-- Mascotas destacadas -->
<section class="mascotas py-5">
    <div class="container">
        <h2 class="text-center mb-4">Mascotas Destacadas</h2>

        <div class="row">
            <?php while($mascota = $resultado->fetch_assoc()){?>
                
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card mascota-card h-100">
                        <img src="assets/img/<?php echo $mascota['imagen']; ?>" 
                             class="card-img-top" 
                             alt="<?php echo $mascota['nombre']; ?>">

                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <?php echo $mascota['nombre']; ?>
                            </h5>

                            <p class="card-text">
                                <?php echo $mascota['edad']; ?> años
                            </p>

                            <a href="#" class="btn-primary-custom">
                                Ver detalles
                            </a>
                        </div>
                    </div>
                </div>

            <?php }; ?>
        </div>
    </div>
</section>

</body>
</html>