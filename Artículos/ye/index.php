<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Blog Card with Hover State</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>

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

          <div class="blog-card spring-fever">
            <div class="title-content">
              <h3>SPRING FEVER</h3>
              <hr />
              <div class="intro">Yllamco laboris nisi ut aliquip ex ea commodo.</div>
              </div><!-- /.title-content -->
                <div class="card-info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. 
                </div><!-- /.card-info -->
                  <div class="utility-info">
                    <ul class="utility-list">
                      <li class="comments">12</li>
                      <li class="date">03.12.2015</li>
                    </ul>
                    </div><!-- /.utility-info -->
                      <!-- overlays -->
                      <div class="gradient-overlay"></div>
                      <div class="color-overlay"></div>
                      </div><!-- /.blog-card -->
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
  <script  src="./script.js"></script>

</body>
</html>
