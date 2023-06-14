<?php 
require "conexion.php";

if(!isset($_POST["correo"])&&!isset($_POST["user"])&&!isset($_POST["pass"])||$_POST["correo"]==null){
    echo "<script>history.back();</script>";
}

        $correo = $_POST["correo"];
        $username = $_POST["user"];
        $contrasena = $_POST["pass"];

        $destino = $correo;
        $asunto = "Gracias por unirte a BiroMusic";

        $nombre = "BiroMusic";
        $correo2 = "noreply-biromusic@birosoft.com";
        
        $contenido = "<b>¡Te damos la bienvenida a BiroMusic, estamos felices de que seas parte de esta nueva experiencia en Aprendizaje Musical!</b>
        <br><h1>".$username."</h1>";

        $encabezados = "MIME-Version: 1.0"."\r\n";
        $encabezados .= "Content-type:text/html charset=UTF-8"."\r\n";
        $encabezados .= "From: ".$correo2."\r\n";


        // FUNCION DE ENVIAR MENSAJE POR EMAIL
        mail($destino, $asunto, $contenido, $encabezados);











if(isset($_POST["rol"])){
    $rol=$_POST["rol"];
} else {
    $rol="invitado";
}

$imagen = $_FILES["imagen"]["tmp_name"];

$imagenContenido = file_get_contents($imagen);

$stmt = $conectar->prepare("INSERT INTO usuarios (correo, user, pass, pp, rol) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $correo, $username, $contrasena, $imagenContenido, $rol);
echo "<script>alert('Se registró correctamente.');</script>";
echo "<script>alert('Se te envió un correo de confirmación.');</script>";
if ($stmt->execute()) {
    echo "<script>alert('Se registró correctamente.');</script>";
    echo "<script>alert('Se te envió un correo de confirmación.');</script>";
} else {
    echo "<script>alert('Ocurrió un error.');</script>";
}

$stmt->close();
$conectar->close();
header("location: login.php?confirm");
?>
