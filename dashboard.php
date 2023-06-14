<?php
require "seguridad2.php";
?>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
    include "menu.php";
    ?>

    <div class="contenido">
        <br><br>
        <a class="cart dash" href="controlusuarios.php">
            <br><br><br>
        <i class="fa fa-users fa-5x" aria-hidden="true"></i>
        <br><br><br>
        <h1>Control de Usuarios</h1>
        </a>
        <a class="cart dash" href="registrouser.php">
            <br><br><br>
        <i class="fa fa-user fa-5x" aria-hidden="true"></i>
        <br><br><br>
        <h1>Alta de Usuarios</h1>
        </a>
        <a class="cart dash" href="controlcursos.php">
            <br><br><br>
        <i class="fa fa-address-book fa-5x" aria-hidden="true"></i>
        <br><br><br>
        <h1>Control de Cursos</h1>
        </a>
        <a class="cart dash" href="altacursos.php">
            <br><br><br>
        <i class="fa fa-school fa-5x" aria-hidden="true"></i>
        <br><br><br>
        <h1>Alta de Cursos</h1>
        </a>
        <a class="cart dash" href="alumnos.php">
            <br><br><br>
        <i class="fa fa-pencil fa-5x" aria-hidden="true"></i>
        <br><br><br>
        <h1>Alumnos Inscritos</h1>
        </a>
        <a class="cart dash" href="finanzas.php">
            <br><br><br>
        <i class="fa fa-dollar fa-5x" aria-hidden="true"></i>
        <br><br><br>
        <h1>Finanzas</h1>
        </a>

    </div>

    <?php
    include "footer.php";
    ?>
    
</body>
</html>