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

<header class="p-3 text-bg-dark">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <a href="../../Home.html" class="nav-link  text-white">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <img src="../Imagenes/logo.png" alt="Bootstrap" width="70" height="70">
      </button>
      </a>
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="../Artículos/Artículos.php" class="nav-link px-2 text-white">Articulos</a></li>
        <li><a href="../Videojuegos/videojuegos.html" class="nav-link px-2 text-white">Videojuegos</a></li>
        <li><a href="../Staff/Staff.php" class="nav-link px-2 text-white">Staff</a></li>
        <li><a href="../Comunicate/Comunicate.php" class="nav-link px-2 text-white">Comunicate</a></li>
      </ul>

      <div class="text-end">
        <button type="button" class="btn btn-outline-primary me-2" onclick="location.href='formulario.html'">Inicia Sesión</button>
        <button type="button" class="btn btn-warning" onclick="location.href='formulario.html'">Regístrate</button>
      </div>
    </div>
  </div>
</header>
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
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$numero = $_POST["numero"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];

// Consulta SQL para insertar los datos en la tabla "comunicate"
$sql = "INSERT INTO comunicate (nombre, apellidos, numero, correo, mensaje) VALUES ('$nombre', '$apellidos', '$numero', '$correo', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "<p>Datos insertados correctamente.</p>";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>

<p><button type="button" class="btn btn-primary" onclick="location.href='../Comunicate/Comunicate.php'">Aceptar</button></p></div>

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