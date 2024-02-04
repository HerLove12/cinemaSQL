<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiorna Voto Recensione</title>
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

    // Recupero dei dati dal form
    $id_recensione = $_POST['id_recensione'];
    $nuovo_voto = $_POST['nuovo_voto'];

    // Query per l'aggiornamento del voto della recensione
    $sql = "UPDATE recensioni SET Voto = '$nuovo_voto' WHERE IDRecensione = '$id_recensione'";

    if ($conn->query($sql) === TRUE) {
        echo "Voto della recensione aggiornato con successo.";
    } else {
        throw new Exception("errore recensione ");
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
