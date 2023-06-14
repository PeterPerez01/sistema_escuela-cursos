<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if($_SESSION["autenticado"]!="OK") {
    header("location: ./index.php");
    exit();
}

?>