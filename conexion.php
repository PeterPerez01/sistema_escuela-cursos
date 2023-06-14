<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "biromusic";

$conectar = mysqli_connect($host, $user, $pass, $db);

if($conectar) {
    #echo "Conectado";
} else {
    echo "Error al conectar a la base de datos";
}
?>