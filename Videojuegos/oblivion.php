<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF=-8">
  <META name="viewport" content="width=device-width, initial-scale = 1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>TES IV: Oblivion</title>
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <link href="../Css/juego.css" rel="stylesheet" />
  <link href="../Header/Header.css" rel="stylesheet" />
  <link href="../Footer/estilos.css" rel="stylesheet" />
  <link href="zoom.css" rel="stylesheet" />
  <script src="zoom.js"></script>
  <link href="button.css" rel="stylesheet"/>
</head>

<header>
  <?php require_once '../Header/Header.php'; ?>
</header>

<body>

  <!-- Page Content-->
  <div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
      <div class="col-lg-7"><iframe width="700" height="400" src="https://www.youtube.com/embed/qJnnPh44Rlo"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe></div>
      <div class="col-lg-5">
        <h1 class="text-white">The Elder Scroll IV: Oblivion</h1>
        <h3 class="text-white">Sinopsis</h3>
        <p class="text-white">Oblivion se desarrolla en la provincia de Cyrodiil, que se encuentra al suroeste de
          Morrowind, lugar de desarrollo de su antecesor. La región posee un clima muy variado, desde vastos bosques de
          coníferas repletos de flora y fauna, hasta zonas nevadas y frías, pasando por cordilleras y zonas pantanosas.
          En estas zonas se encuentran multitud de cuevas, ruinas, asentamientos y tierras cultivadas que dan vida a
          todo el territorio.</p>
        <p class="text-white">Para ciertas búsquedas, el jugador también podrá acceder a distintos planos de Oblivion,
          en una dimensión paralela a la región real, con una geografía completamente distinta: en todos ellos se
          observa un macizo rocoso sobre una base volcánica, con vegetación característica, y habitada por enemigos
          (principalmente Daedra). También existen ciertas localizaciones especiales a las que el jugador podrá acceder
          en ciertas misiones, además de las añadidas mediante las expansiones.</p>
      </div>
    </div>
    <!-- Call to Action-->
    <div class="card text-white bg-dark my-5 py-4">
      <div class="card-body">
        <p class="text-white m-0 text-justify">
        <h3>Jugabilidad</h3>
        <p class="text-white">Se trata de un sistema de mundo abierto, siguiendo las directrices de las anteriores
          entregas: el jugador, después de superar una misión introductoria, escapa de su cautiverio, a partir de ahí es
          totalmente libre. De esta forma el jugador posee multitud de alternativas desde el principio: dispone de un
          importante abanico de misiones, entre las que se distingue un hilo argumental principal, más largo y
          elaborado, varios hilos secundarios, normalmente relacionados con las facciones, de similar extensión aunque
          con menor peso en la trama, y multitud de pequeños encargos que irán surgiendo a medida que el jugador
          conversa con los PNJs del juego.</p>
        <p class="text-white">En cuanto a la perspectiva, se puede jugar en primera o tercera persona. Prácticamente
          desde el principio, el jugador puede interactuar con gran parte de los objetos del juego, y visitar cualquier
          localización existente, y de esta forma mejorar sus habilidades, visitar nuevos lugares en busca de tesoros o
          campar a sus anchas por las ciudades. Para fomentar y facilitar este cometido, Bethesda ha introducido algunas
          novedades en este aspecto: ahora el jugador tiene la posibilidad de viajar instantáneamente a cualquier
          localización que haya visitado anteriormente, sin coste alguno, desde la interfaz de mapa; también ha puesto a
          disposición de los jugadores un conjunto de monturas para poder viajar a mayor velocidad por el entorno.</p>
        <p class="text-white">Buena parte del videojuego se basa en la batalla con diversos enemigos, desde ratas de
          alcantarilla hasta grandes golems. Hay multitud de tipos de armas y armaduras, cada una de ellas adaptada a un
          estilo de combate: cuerpo a cuerpo, a distancia o mágico. Con el objetivo de mantener constantemente
          balanceado el videojuego, sea cual sea el nivel del jugador, Bethesda introdujo el sistema de autonivel: todos
          los enemigos y probabilidades de obtención de objetos cambian con el nivel del personaje, por tanto el jugador
          encontraría en niveles más altos enemigos más fuertes y mejores objetos.</p>
      </div>
    </div>
    <!-- Content Row-->
    <div class="row gx-4 gx-lg-5">
      <div class="col-md-4 mb-5">
        <div>
          <!-- Aplica la clase "myImg" y agrega el evento onclick -->
          <img class="myImg" src="../Imagenes/Games/oblivion1.jpg" height="400px" width="400px">
          <div id="myModal" class="modal">
            <!-- The Close Button -->
            <span class="close">&times;</span>
            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">
            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div>
          <!-- Aplica la clase "myImg" y agrega el evento onclick -->
          <img class="myImg" src="../Imagenes/Games/oblivion2.jpg" height="400px" width="400px">
          <div id="myModal" class="modal">
            <!-- The Close Button -->
            <span class="close">&times;</span>
            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">
            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div>
          <!-- Aplica la clase "myImg" y agrega el evento onclick -->
          <img class="myImg" src="../Imagenes/Games/oblivion3.jpg" height="400px" width="400px">
          <div id="myModal" class="modal">
            <!-- The Close Button -->
            <span class="close">&times;</span>
            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">
            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <a href="../Videojuegos/videojuegos.php" type="button" class="btn">Volver</a>
    </div>


  </div>


  <!-- Footer-->

  <footer>
    <?php require_once '../Footer/footer.html'; ?>
  </footer>
</body>

</html>