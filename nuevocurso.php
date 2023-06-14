<?php 
include "seguridad2.php";
require "conexion.php";
$nombre = $_POST["nombre"];
$profe = $_POST["profe"];
$precio = $_POST["precio"];
$vacantes = $_POST["vacantes"];
$descripcion = $_POST["descripcion"];

// Procesar la imagen
$imagen = $_FILES["imagen"]["tmp_name"];

// Leer el contenido de la imagen
$imagenContenido = file_get_contents($imagen);

$stmt = $conectar->prepare("INSERT INTO cursos (nombre, profe, precio, vacantes, descripcion, foto) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $nombre, $profe, $precio, $vacantes, $descripcion, $imagenContenido);
echo "<script>alert('Se registró el curso correctamente.');</script>";
if ($stmt->execute()) {
    echo "<script>alert('Se registró el curso correctamente.');</script>";
} else {
    echo "<script>alert('Ocurrió un error.');</script>";
}

$stmt->close();
$conectar->close();
header("location: altacursos.php");
?>
