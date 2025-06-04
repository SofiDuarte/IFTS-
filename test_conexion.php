<?php
try {
    $conexion = new PDO("mysql:host=127.0.0.1;port=3307;dbname=base_datos_ifts;charset=utf8", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}
?>
