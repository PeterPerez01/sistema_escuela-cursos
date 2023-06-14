<?php
include "seguridad2.php";
require "conexion.php";
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql2 = "DELETE FROM inscripcion WHERE curso='$id'";
    $sql = "DELETE FROM cursos WHERE id = '$id'";
    mysqli_query($conectar, $sql);
    mysqli_query($conectar, $sql2);
    echo "<script>
    alert('Se ha eliminado el Curso.');
    </script>";
    header("location: controlcursos.php");
} else {
    header("location: index.php");
}
?>