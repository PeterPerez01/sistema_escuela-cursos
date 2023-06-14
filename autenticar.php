<?php 
$usuario = addslashes($_POST['user']);
$contrasena = addslashes($_POST['pass']);

echo "<b> Usuario: </b>".$usuario."<br><b> Contraseña: </b>".$contrasena;

require "conexion.php";

$sql = "SELECT * FROM usuarios WHERE user = '$usuario' AND pass = '$contrasena'";

$resultado = mysqli_query($conectar, $sql);


if(mysqli_num_rows($resultado)>0) {
    session_start();
    $_SESSION["autenticado"] = "OK";

    while ($fila = mysqli_fetch_assoc($resultado)) {
        $_SESSION["user"]=$fila["user"];    
        $_SESSION["rol"]=$fila["rol"];    
        $_SESSION["correo"]=$fila["correo"];    
        $_SESSION["foto"]=$fila["pp"];    
    }

    header("location: index.php");
} else {

    echo "<script>
    alert('El usuario o la contraseña no coinciden');
</script>";
    header("location: ./login.php?error='error'");
    
}

mysqli_free_result($resultado);
mysqli_close($conectar);

?>

