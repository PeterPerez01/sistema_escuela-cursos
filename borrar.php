<?php
include "seguridad2.php";
require "conexion.php";
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $select = "SELECT * FROM usuarios WHERE id= '$id'";
    $res = mysqli_query($conectar, $select);
    while ($fila = mysqli_fetch_assoc($res)) {
        $user = $fila["user"];
        $sql2 = "DELETE FROM inscripcion WHERE user='$user'";
    }
    $sql = "DELETE FROM usuarios WHERE id = '$id'";
    mysqli_query($conectar, $sql);
    mysqli_query($conectar, $sql2);
    echo "<script>
    alert('Se ha eliminado el usuario.');
    </script>";
    header("location: controlusuarios.php");
} else {
    header("location: index.php");
}
?>