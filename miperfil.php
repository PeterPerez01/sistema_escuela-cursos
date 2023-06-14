<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
</head>
<body>

    <?php
    include "menu.php";
    include "seguridad.php";
    ?>


    <div class="contenido">
        <br><br>
        <div class="curso">
    <h2>Mi perfil</h2>
    <br><br>
    <?php
    echo '<h4>Usuario: '.$_SESSION["user"].'</h4>';
    echo '<h4>Rol: '.$_SESSION["rol"].'</h4>';
    echo '<h4>Correo: '.$_SESSION["correo"].'</h4>';
    echo '<h4>Usuario: '.$_SESSION["user"].'</h4>';
    echo '<img class="contactofoto" src="data:image/jpeg;base64,' . base64_encode($_SESSION["foto"]) . '"/>';
    ?>
    </div>
</div>
    <?php
    include "footer.php";
    ?>

    
</body>
</html>