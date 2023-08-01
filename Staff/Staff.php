<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff</title>
    <link rel="stylesheet" href="../Header/Header.css"> 
    <link rel="stylesheet" href="../Footer/estilos.css">
    <link rel="stylesheet" href="../Css/staff.css">
</head>

<header>
<?php require_once'../Header/Header.html'; ?>
</header>

<body>

    <main class="trabajadores container">
        <?php
        // Establecer la conexión con la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gamespotlight";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Ejecutar la consulta SQL
        $sql = "SELECT * FROM staff";
        $result = $conn->query($sql);

        // Verificar si se obtuvieron resultados
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $Imagen_Articulo = base64_encode($row['imagen']);
        ?>
                <div class="card">
                    <?php echo '<img src="data:image/jpeg;base64,' . $Imagen_Articulo . '" />'; ?>
                    <h2><?php echo $row['nombre']; ?></h2>
                    <p>Fecha de Entrada: <?php echo $row['fecha']; ?></p>
                    <button class="btn" onclick="verMas(<?php echo $row['id']; ?>)">Ver más</button>
                </div>
        <?php
            }
        } else {
            echo "No se encontraron registros de personal.";
        }

        // Cerrar la conexión con la base de datos
        $conn->close();
        ?>
    </main>

    <script>
        function verMas(trabajadorId) {
            switch (trabajadorId) {
                case 1:
                    window.location.href = "../Staff/Rafael.php";
                    break;
                case 2:
                    window.location.href = "../Staff/Cesar.php";
                    break;
                case 3:
                    window.location.href = "../Staff/Yael.php";
                    break;
                case 4:
                    window.location.href = "../Staff/Gonzalo.php";
                    break;
            }
        }
    </script>

<footer>
  <?php require_once'../Footer/footer.html'; ?>
</footer>

</body>

</html>
