
<html lang="es-MX">
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
      <br><br>
      <div class="iniciosesion">
      <h2>Registro</h2>
      <br><br><br>
      <form class="registroinv" action="registrar.php" method="post" enctype="multipart/form-data">
      <input type="email" name="correo" id="correo" placeholder="Ingrese su correo*" required>
      <br>  
      <input type="text" id="user" name="user" placeholder="Nombre de usuario*" required>
        <br>
        <input type="password" name="pass" id="pass" placeholder="Contraseña*" required>
        <br>
        <input type="password" name="pass2" id="pass2" placeholder="Repita la contraseña*" required>
        <br><br>
        <label for="file-upload" class="custom-file-upload">
        <i class="fa fa-cloud-upload"></i> Subir foto de perfil
        </label>
        <input required accept="image/*" name="imagen" id="file-upload" type="file"/>
        <br><br><br>
        <button onclick="validarContraseña()" type="submit" class="boton">Registrarse</button>
      </form>
      </div>
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

  function validarContraseña() {
  var password = document.getElementById("pass").value;
  var password2 = document.getElementById("pass2").value;

  if (password.length < 8 || !password.match(/^[a-zA-Z0-9]+$/)) {
    alert("La contraseña debe tener al menos 8 caracteres alfanuméricos.");
    return false;
  }

  if (password !== password2) {
    alert("Las contraseñas no coinciden.");
    return false;
  }
}
</script>


</body>
</html>
