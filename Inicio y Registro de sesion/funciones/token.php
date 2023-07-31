<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="../../Css/formulario.css" th:href="@{../css/index.css}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<?php
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

//esto va a ir en la pagina de recuperacion
// Obtener la URL actual

// Verificar la conexión
$url_actual = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Analizar la URL y extraer los parámetros
$parse_url = parse_url($url_actual);

if (isset($parse_url['query'])) {
    // Obtener los parámetros de la URL
    parse_str($parse_url['query'], $query_params);

    // Verificar si el parámetro "token" existe
    if (isset($query_params['token'])) {
        // Obtener el valor del token
        $token = $query_params['token'];
        $query2 = "SELECT fecha_exp FROM tokens WHERE token = '$token'";
            $result2 = $conn->query($query2);
            if ($result2->num_rows > 0) {
          // Recorrer los resultados obtenidos
          while ($row = $result2->fetch_assoc()) {
           $fecha_registro = $row['fecha_exp'];
             }
             $fecha_expiracion = new DateTime($fecha_registro);//fecha del token
             $tiempo_actual = new DateTime(); //fecha actual        
} else {
    echo "No se encontraron resultados.";
}
    } else {
        echo "No se encontró el parámetro 'token' en la URL.";
    }
} else {
    echo "No se encontraron parámetros en la URL.";
}

if ($fecha_expiracion < $tiempo_actual) {
    echo "El token ha expirado";

//header("Location: $url");

?>

<?php 
}else{

    echo 'token correcto';
?>
    <div class="modal-dialog text-center " >
        <div class="col-sm-10 main-section">
            <div  id="user-group">
                <h1 class="text-light">Has olvidado la contraseña, introduce los siguientes datos</h1> 
            </div>
            <div class="modal-content p-4" id="forms">
                <form class="col-12" id="dataForm" method="POST" class="needs-validation" onsubmit="return validarContrasena();">

                <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" id="contrasena" required/>
                </div>

                <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="contrasena1" id="contrasena1" required/>
                </div>
                    <button  class="btn btn-primary" type="submit" ><i class="fas fa-sign-in-alt" ></i>  Buscar Cuenta </button>
                </form>
                </form>
                <div class="col-12 forgot">
                    <a href="../Inicio y Registro de sesion/formulario.html">Inicia Sesion</a>
                </div>
             
                <div class="col-12 forgot">
                    <a href="../Inicio y Registro de sesion/registro.html">Registrate</a>
                </div>
            </div>
        </div>
    </div>
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
function validarContrasena() {
            var contrasena = document.getElementById("contrasena").value;
            var contrasena1 = document.getElementById("contrasena1").value;
            var regexMayuscula = /[A-Z]/;
            var regexEspecial = /[!@#$%^&*]/;

            if (contrasena === contrasena1) {
                if (contrasena.length < 4) {
                alert("La contraseña debe tener al menos 4 caracteres.");
                return false;
            }

            if (!regexMayuscula.test(contrasena)) {
                alert("La contraseña debe contener al menos una letra mayúscula.");
                return false;
            }
            
      } else {
        // Las contraseñas no coinciden, mostrar mensaje de error
        alert("Error: Las contraseñas no coinciden. Por favor, asegúrate de ingresar la misma contraseña en ambos campos.");
      }    
        }
</script>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Datos de conexión a la base de datos
    // Verificar la conexión
    $password = $_POST["contrasena"];
    $password1 = $_POST["contrasena1"];

    if($password == $password1){
        $query3 = "SELECT correo_electronico FROM tokens WHERE token = '$token'";
        $result3 = $conn->query($query3);
        if ($result3->num_rows > 0) {
      // Recorrer los resultados obtenidos
      while ($row3 = $result3->fetch_assoc()) {
     
       $correodeltoken = $row3['correo_electronico'];
         }
        // Obtener los datos del formulario
        $password = $_POST["contrasena"];
        $hashSeguro = password_hash($password, PASSWORD_DEFAULT);
    
        $query4 = "UPDATE usuarios SET password = '$hashSeguro' WHERE email = '$correodeltoken'";
        $result4 = $conn->query($query4);
        header("Location: ../formulario.php");
}

    }else{
    }
    }
    // Cerrar conexión
    $conn->close();
}

exit();
?>
