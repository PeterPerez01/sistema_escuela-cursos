<?php
include "seguridad.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_GET["id"])) {
    header("Location: index.php");
}
$usuario = $_SESSION["user"];
$cursoid = $_GET["id"];
$cursoid = intval($cursoid);
include "conexion.php";
$verificacion = mysqli_query($conectar, "SELECT * FROM inscripcion WHERE curso='$cursoid' AND user='$usuario'");
if (mysqli_num_rows($verificacion) < 1) {
    $sql = "INSERT INTO inscripcion (curso, user) VALUES ('$cursoid', '$usuario')";
    mysqli_query($conectar, $sql);
    echo "<script>alert('Se registró correctamente en el curso.');</script>";
    header("Location: inscripcion.php");
} else {
    echo "<script>alert('Ya te encuentras inscrito a este curso');</script>";
    header("Location: inscripcion.php");
}
?>
