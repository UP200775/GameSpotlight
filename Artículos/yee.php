<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Artículos</title>
  <link rel="stylesheet" href="ye.css">
  <link rel="stylesheet" href="../Header/Header.css">
  <link rel="stylesheet" href="../Footer/estilos.css">
</head>

<header>
  <?php require_once'../Header/Header.html'; ?>
</header>

<body>

  <div class="container">

    <?php
      $servername = "localhost:3307";
      $username = "root";
      $password = "";
      $dbname = "gamespotlight";

      $conn = new mysqli($servername, $username, $password, $dbname);

      // Verificar la conexión
      if ($conn->connect_error) {
          die("Conexión fallida: " . $conn->connect_error);
      }

      $sql = "SELECT * FROM articulos";
      $result = $conn->query($sql);

      while ($row = $result->fetch_assoc()) {
          $ID_Articulo = $row['ID_Articulo'];
          $Nombre_Articulo = $row["Nombre_Articulo"];
          $Autor = $row["Autor"];
          $Imagen_Articulo = base64_encode($row['Imagen_Articulo']);
          $Fecha = $row["Fecha_Articulo"];

          echo '
            <div class="blog-card spring-fever">
              <div class="title-content">
              <h3>' . $Nombre_Articulo . '</h3>
              <hr />
                <div class="intro">Autor: ' . $Autor.' </div>        
              </div>
              <div class="card-info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
              </div>
              <div class="utility-info">
                <ul class="utility-list">
                  <li class="comments">12</li>          
                  <li class="date">' . $Fecha . '</li>          
                </ul>
              </div>
              <!-- overlays -->
              <div class="gradient-overlay"></div>
              <div class="color-overlay"></div>
            </div>';
      }

      $conn->close();

      ?>
</body>

<footer>
  <?php require_once'../Footer/Footer.html'; ?>
</footer>
</html>
