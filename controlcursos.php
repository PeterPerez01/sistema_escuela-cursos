<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Cursos</title>
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
        <h2>Control de Cursos</h2><br>
        <?php
    include "conexion.php";
    echo "<table class='tabla'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Foto</th><th>Descripción</th><th>Vacantes</th><th>Precio</th><th>Profesor</th><th>Eliminar</th></tr>";
    $sql = "SELECT * FROM cursos";
    $resultado = mysqli_query($conectar, $sql);
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr><td>" . $fila["id"] . "</td>";
        echo "<td>" . $fila["nombre"] . "</td>";
        echo "<td>";
                if($fila["foto"]){
                echo '<img class="contactofoto" src="data:image/jpeg;base64,' . base64_encode($fila["foto"]) . '"/>';
            }else { echo '<img class="contactofoto" src="img/nopp.jpg">';
                    }

        echo "</td><td>" . $fila["descripcion"] . "</td>";
        echo "<td>" . $fila["vacantes"] . "</td>";
        echo "<td>" . $fila["precio"] . "</td>";
        echo "<td>" . $fila["profe"] . "</td>";
        echo "<td><a class='rojo' href='#' onClick=\"validar('borrarcurso.php?id=" . $fila['id'] ."')\">X</a></td>";

    }
    ?>
    </table><br><br><br>
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