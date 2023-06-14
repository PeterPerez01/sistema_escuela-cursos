<?php
include "seguridad.php";
if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
require "conexion.php";
      if(isset($_GET["borrar"])) {
        $borrar = $_GET["borrar"];
        if(!isset($_GET["user"])){
        $usuario = $_SESSION["user"];
      } else {
        $usuario=$_GET["user"];
      }

        $sql = "DELETE FROM inscripcion WHERE id = '$borrar' AND user = '$usuario'";
        mysqli_query($conectar, $sql);
      }

      echo "<script>history.back();</script>";
      ?>