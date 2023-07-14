<?php
$host = 'localhost:3307';
$user = 'root';
$password = '';
$database = 'gamespotlight';

$conexion = mysqli_connect($host, $user, $password, $database);

if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}

$id_archivo = 1; // ID del archivo que deseas recuperar

$sql = "SELECT Archivo_Articulo FROM articulos WHERE ID_Articulo = $id_archivo";
$resultado = mysqli_query($conexion, $sql);

if (!$resultado) {
    die('Error al obtener el archivo: ' . mysqli_error($conexion));
}

use PhpOffice\PhpWord\IOFactory;

$registro = mysqli_fetch_assoc($resultado);
$Archivo_Articulo = $registro['Archivo_Articulo'];

// Crear un archivo temporal para almacenar el contenido del documento Word
$tempFilePath = tempnam(sys_get_temp_dir(), 'word_');
file_put_contents($tempFilePath, base64_decode($Archivo_Articulo));

// Leer el documento Word y extraer su contenido
$phpWord = IOFactory::load($tempFilePath);
$contenido = $phpWord->getActiveSection()->getElements();

// Eliminar el archivo temporal
unlink($tempFilePath);

// Imprimir el contenido del documento en el iframe
echo '<iframe srcdoc="' . htmlentities(implode("", $contenido)) . '" width="100%" height="500px"></iframe>';


?>

<!DOCTYPE html>
<html>
<head>
    <title>Visor de Archivo Word</title>
</head>
<body>
    <h1>Contenido del Archivo Word</h1>
    <iframe src="data:application/vnd.openxmlformats-officedocument.wordprocessingml.document;base64,<?php echo base64_encode($Archivo_Articulo); ?>" width="100%" height="500px"></iframe>
</body>
</html>