<!DOCTYPE html>
<HTML lang="en">

<head>
    <meta charset="UTF=-8">
    <META name="viewport" content="width=device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Comunicate</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/staff.css">

  
</head>

<header>
<?php include '../Header/headers/index.php'; ?>
</header>
<body>
  <main class="container">
    <div class="row nosotros justify-content-center">
      <div class="col-12 text-center">
        <h2 class="titulito"><span>Comunica tus ideas con nosotros</span></h2>
        <form class="needs-validation" action="../php/insertar.php" method="POST" novalidate>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
            <div class="invalid-feedback">Por favor, ingresa tu nombre.</div>
          </div>

          <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos:</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            <div class="invalid-feedback">Por favor, ingresa tus apellidos.</div>
          </div>

          <div class="mb-3">
            <label for="numero" class="form-label">Número:</label>
            <input type="number" class="form-control" id="numero" name="numero" required>
            <div class="invalid-feedback">Por favor, ingresa tu número de teléfono.</div>
          </div>

          <div class="mb-3">
            <label for="correo" class="form-label">Correo:</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
            <div class="invalid-feedback">Por favor, ingresa una dirección de correo válida.</div>
          </div>

          <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje:</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
            <div class="invalid-feedback">Por favor, ingresa un mensaje.</div>
          </div>

          <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
      </div>
    </div>
  </main>

  <script src="main.js"></script>

  <script>
    // Validación de formularios utilizando Bootstrap
    (function () {
      'use strict';

      // Obtiene todos los formularios a los que se les aplicará la validación
      var forms = document.querySelectorAll('.needs-validation');

      // Itera sobre cada formulario y previene su envío en caso de ser inválido
      Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }

          form.classList.add('was-validated');
        }, false);
      });
    })();
  </script>
</body>

<footer>
  <link rel="stylesheet" href="../Css/footer.css">
  <div class="footer-container">
    <div class="logo">
      <img src="../Imagenes/logo.png" alt="Logo de la empresa">
    </div>
    <div>
      2023 © GameSpotlight
    </div>
    <div class="redes-sociales">
      <a href="enlace-a-red-social"><img src="../Imagenes/facebook.png"></a>
      <a href="enlace-a-red-social"><img src="../Imagenes/instagram.png"></a>
      <a href="enlace-a-red-social"><img src="../Imagenes/twitter.png"></a>
    </div>
  </div>
</footer>

</html>
