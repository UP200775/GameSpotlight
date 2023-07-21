<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<<<<<<< Updated upstream
    <link rel="stylesheet" type="text/css" href="../Css/formulario.css" th:href="@{/css/index.css}">
=======
    <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\GameSpotlight-main\Css\formulario.css" th:href="@{/css/index.css}">
>>>>>>> Stashed changes
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>
    <script src="main.js"></script>
    
    <div class="modal-dialog text-center">
        <div class="col-sm-10 main-section">
            <div  id="user-group">
                <h1 class="text-light">Crea una Cuenta ahora, unete a nuestra comunidad</h1> 
            </div>
            <div class="modal-content p-4">
                <form class="col-12" method="POST">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder=" Nombre de usuario" name="nombre"/>
                    </div>
                    <div class="form-group" id="user-group">
                     <input type="text" class="form-control" placeholder="Correo Electronico" name="email"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Repite la Contraseña" name="password"/>
                    </div>
                    <button  class="btn btn-primary" onclick="location.href=''" ><i class="fas fa-sign-in-alt" ></i>  Registro </button>
                </form>
                <div class="col-12 forgot">
                    <a href="../Inicio y Registro de sesion/olvide.html">Olvide la contraseña</a>
                </div>
                <div class="col-12 forgot">
                    <a href="../Inicio y Registro de sesion/formulario.html">Inicia Sesion</a>
                </div>
             
      
            </div>
        </div>
    </div>
</body>
<?php
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

echo "<div class='trabajador'>Conexión exitosa";

// Obtener los datos del formulario
$username = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST["password"];
$hashSeguro = password_hash($password, PASSWORD_DEFAULT);

// Consulta SQL para insertar los datos en la tabla "comunicate"
$sql = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$hashSeguro')";

if ($conn->query($sql) === TRUE) {
    echo "<p>Datos insertados correctamente.</p>";
    header("Location: formulario.php");

} else {
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
</html>