<!DOCTYPE html>
<HTML lang="en">

<head>
    <meta charset="UTF=-8">
    <META name="viewport" content="width=device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Comunicate</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Header/Header.css"> 
    <link rel="stylesheet" href="../Css/trabajadores.css">
    <link rel="stylesheet" href="../Footer/estilos.css">
</head>
<header>
<?php require_once'../Header/Header.php'; ?>
</header>
<?php
// Datos de conexión a la base de datos
$servername = "localhost";
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
  <?php require_once '../Footer/footer.html'; ?>
</footer>

</html>