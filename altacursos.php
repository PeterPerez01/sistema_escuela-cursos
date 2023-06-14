<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Cursos</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
    include "menu.php";
    ?>
    
    <div class="contenido"><br><br>
        <div class="cart">
        <br><br>
        <h2>Alta de Cursos</h2>
        <form action="nuevocurso.php" method="post" enctype="multipart/form-data" class="registroinv">
            <input type="text" placeholder="Nombre*" id="nombre" name="nombre" required>
            <br>
            <input type="text" placeholder="Profesor*" id="profe" name="profe" required>
            <br>
            <input type="text" placeholder="Precio*" id="precio" name="precio" oninput="validarNumero(event)" required>
            <br>
            <input type="number" placeholder="Vacantes*" name="vacantes" id="vacantes" required>
            <br>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
            <br><br>
            <label for="file-upload" class="custom-file-upload">
        <i class="fa fa-cloud-upload"></i> Subir portada de curso
        </label>
        <input accept="image/*" name="imagen" id="file-upload" type="file"/>
        <br><br><br>
        <button type="submit" class="boton">Enviar</button>
        <br><br>
        </form>
    </div></div>


    <?php
    include "footer.php";
    ?>

<script>
function validarNumero(event) {
    const input = event.target;
    const regex = /^\d*\.?\d*$/;

    const inputValue = input.value;
    if (!regex.test(inputValue)) {
        input.value = inputValue.slice(0, -1);
    }
}

</script>
</body>
</html>