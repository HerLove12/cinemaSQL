<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elimina Proiezione</title>
</head>
<body>

<?php
// Connessione al database
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "cinema_finale";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Recupero del codice proiezione dal form
    $cod_proiezione = $_POST['cod_proiezione'];

    // Query per l'eliminazione della proiezione
    $sql = "DELETE FROM proiezioni WHERE CodProiezione = '$cod_proiezione'";

    if ($conn->query($sql) === TRUE) {
        echo "Proiezione eliminata con successo.";
    } else {
        throw new Exception("errore eliminaZione ");
    }
    $conn->close();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<!-- Link per tornare alla home page -->
<p><a href="index.html">Torna alla Home Page</a></p>

</body>
</html>
