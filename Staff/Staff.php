<!DOCTYPE html>
<HTML lang="en">

<head>
    <meta charset="UTF=-8">
    <META name="viewport" content="width=device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Staff</title> <!--este es un comentaro : sirve para popner nombre a la pagina-->
    <link rel="stylesheet" href="../bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/staff.css">
</head>

<header>
<?php include '../Header/headers/index.php'; ?>
</header>
<body>

    <main class="trabajadores">
        <?php
        // Establecer la conexión con la base de datos
        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "gamespotlight";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        If ($conn->connect_error) {
            Die("Error de conexión: " . $conn->connect_error);
        }

        // Ejecutar la consulta SQL
        $sql = "SELECT * FROM staff";
        $result = $conn->query($sql);

        // Verificar si se obtuvieron resultados
        If ($result->num_rows > 0) {
            While ($row = $result->fetch_assoc()) {
                $Imagen_Articulo = base64_encode($row['imagen']);
                ?>
                <div class="card">
                    <?php echo '<img src="data:image/jpeg;base64,' . $Imagen_Articulo . '" />';?>
                    <h2><?php echo $row['nombre']; ?></h2>
                    <p>Fecha de Entrada: <?php echo $row['fecha']; ?></p>
                    <button class="btn" onclick="verMas(<?php echo $row['id']; ?>)">Ver más</button>
                </div>
                <?php
            }
        } else {
            Echo "No se encontraron registros de personal.";
        }

        // Cerrar la conexión con la base de datos
        $conn->close();
        ?>
    </main>

    <script>
        function verMas(trabajadorId) {
          switch (trabajadorId) {
            case 1:
              window.location.href = "../Staff/Rafael.html";
              break;
            case 2:
              window.location.href = "../Staff/Cesar.html";
              break;
            case 3:
              window.location.href = "../Staff/Yael.html";
              break;
            case 4:
              window.location.href = "../Staff/Gonzalo.html";
              break;
          }
        }
      </script>

</body>
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
