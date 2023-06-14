<?php
include "seguridad2.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
</head>
<body>

    <?php
      include "menu.php";
      ?>

    <div class="contenido">
      <br><br><br>
      <h2>Registro Usuarios</h2>
      <br><br><br>
      <form class="registroinv" action="registrar.php" method="post" enctype="multipart/form-data">
      <input type="mail" name="correo" id="correo" placeholder="Ingrese su correo*" required>
      <br>  
      <input type="text" id="user" name="user" placeholder="Nombre de usuario*" required>
      <br>
      <select name="rol" id="rol">
        <option value="">Seleccionar Rol</option>
        <option value="admin">Administrador</option>
        <option value="invitado">Usuario</option>
      </select>
        <br>
        <input type="password" name="pass" id="pass" placeholder="Contraseña*" required>
        <br>
        <input type="password" name="pass2" id="pass2" placeholder="Repita la contraseña*" required>
        <br><br>
        <label for="file-upload" class="custom-file-upload">
        <i class="fa fa-cloud-upload"></i> Subir foto de perfil
        </label>
        <input accept="image/*" name="imagen" id="file-upload" type="file"/>
        <br><br><br>
        <button type="submit" class="boton">Registrarse</button>
      </form>

    </div>


<?php
      include "footer.php";
      ?>

<script>
  // Obtener referencias a los elementos del formulario
  const passInput = document.getElementById('pass');
  const pass2Input = document.getElementById('pass2');
  const form = document.querySelector('.registroinv');

  // Agregar un evento submit al formulario
  form.addEventListener('submit', function(event) {
    // Verificar si las contraseñas no coinciden
    if (passInput.value !== pass2Input.value) {
      event.preventDefault(); // Detener el envío del formulario
      alert('Las contraseñas no coinciden');
    }
  });
</script>


</body>
</html>
