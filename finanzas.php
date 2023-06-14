
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finanzas</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
    include "seguridad2.php";
    include "menu.php";
    $money=0;
    ?>
    
    <div class="contenido">
        <br><br>
        <div class="cart">
        <br><br>
    <i class="fa fa-tags fa-5x blanco" aria-hidden="true"></i>
        <br><br><br>
        <?php
        require "conexion.php";
        $sql = "SELECT * FROM inscripcion";
        $res = mysqli_query($conectar, $sql);
      while ($fila = mysqli_fetch_assoc($res)) {
        $id=$fila["curso"];
        $sql2 = "SELECT precio FROM cursos WHERE id='$id'";
        $resultado = mysqli_query($conectar, $sql2);
        $row = mysqli_fetch_assoc($resultado);

        $dinerito = $row['precio'];
        $money += $dinerito;
      }
      echo '<h2>Total Acumulado:</h2>
      <h3>$'.$money.'</h3>'.'<br><p class="blanco">En inscripciones hasta el momento</p><br><br>';
        ?>
    </div></div>



    <?php
    include "footer.php";
    ?>
</body>
</html>