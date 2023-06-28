<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plantilla de Artículo</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0-dist/css/bootstrap.min.css">
</head>
<header>
<?php include '../Header/headers/index.php'; ?>
</header>
<body>
    <div class="container">
        <h1>Plantilla de Artículo</h1>

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

        $ID_Articulo = $_GET['ID_Articulo']; // Obtener el ID del artículo de la URL
        $sql = "SELECT * FROM articulos WHERE ID_Articulo = $ID_Articulo";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $ID_Articulo = $row['ID_Articulo'];
            $Nombre_Articulo = $row["Nombre_Articulo"];
            $Autor = $row["Autor"];
            $Imagen_Articulo = base64_encode($row['Imagen_Articulo']);
            $Fecha = $row["Fecha_Articulo"];

            echo '<div class="card mb-3" style="max-width: 540px;">';
            echo '<div class="row g-0">';
            echo '<div class="col-md-4">';
            echo '<img src="data:image/jpeg;base64,' . $Imagen_Articulo . '" class="img-fluid" alt="Imagen del artículo">';
            echo '</div>';
            echo '<div class="col-md-8">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $Nombre_Articulo . '</h5>';
            echo '<p class="card-text">Autor: ' . $Autor . '</p>';
            echo '<p class="card-text">Fecha: ' . $Fecha . '</p>';
            echo '<a href="#" class="btn btn-primary">Volver</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        } else {
            echo 'No se encontró el artículo.';
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
