<?php
try {
    $conexion = new PDO("mysql:host=localhost;dbname=base_datos_ifts;charset=utf8", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// RECOLECTA DATOS DEL FORMULARIO
$carrera = $_POST['carrera'] ?? '';
$titulo = $_POST['titulo'] ?? '';
$resumen = $_POST['resumen'] ?? '';
$contenido = $_POST['contenido'] ?? '';
$categoria_id = $_POST['categoria_id'] ?? '';
$fecha = date("Y-m-d H:i:s");

// INSERTAR EN TABLA NOTICIAS
$sql = "INSERT INTO noticias (carrera, titulo, contenido, resumen, fecha_publicacion) 
        VALUES (:carrera, :titulo, :contenido, :resumen, :fecha)";
$stmt = $conexion->prepare($sql);
$stmt->execute([
    ':carrera' => $carrera,
    ':titulo' => $titulo,
    ':contenido' => $contenido,
    ':resumen' => $resumen,
    ':fecha' => $fecha
]);

// OBTENER ID DE NOTICIA RECIEN CREADA
$noticia_id = $conexion->lastInsertId();

// INSERTAR EN TABLA NOTICIAS_CATEGORIAS
$sql_cat = "INSERT INTO noticias_categorias (noticia_id, categoria_id) VALUES (:noticia_id, :categoria_id)";
$stmt_cat = $conexion->prepare($sql_cat);
$stmt_cat->execute([
    ':noticia_id' => $noticia_id,
    ':categoria_id' => $categoria_id
]);

// CONFORMAR GUARDADO Y VOLVER
echo "<script>alert('Noticia guardada con éxito'); window.location.href='resaltar_textos.php';</script>";
?>