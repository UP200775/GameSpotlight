<?php
// Datos de conexión a la base de datos
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "gamespotlight";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa";

$sql = "SELECT * FROM articulos";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $Nombre_Articulo = $row["Nombre_Articulo"]; // Reemplaza "titulo" por el nombre de la columna correspondiente en tu tabla
    $Autor = $row["Autor"]; // Reemplaza "descripcion" por el nombre de la columna correspondiente en tu tabla

    // Crea una tarjeta de Bootstrap por cada artículo
    echo '<div class="col-md-4">';
    echo '<div class="card">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $Nombre_Articulo . '</h5>';
    echo '<p class="card-text">' . $Autor . '</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}



// Cerrar conexión
$conn->close();
?>
