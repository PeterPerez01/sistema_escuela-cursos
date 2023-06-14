<?php
include "noreg.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
</head>
<body>

    <?php
      include "menu.php";
      ?>

    <div class="contenido">
    <br><br><br><br><br><br>
    <div class="iniciosesion">
      <?php
      if(isset($_GET["confirm"])){
        echo "<script>alert('Se registró correctamente.');</script>";
    echo "<script>alert('Se te envió un correo de confirmación.');</script>";
      }
      ?>
    <form action="autenticar.php" method="post">
        <h4>Iniciar Sesión</h4>
        <br><br>
        <input type="text" required name="user" id="user" placeholder="Usuario"> <br>
        <input type="password" required name="pass" id="pass" placeholder="Contraseña"><br>
        <?php 
          if(isset($_GET["error"])){
            echo '<label for="error" class="rojo">ERROR AL INICIAR SESIÓN VERIFIQUE LOS DATOS.</label>';
          }
          ?><br>
        <button type="submit" class="boton">Entrar</button>
    </form>
    </div>

    </div>


<?php
      include "footer.php";
      ?>
</body>
</html>
