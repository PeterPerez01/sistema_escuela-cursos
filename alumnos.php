<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
</head>

<body>
    <?php
    include "seguridad2.php";
    include "menu.php";
    ?>

    <div class="contenido">
        <br><br>
        <br><br>
        <h2>Alumnos Inscritos</h2>
        <br>
        <?php
        include "conexion.php";
        echo "<table class='tabla'>";
        echo "<tr><th>Curso</th><th>Usuario</th><th>Eliminar</th></tr>";
        $sql = "SELECT * FROM inscripcion";
        $resultado = mysqli_query($conectar, $sql);
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $id = $fila["curso"];
            $sql2 = "SELECT * FROM cursos WHERE id='$id'";
            $resultado2 = mysqli_query($conectar, $sql2);
            while ($fila2 = mysqli_fetch_assoc($resultado2)) {
                echo "<tr><td>" . $fila2["nombre"] . "</td>";
                echo "<td>" . $fila["user"] . "</td><td>";
                echo '<a href="#" onclick="confirmarBaja(' . $fila["id"] . ', \'' . $fila["user"] . '\')" class="rojo">Dar de baja</a></td></tr>';
            }
        }
        echo "</table>";
        ?>
    </div>

    <?php
    include "footer.php";
    ?>

    <script>
        function confirmarBaja(id, user) {
            if (confirm("¿Estás seguro de que deseas dar de baja a este usuario?")) {
                window.location.href = "eliminar.php?borrar=" + id + "&user=" + user;
            } else {
                return false;
            }
        }
    </script>
</body>

</html>
