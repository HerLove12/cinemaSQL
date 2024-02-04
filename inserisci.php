<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci Attore</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "cinema_finale";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    $nome = $_POST['nome'];
    $anno_nascita = $_POST['anno_nascita'];
    $nazionalita = $_POST['nazionalita'];

    $sql = "INSERT INTO attori (Nome, AnnoNascita, Nazionalita) VALUES ('$nome', '$anno_nascita', '$nazionalita')";

    if ($conn->query($sql) === TRUE) {
        echo "Attore inserito con successo.";
    } else {
        throw new Exception("errore durante l inserimento");
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
