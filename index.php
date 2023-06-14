<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
      include "menu.php";
      ?>
    <div id="video-container contenido">
        <video id="video-background" autoplay loop muted>
          <source src="./vids/videofondo.mp4" type="video/mp4">
        </video>
        <div class="content">
            <br><br>
            <h3>Bienvenido a BiroMusic <i class="fa-solid fa-music chico"></i></h3>
            <h2 class="portada">Tu mejor opción para aprender música.</h2>
            <br><br>
            <?php
            if (session_status() == PHP_SESSION_NONE) {
              session_start();
          }
          if(!isset($_SESSION["autenticado"])){
            echo '<a class="boton" type="button" href="register.php">Registrarte</a>';
          } else {
            echo '<h2 class="rojo abajo">Bienvenido de nuevo '.$_SESSION["user"].'</h2>';
          }
            ?>
            
            <br><br>
      </div>
          
      <?php
      include "footer.php";
      ?>

</body>
</html>