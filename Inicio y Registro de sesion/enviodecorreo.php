<?php
session_start();
function generateToken($length = 32) {
    $randomBytes = random_bytes($length);
    $token = bin2hex($randomBytes);
    return $token;
}
$token = generateToken();
$url = "token.php";

if (strpos($url, "?") !== false) {
    // Si la URL ya tiene parámetros, agregamos el token con "&"
    $url .= "&token=" . $token;
} else {
    // Si la URL no tiene parámetros, agregamos el token con "?"
    $url .= "?token=" . $token;
}

function addOneHourToCurrentTime() {
    // Obtener la hora actual en formato de objeto DateTime
    $currentTime = new DateTime();
    // Sumar una hora al tiempo actual
    $currentTime->add(new DateInterval('PT5M')); // PT1H representa una hora (1 hour) en formato de intervalo de tiempo

    // Devolver la hora actual sumada con una hora
    return $currentTime->format('Y-m-d H:i:s'); // Devuelve la hora en formato "YYYY-MM-DD HH:mm:ss"
}
$time = addOneHourToCurrentTime();


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
$nombre = $_SESSION['email'] ?? 'Desconocido';
$funcion="contra";
$query = "INSERT INTO tokens (token,funcion, fecha_exp,correo_electronico) VALUES ('$token','$funcion','$time','$nombre')";
$result = $conn->query($query);

// Obtener el nombre desde la sesión

$enlaceRecuperacion = 'facebook.com';
// Limpiar la sesión para eliminar los datos almacenados
unset($_SESSION['nombre']);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Cargar las clases de PHPMailer
require '../Biblioteca correo/PHPMailer-master/src/PHPMailer.php';
require '../Biblioteca correo/PHPMailer-master/src/SMTP.php';
require '../Biblioteca correo/PHPMailer-master/src/Exception.php';
// Crear una nueva instancia de PHPMailer
$mail = new PHPMailer();

// Configurar el servidor SMTP para Gmail
$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'up200994@alumnos.upa.edu.mx'; // Tu dirección de correo de Gmail
$mail->Password   = 'Rayos123a'; // Tu contraseña de Gmail
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Usar SSL (recomendado) o TLS
$mail->Port       = 587; // Puerto para TLS (587) o SSL (465)

// Establecer el remitente y destinatario
$mail->setFrom('up200994@alumnos.upa.edu.mx', 'Tu fer');
$mail->addAddress($nombre, 'archivo enviado');

// Asunto y cuerpo del correo
$mail->Subject = 'Recuperación de contraseña para su cuenta en Nombre de la Empresa';
$mail->Body    = 'Entra en el siguiente link para obtener tu nueva contraseña http://localhost/Gamespotlight/Inicio%20y%20Registro%20de%20sesion/funciones/'.$url;

// Enviar el correo
if ($mail->send()) {
    echo 'Correo enviado correctamente.';
} else {
    echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
}
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="../Css/formulario.css" th:href="@{/css/index.css}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="refresh" content="4;formulario.php">

</head>
<body>
    <script src="main.js"></script>
    
    <div class="modal-dialog text-center">
        <div class="col-sm-10 main-section">
            <div   id="user-group">
              
            </div>
            <div class="modal-content p-4" id="forms">
            <h1 class="text-light">Hola las instrucciones para recuperar tu contrasena se envio, revisa tu bandeja</h1> 

            </div>
        </div>
    </div>
</body>
</html>
