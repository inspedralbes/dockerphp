<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llistat</title>
</head>

<body>
    <h1>Llistat de cases</h1>
    <?php

    //Tot el codi de connexió a la base de dades i la comprovació (die...) hauria d'estar
    //en un fitxer separat i inclòs aquí, per exemple amb:
    // include_once  'connexio.php';
    // Ho heu de canviar! 
    

    // Configuració de la connexió a la base de dades
    $servername = "db"; // Nom del servei definit al docker-compose.yaml
    $username = "usuari"; // Usuari definit al docker-compose.yaml
    $password = "paraula_de_pas"; // Contrasenya definida al docker-compose.yaml
    $dbname = "persones"; // Nom de la base de dades
    
    // Quan ja tingueu un codi una mica depurat, i vulgueu fer la gestió dels errors
    // vosaltres mateixos heu de desactivar el comportament predeterminat de mysqli 
    // que es molt agressiu i aborta el php en el moment de l'error, i per tant, 
    //  no arriba a l'if de comprovació.
    // Amb la següent línia, el codi en cas d'error de mysql ja no aboratarà i ho podreu
    // gestionar vosaltres mateixos.
    // mysqli_report(MYSQLI_REPORT_OFF);
    
    // Crear la connexió
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Comprovar la connexió
    if ($conn->connect_error) {
        echo "<p>Error de connexió: " . htmlspecialchars($conn->connect_error) . "</p>";
        die("Error de connexió: " . $conn->connect_error);
    }

    // Consulta SQL per obtenir totes les files de la taula 'cases'
    $sql = "SELECT id, name FROM cases";
    $result = $conn->query($sql);

    // Comprovar si hi ha resultats
    if ($result->num_rows > 0) {

        // Llistar els resultats. ATENCIÓ, heu de construir el codi HTML d'una llista correctament
        while ($row = $result->fetch_assoc()) {
            echo "<p>ID: " . $row["id"] . " - Nom: " . htmlspecialchars($row["name"]) . "</p>";
        }

    } else {
        echo "<p>No hi ha dades a mostrar.</p>";
    }

    // Tancar la connexió
    $conn->close();
    ?>
    <p>Vols tornar a la <a href="index.php">pàgina inicial</a>? </p>
</body>

</html>