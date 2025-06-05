<?php
// CONEXIÓN SOFÍA
// $host = "localhost";

// CONEXIÓN CHRISTIAN
$host = "127.0.0.1:3307";
$db = "base_datos_ifts";
$user = "root";
$pas = "";

try {
    $conexion = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8', $user, $pas);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (Exception $e) {
    die("❌ Error de conexión: " . $e->getMessage());
}
?>