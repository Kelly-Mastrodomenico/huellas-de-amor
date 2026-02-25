<?php
/*
==================================================
ARCHIVO DE FUNCIONES GLOBALES
--------------------------------------------------
Centraliza funciones reutilizables del proyecto
para evitar duplicidad de código y facilitar
mantenimiento y trabajo en equipo.
==================================================
*/

/* INICIAR SESIÓN DE FORMA SEGURA*/
function iniciarSesionSegura() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}


/* VERIFICAR SI EL USUARIO ES ADMIN
   Redirige al login si no tiene permisos*/
function esAdmin() {

    iniciarSesionSegura();

    if (!isset($_SESSION["rol"]) || $_SESSION["rol"] !== "admin") {
        header("Location: ../login.php");
        exit();
    }
}


/* SUBIR IMAGEN
   Genera nombre único y mueve archivo al servidor
   Devuelve el nombre generado o null */
function subirImagen($archivo, $rutaDestino) {

    if (!empty($archivo["name"])) {

        $nombreUnico = uniqid() . "_" . basename($archivo["name"]);
        $rutaCompleta = $rutaDestino . $nombreUnico;

        move_uploaded_file($archivo["tmp_name"], $rutaCompleta);

        return $nombreUnico;
    }

    return null;
}


/* ELIMINAR IMAGEN DEL SERVIDOR*/
function eliminarImagen($rutaCompleta) {

    if (file_exists($rutaCompleta)) {
        unlink($rutaCompleta);
    }
}


/* REDIRECCIÓN SEGURA */
function redirigir($ruta) {
    header("Location: $ruta");
    exit();
}


/* SANITIZAR TEXTO
   Previene XSS básico*/
function sanitizar($texto) {
    return htmlspecialchars(trim($texto), ENT_QUOTES, 'UTF-8');
}