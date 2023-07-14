<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost:3307", "root", "", "gamespotlight");

// Verificar si se realizó la conexión correctamente
if ($conexion->connect_error) {
  die("Error en la conexión: " . $conexion->connect_error);
}

// Obtener el contenido del archivo desde la base de datos
$sql = "SELECT articulos FROM Archivo_Articulo WHERE ID_Articulo = ? LIMIT 1";
$stmt = $conexion->prepare($sql);
$idDocumento = 1; // ID del documento que deseas mostrar (puedes obtenerlo de alguna manera)
$stmt->bind_param("i", $idDocumento);
$stmt->execute();
$stmt->bind_result($contenidoArchivo);
$stmt->fetch();

// Mostrar el contenido del archivo
header("Content-type: application/msword");
echo $contenidoArchivo;

// Cerrar la conexión y liberar recursos
$stmt->close();
$conexion->close();
?>
