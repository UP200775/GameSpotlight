<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap-5.3.0-dist/css/bootstrap.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <script src="https://use.fontawesome.com/025d1f53df.js"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Header/Header.css">
  

  </head>

  <header>
  <?php require_once'../Header/Header.php'; ?>
  </header>

  <body  style="background-color:#000000;">
    <div id="main">
      <div class="container">
        
        <div id="slider-home" class="carousel slide" data-ride="carousel ">
          <ol class="carousel-indicators">
            <li data-target="#slider-home" data-slide-to="0" class="active"></li>
            <li data-target="#slider-home" data-slide-to="1"></li>
            <li data-target="#slider-home" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
<<<<<<< Updated upstream
            <img src="img/slider.jpg" alt="First slide " style="height: 400px;width: 1000px">
=======
            <img src="img/slider.jpg" alt="First slide " style="height:400px;width:1000px">
>>>>>>> Stashed changes
              
              
              <div class="carousel-caption">

                <h2>DIABLO IV</h2>
                <img alt="menú 2x1" width="100" height="100" src="img/LOGO DIABLO.png">
                <p class="h4;container">La beta de Diablo 4 llegará pronto y te permitirá jugar al próximo Diablo antes de su lanzamiento en junio.
                   Solo podrás jugar a la beta en ciertas fechas, pero algunas personas podrán jugar antes.</p>
                   <a href="#" class="btn btn-secondary">INFO</a>

              </div>

            </div>
            <div class="carousel-item" >
<<<<<<< Updated upstream
              <img src="img/slider2.jpg" alt="First slide" style="height: 400px;width: 1000px">
=======
              <img src="img/slider2.jpg" alt="First slide" class="d-block w-100"style="height:400px;width:1000px">
>>>>>>> Stashed changes
              
              <div class="carousel-caption">
                <h2>StarField</h2>
                <img  alt="menú 2x1" src="img/logo starfield.png"width="100" height="100" >
                <p>Es un nuevo RPG de acción de corte futurista a cargo de Bethesda para PC y Xbox Series. Starfield es el primer universo nuevo en 25 años que crea Bethesda Game Studios, los galardonados creadores de The Elder Scrolls V: Skyrim y Fallout 4.</p>
                <a href="#" class="btn btn-secondary">INFO</a>

              </div>

            </div>

            <div class="carousel-item">
<<<<<<< Updated upstream
              <img src="img/slider3.jpg" alt="First slide" style="height: 400px;width: 1000px">
=======
              <img src="img/slider3.jpg" alt="First slide" style="height:400px;width:1000px">
>>>>>>> Stashed changes
              
              <div class="carousel-caption">

                <h2>Star Wars Jedi: Survivor</h2>
                <img alt="menú 2x1" src="img/logo star wars.png" width="100" height="100" >
<<<<<<< Updated upstream
                <p class="h4">La historia de Cal Kestis continúa en STAR WARS Jedi: Survivor™, una nueva aventura épica que llevará a Cal más lejos que nunca.</p>
=======
                <p class="h4">La historia de Cal Kestis continúa en STAR WARS Jedi: Survivor™, una nueva aventura épica que llevará a Cal más lejos que nunca mientras lucha para proteger la galaxia de sucumbir ante la oscuridad.</p>
>>>>>>> Stashed changes
                <a href="#" class="btn btn-secondary">INFO</a>

              </div>

            </div>
          </div>
        </div>

        <div class="row mar-top-80">
          <div class="col-md-6">
            <h3>Nuestra Pagina <strong>GameSpotLight</strong> <i class="fa fa-rocket pull-right hidden-xs-down" aria-hidden="true"></i></h3>

            <p style="text-align: justify;">es una plataforma de comunicación especializada en videojuegos, hardware y eventos. Generamos nuestro propio contenido audiovisual gracias a un amplio canal de comunicación digital. Contamos con una gran experiencia en la producción y organización de eventos y ofrecemos servicios a diferentes marcas del sector.</p>
            <p style="text-align: justify;">Si quieres conocer más información sobre PureGaming, trabajar con nosotros o colaborar, no dudes en ponerte en contacto con nosotros.

              ¡Estaremos encantados de atenderte!</p>
          </div>

          <div class="col-md-6">
            <h3>Unete a la comunidad de<strong> DISCORD</strong> <i class="fa fa-map-marker pull-right hidden-xs-down" aria-hidden="true"></i></h3>
           <p>La aventura te aguarda en nuestra creciente comunidad. Únete a nuestro Discord o síguenos en las redes sociales para no perderte nada.</p> 
           <center><img class="centrar-imagen" src="img/Discordlogo.png"href="discord.com" height="150" width="250"></center>
           <center><br><button type="button" class="btn btn-outline-primary">Nuestra Comunidad</button></center>
          </div>
        </div>

        <div class="row mar-top-80">
          <div class="col-md-12">
            <h3>Los artículos más reientes<i class="fa fa-space-shuttle pull-right hidden-xs-down" aria-hidden="true"></i></h3>

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
        
              $sql = "SELECT * FROM vista_ultimos_3_articulos";
              $result = $conn->query($sql);
        
              while ($row = $result->fetch_assoc()) {
                  $Nombre_Articulo = $row["Nombre_Articulo"];
                  $Autor = $row["Autor"];
                  $Imagen_Articulo = base64_encode($row['Imagen_Articulo']);
        
                  echo '<div class="card m-4 text-white bg-dark" style="width: 17.5rem;">';
                  
                      echo '<div class="card-body">';
                      echo '<h5 class="card-title">' . $Nombre_Articulo . '</h5>';
                      echo '</div>';
        
                      echo '<ul class="list-group list-group-flush">';
                      echo '<h6><strong><li class="list-group-item text-center text-white bg-dark">Autor: </strong>' . $Autor . '</li></h6>';
                      
                      echo '</ul>';
        
                      echo '<div class="card-body">';
                      echo '<button type="button" class="btn btn-outline-primary btn-lg btn-block">Leer más</button>';
                      echo '</div>';
        
                  echo '</div>';
              }
        
              $conn->close();
              ?>
            </div>

           
            <div class="row justify-content-center">
              
            </div>
          </div>
        </div>

        
        </div>

      </div>

      <div class="icon-bar">
      <a href="#"><i style="font-size:44px;color:rgb(38, 149, 201)" class="fa fa-facebook-official"></i></a> 
      <a href="#"><i style="font-size:35px;color:rgb(236, 236, 236)" class="fa fa-share"></i></a> 
      <a href="#"><i class="fa fa-instagram" style="font-size:44px;color:rgb(255, 0, 212)"></i></a> 
      <a  href="#"><i class='fa fa-twitter' style='font-size:48px;color:rgb(0, 183, 255)'></i></a> 
      <a  href="#"><i class="fa fa-youtube-play" style="font-size:35px;color:red"></i></a> 
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <script src="js/general.js" type="text/javascript"></script>
  </body>
</html>