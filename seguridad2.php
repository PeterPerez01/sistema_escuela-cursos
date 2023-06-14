<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if($_SESSION["rol"]!="admin") {
    header("location: ./index.php");
    exit();
}

?>