<?php
$archivo = 'hola.txt';

// Verificar si el archivo existe
if (file_exists($archivo)) {
    // Leer el contenido del archivo
    $contenido = file_get_contents($archivo);

    // Mostrar el contenido
    echo $contenido;
} else {
    echo 'El archivo no existe.';
}
?>
