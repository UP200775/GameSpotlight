<!DOCTYPE html>
<HTML lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Videojuegos</title>
    <link rel="stylesheet" href="../Header/Header.css">
    <link rel="stylesheet" href="games.css">
    <link rel="stylesheet" href="../Footer/estilos.css">
</head>

<header>
<?php require_once'../Header/Header.php'; ?>
</header>

<body>
<div class="card-container">
  <?php 
  $servername = "localhost:3307";
  $username = "root";
  $password = "";
  $dbname = "gamespotlight";

  $conn = new mysqli($servername, $username, $password, $dbname);

  //Verificar conexion
  if ($conn->connect_error){
    die("Conexión fallida: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM videojuegos";
  $result = $conn->query($sql);

  while ($row = $result->fetch_assoc()){
    $Id_Juego = $row['Id_Juego'];
    $Imagen_Juego = base64_encode($row['Imagen_Juego']);
    $Nombre_Juego = $row["Nombre_Juego"];
    $Fecha_Lanzamiento = $row["Fecha_Lanzamiento"];
    $Anio_Ganador = $row["Anio_Ganador"];
    $Cal_Ign = $row["Cal_Ign"];
    $Cal_Metacritic = $row["Cal_Metacritic"];


    echo '<div class="card">';
    echo '<div class="face front">';
    echo '<img src="data:image/jpeg;base64,' . $Imagen_Juego . ' ">';
    echo '<h3>'. $Nombre_Juego . '</h3>';
    echo '</div>';
    echo '<div class="face back">';
    echo '<h3>'. $Nombre_Juego . '</h3>';
    echo '<a>Fecha de lanzamiento: ' . $Fecha_Lanzamiento . '</a>';
    echo '<a> Año Ganador: ' . $Anio_Ganador . '</a>';
    echo '<a><img src="../Imagenes/Games/ign.png" width="20px" height="20px">  IGN: ' . $Cal_Ign . '/10</a>';
    echo '<a><img src="../Imagenes/Games/metacritic.png" width="20px" height="20px">  Metacritic: ' . $Cal_Metacritic . '/100</a>';
    echo '<div class="link">';
    echo '<a href="" class="btn btn1">Ver mas</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    
  }
  $conn->close();
  ?>
</div>
</body>

<footer>
  <?php require_once'../Footer/footer.html';?>
</footer>

</HTML>