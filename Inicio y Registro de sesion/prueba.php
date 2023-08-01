<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "gamespotlight";
$mensaje= "Token invalido";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar la conexión
if ($conn->connect_error) {
die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_GET["token"])) {
    $token = $_GET["token"];
    $query3 = "SELECT correo_electronico FROM tokens WHERE token = '$token'";
        $result3 = $conn->query($query3);
        //se obtiene el correo del token
        if ($result3->num_rows > 0) {
             // Recorrer los resultados obtenidos
              while ($row3 = $result3->fetch_assoc() ) {
                 $correo = $row3['correo_electronico'];
                }
                  $query1 = "SELECT username FROM usuarios WHERE email = '$correo'";
                  $result = $conn->query($query1);
              while ($row = $result->fetch_assoc() ) {
                  $username1 = $row['username'];
                }

        }
}else{
    echo "<script type='text/javascript'>alert('no tiene token');</script>";
}
?>


    <?php 
    if(!empty($username1)){
        //si inicio sesion aqui ponen su pagina web  eliminan la coneccion porq se encuetra arriba jajaja
        //pegan su pagina
        ?>

        
        Hola : <?php echo $username1 ?>
        <?php

    }else{
        //No se inicio sesion
        ?>
        Sesion no iniciada
        <?php
        header("Location: formulario.php");

    }

    ?>