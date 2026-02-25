<?php session_start(); ?>
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
    <div class="hero__overlay">
        <div class="container text-center hero__content">
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
    </div>
</section>

</body>
</html>