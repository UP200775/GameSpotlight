<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="../Css/formulario.css" th:href="@{/css/index.css}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>
    
    <div class="modal-dialog text-center">
        <div class="col-sm-10 main-section">
            <div  id="user-group">
                <h1 class="text-light">Unete a nuestra comunidad</h1> 
            </div>
            <div class="modal-content p-4">
                <form class="col-12" method="POST" class="needs-validation" onsubmit="return validarContrasena();">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder=" Nombre de usuario" name="nombre" required>
                         <small class="form-text text-danger" id="nombre-error"></small>
                    </div>
                    <div class="form-group" id="user-group">
                     <input type="email" class="form-control" placeholder="Correo Electronico" name="email" required/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" id="contrasena" required/>
                    </div>
                    <button  class="btn btn-primary" type="submit" ><i class="fas fa-sign-in-alt" ></i>  Registro </button>
                </form>
                <div class="col-12 forgot">
                    <a href="../Inicio y Registro de sesion/olvide.php">Olvide la contraseña</a>
                </div>
                <div class="col-12 forgot">
                    <a href="../Inicio y Registro de sesion/formulario.php">Inicia Sesion</a>
                </div>
            </div>
        </div>
    </div>

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

  function validarContrasena() {
            var contrasena = document.getElementById("contrasena").value;
            var regexMayuscula = /[A-Z]/;
            var regexEspecial = /[!@#$%^&*]/;

            if (contrasena.length < 4) {
                alert("La contraseña debe tener al menos 4 caracteres.");
                return false;
            }

            if (!regexMayuscula.test(contrasena)) {
                alert("La contraseña debe contener al menos una letra mayúscula.");
                return false;
            }
           /* if (!regexEspecial.test(contrasena)) {
                alert("La contraseña debe contener al menos un caracter especial (por ejemplo, !@#$%^&*).");
                return false;
            }
            return true;*/
        }
</script>
</body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Datos de conexión a la base de datos
$servername = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "gamespotlight";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$username = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST["contrasena"];
$hashSeguro = password_hash($password, PASSWORD_DEFAULT);
  $nombre = $_POST["nombre"];
    
    // Realiza cualquier procesamiento necesario con los datos enviados
    session_start();
    // Guardar el nombre en una sesión
    $_SESSION['nombre'] = $nombre;

    // Consulta para verificar si el nombre ya existe en la base de datos
    $query = "SELECT * FROM usuarios WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Si el nombre ya existe, mostrar un mensaje de error y redirigir al formulario nuevamente
        echo '<script>
        document.getElementById("nombre-error").innerText = "El nombre de usuario a existe";
      </script>';
    } else {
        $sql = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$hashSeguro')";
        $conn->query($sql);
        header("Location: redireccionamiento.php");
      
    }
    $conn->close();
}
// Cerrar conexión

?>
</html>