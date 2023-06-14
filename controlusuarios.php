<?php
include "seguridad2.php";
include "menu.php";

?>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Usuarios</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="contenido">
    <br><br>
    <h2>Control de Usuarios</h2>
    <br><br><br>
    <?php
    include "conexion.php";
    echo "<table class='tabla'>";
    echo "<tr><th>ID</th><th>Usuario</th><th>Contraseña</th><th>Foto de Perfil</th><th>Rol</th><th>Correo</th><th>Eliminar</th></tr>";
    $sql = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conectar, "SELECT * FROM usuarios");
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr><td>" . $fila["id"] . "</td>";
        echo "<td>" . $fila["user"] . "</td>";
        echo "<td>" . $fila["pass"] . "</td><td>";
                if($fila["pp"]){
                echo '<img class="contactofoto" src="data:image/jpeg;base64,' . base64_encode($fila["pp"]) . '"/>';
            }else { echo '<img class="contactofoto" src="img/nopp.jpg">';
                    }

        echo "</td><td>" . $fila["rol"] . "</td>";
        echo "<td>" . $fila["correo"] . "</td>";
        echo "<td><a class='rojo' href='#' onClick=\"validar('borrar.php?id=" . $fila['id'] ."')\">X</a></td>";

    }
    ?>
    </table>

    </div>
    <?php
    include "footer.php";
    ?>


<script>
        function validar(url) {
            var eliminar = confirm("¿Estás seguro?");
            if(eliminar==true){
                window.location=url;
            } else {
                alert("Operación cancelada.");
            }
       }
    </script>

</body>
</html>