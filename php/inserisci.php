<?php
include('connessione.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci Attore</title>
</head>
<body>

<?php

    $nome = $_POST['nome'];
    $anno_nascita = $_POST['anno_nascita'];
    $nazionalita = $_POST['nazionalita'];

    $sql = "INSERT INTO attori (Nome, AnnoNascita, Nazionalita) VALUES ('$nome', '$anno_nascita', '$nazionalita')";

    if ($conn->query($sql)) {
        echo "<p>Inserimento andato a buon fine</p>";
    } else {
        echo "<p style='color:red'>Errore</p>";
    }
?>

<!-- Link per tornare alla home page -->
<p><a href="../index.html">Torna alla Home Page</a></p>


</body>
</html>
