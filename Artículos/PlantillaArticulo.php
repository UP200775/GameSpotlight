<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="PlantillaArticulo.css">
    <link rel="stylesheet" href="../Header/Header.css">
    <link rel="stylesheet" href="../Footer/estilos.css">
</head>

<header>
    <?php require_once '../Header/Header.php'; ?>
</header>

<body>
    <div class="container">
        <main>
            <article>
                <?php
                $servername = "localhost:3307";
                $username = "root";
                $password = "";
                $dbname = "gamespotlight";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                $articleID = $_GET['id'];

                $sql = "SELECT * FROM articulos WHERE ID_Articulo = $articleID";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $Nombre_Articulo = $row["Nombre_Articulo"];
                    $Autor = $row["Autor"];
                    $Fecha = $row["Fecha_Articulo"];
                    $Articulo = $row["Archivo_Articulo"];
                
                    echo '<title>' . $Nombre_Articulo . '</title>
                        <h2>' . $Nombre_Articulo . '</h2>
                            <div class="info-art">
                                <div class="profile-picture">
                                    <img src="../Imagenes/Games/bioshock.jpg" alt="Foto de perfil">
                                </div>
                                <div class="info-text">
                                    <strong>Artículo</strong> por <a href="#">' . $Autor . '</a> | [Posicion en la empresa] <br>
                                        Publicado el ' . $Fecha . '
                                </div>
                            </div>
                            <br>
                            <div class="article-content">' . nl2br($Articulo) . '</div>';
                } else {
                    echo 'Artículo no encontrado.';
                }
                $conn->close();
                ?>
            </article>

            <aside>
    <h3>Artículos relacionados</h3>
    <br>
    <div class="related-articles">
        <?php
        // Conexión a la base de datos
            $servername = "localhost:3307";
            $username = "root";
            $password = "";
            $dbname = "gamespotlight";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("La conexión ha fallado: " . $conn->connect_error);
        }

        // Consulta SQL para obtener los últimos 3 artículos de la vista
        $sql = "SELECT Nombre_Articulo, Autor FROM vista_ultimos_3_articulos";
        $result = $conn->query($sql);

        // Iterar sobre los resultados y mostrarlos en tarjetas HTML
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<h4>' . $row["Nombre_Articulo"] . '</h4>';

                echo '<a href="#">Leer más</a>';
                echo '</div>';
            }
        } else {
            echo "No se encontraron artículos.";
        }

        // Cerrar la conexión a la base de datos
        $conn->close();
        ?>
    </div>
</aside>


        </main>

        <div class="comments-section">
            <h3>Comentarios</h3>
            <div class="comment">
                <h4>Usuario1</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="comment">
                <h4>Usuario2</h4>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <form class="comment-form">
                <h4>Deja un comentario</h4>
                <input type="text" placeholder="Nombre">
                <textarea placeholder="Comentario"></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</body>

<header>
    <?php require_once '../Footer/Footer.html'; ?>
</header>

</html>