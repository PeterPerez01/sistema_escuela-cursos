<?php
include "seguridad.php";?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
</head>
<body>

    <?php
      include "menu.php";
      ?>

    <div class="contenido">
    <br><br><h2 style="font-size: 40px;">Cursos</h2><br><br>
  
    <?php 
    include "conexion.php";
    $cursos = mysqli_query($conectar, "SELECT * FROM cursos");
    while ($fila = mysqli_fetch_assoc($cursos)) {
      echo '<div class="curso">';
      echo '<h1>'.$fila["nombre"].'</h1><hr><br>
      <div class="centrar">';
      echo '<img class="cursofoto" src="data:image/jpeg;base64,' . base64_encode($fila["foto"]) . '"/>';
      echo '</div><br><br>
      <h2>Descripción:</h2>
      <p class="blanco">'.$fila["descripcion"].'</p> <br>
      <div class="centrar"><h2>Profesor:</h2>';
      echo '<h4>'.$fila["profe"].'</h4><br><br>';
      echo '<h2>Vacantes:</h2> <label class="precio">',$fila["vacantes"].'</label><br><br>';
      echo '<h2>Precio:</h2> <p class="blanco">$'.$fila["precio"].'</p>';
      echo '<br><br>
      <a href="#" onclick="confirmarInscripcion('.$fila["id"].')" class="boton">Agregar</a>
    </div><br><br><br>
    </div>
    <br><br><br><br><br>';

    }
    ?>
    


    
<footer>
<?php
      include "footer.php";
      ?></footer>
      <script>
function confirmarInscripcion(id) {
    if (confirm("¿Estás seguro de que deseas inscribirte?")) {
        // Si el usuario hace clic en "Aceptar", redirige a la página de inscripción
        window.location.href = "cargar.php?id=" + id;
    } else {
        // Si el usuario hace clic en "Cancelar", no se realiza ninguna acción
        return false;
    }
}
</script>
</body>
</html>
