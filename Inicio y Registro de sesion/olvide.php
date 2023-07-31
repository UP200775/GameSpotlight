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
    <script src="main.js"></script>
    
    <div class="modal-dialog text-center">
        <div class="col-sm-10 main-section">
            <div  id="user-group">
                <h1 class="text-light">Has olvidado la contraseña, introduce los siguientes datos</h1> 
            </div>
            <div class="modal-content p-4" id="forms">
                <form class="col-12" method="POST" class="needs-validation">
                <div class="form-group" id="user-group">
                     <input type="email" class="form-control" placeholder="Correo Electronico" name="email" required/>
                    </div>
                    <button  class="btn btn-primary" type="submit" ><i class="fas fa-sign-in-alt" ></i>  Buscar Cuenta </button>
                </form>
                </form>
                <div class="col-12 forgot">
                    <a href="../Inicio y Registro de sesion/formulario.php">Inicia Sesion</a>
                </div>
             
                <div class="col-12 forgot">
                    <a href="../Inicio y Registro de sesion/registro.php">Registrate</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Datos de conexión a la base de datos
$servername = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "gamespotlight";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
$email = $_POST["email"];
$emailsesion = $_POST["email"];
$_SESSION['email'] = $emailsesion;
$query = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
   
    header("Location: enviodecorreo.php");
} else {
    
}
    $conn->close();
}

?>
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