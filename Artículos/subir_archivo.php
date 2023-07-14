<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost:3307", "root", "", "gamespotlight");

// Verificar si se realizó la conexión correctamente
if ($conexion->connect_error) {
  die("Error en la conexión: " . $conexion->connect_error);
}

// Obtener el contenido del archivo subido
$contenidoArchivo = file_get_contents($_FILES["archivo"]["tmp_name"]);

// Preparar la consulta SQL para insertar el contenido del archivo en la base de datos
$sql = "INSERT INTO documentos (archivo) VALUES (?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("b", $contenidoArchivo);
$stmt->execute();

// Verificar si se insertó correctamente
if ($stmt->affected_rows > 0) {
  echo "El archivo se ha subido correctamente.";
} else {
  echo "Error al subir el archivo.";
}

// Cerrar la conexión y liberar recursos
$stmt->close();
$conexion->close();
?>
