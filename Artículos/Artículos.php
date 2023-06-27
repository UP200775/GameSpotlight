<!DOCTYPE html>
<HTML lang="en">

<head>
    <meta charset="UTF=-8">
    <META name="viewport" content="width=device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Artículos</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/articulos.css">  
</head>

<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="../Home/Home.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <a href="../Home/Home.php" class="nav-link  text-white">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <img src="../Imagenes/logo.png" alt="Bootstrap" width="70" height="70">
        </button>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-white">Artículos</a></li>
          <li><a href="../videojuegos/videojuegos.html" class="nav-link px-2 text-white">Videojuegos</a></li>
          <li><a href="../Staff/Staff.html" class="nav-link px-2 text-white">Staff</a></li>
          <li><a href="../Comunicate/comunicate.html" class="nav-link px-2 text-white">Comunícate</a></li>
        </ul>

        <div class="text-end">
          <button type="button" class="btn btn-outline-primary me-2">Inicia Sesión</button>
          <button type="button" class="btn btn-warning">Regístrate</button>
        </div>
      </div>
    </div>
  </header>

<body>

  <div class="row justify-content-center">
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

          echo '<div class="card col-sm-6 mb-3 mb-sm-0 p-4 m-4" style="width: 23rem;">';
          
              echo '<img src="data:image/jpeg;base64,' . $Imagen_Articulo . '" />';

              echo '<div class="card-body">';
              echo '<h5 class="card-title">' . $Nombre_Articulo . '</h5>';
              echo '</div>';

              echo '<ul class="list-group list-group-flush">';
              echo '<h6><strong><li class="list-group-item text-center">Autor: </strong>' . $Autor . '</li></h6>';
              echo '<h6><strong><li class="list-group-item text-center">Fecha: </strong>' . $Fecha . '</li></h6>';
              echo '</ul>';

              echo '<div class="card-body">';
              echo '<a href="plantilla.php?ID_Articulo=' . $ID_Articulo . '" class="btn btn-outline-primary btn-lg btn-block">Leer más</a>';
              echo '</div>';

          echo '</div>';
      }

      $conn->close();
      ?>
  </div>
</body>
<footer>
  <link rel="stylesheet" href="../Css/footer.css">
  <div class="footer-container">
    <div class="logo">
      <img src="Imagenes/logo.png" alt="Logo de la empresa">
    </div>
    <div>
      2023 © GameSpotlight
    </div>
    <div class="redes-sociales">
      <a href="enlace-a-red-social"><img src="Imagenes/facebook.png"></a>
      <a href="enlace-a-red-social"><img src="Imagenes/instagram.png"></a>
      <a href="enlace-a-red-social"><img src="Imagenes/twitter.png"></a>
    </div>
  </div>
</footer>
</HTML>