<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripción</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
</head>
<body>

    <?php
      include "seguridad.php";
      include "menu.php";

      echo '<div class="contenido"><br><br>
      <h1>Inscripción</h1>
      <h2>Cursos Inscritos</h2>
      <br><br><br><br>';
      $usuarioact = $_SESSION["user"];
      include "conexion.php";
      $cursos = mysqli_query($conectar, "SELECT * FROM inscripcion WHERE user='$usuarioact'");
      while ($fila = mysqli_fetch_assoc($cursos)) {
        $idcur=$fila["curso"];
        $curs = mysqli_query($conectar, "SELECT * FROM cursos WHERE id='$idcur'");
        while ($fila2 = mysqli_fetch_assoc($curs)) {
          echo '<div class="cart"><br><br>
      <h2>'.$fila2["nombre"].'</h2>';
          
      echo '<img class="imgcart" src="data:image/jpeg;base64,' . base64_encode($fila2["foto"]) . '"/><br><br>';
      echo '<label class="precio" for="precio">Precio: $'.$fila2["precio"].'</label><br><br>';
      echo '<a href="#" onclick="confirmarBaja('.$fila["id"].')" class="rojo">Dar de baja</a><br><br>
      </div>';
    }
      
    }

      ?>

      <br><br>
      <h1>Ubicación:</h1>
      <br>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.74040386085736!2d-89.65060747883747!3d21.038828591222828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56755e68a54a07%3A0x3d7f1813c88108ae!2sCOMPUFAST%20MERIDA!5e0!3m2!1ses!2smx!4v1685966634688!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br><br><br>
      
      
        
    




    </div>
<?php
      include "footer.php";
      ?>

<script>
function confirmarBaja(id) {
    if (confirm("¿Estás seguro de que deseas darte de baja?")) {
        // Si el usuario hace clic en "Aceptar", redirige a la página PHP que realiza la eliminación
        window.location.href = "eliminar.php?borrar=" + id;
    } else {
        // Si el usuario hace clic en "Cancelar", no se realiza ninguna acción
        return false;
    }
}
</script>
</body>
</html>
