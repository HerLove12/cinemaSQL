<?php
include('connessione.php');  // Questo richiama la connessione quindi possiamo usare $conn in questa pagina
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elimina Proiezione</title>
</head>
<body>

<?php
    // Recupero del codice proiezione dal form
    $cod_proiezione = $_POST['cod_proiezione'];

    // Query per l'eliminazione della proiezione
    $sql = "DELETE FROM proiezioni WHERE CodProiezione = '$cod_proiezione'";

    if ($conn->query($sql)) {
        if ($conn->affected_rows > 0) {
            echo "<p>Eliminazione andata a buon fine</p>";
        }
        else {
            echo "<p>Non è stato eliminato nulla</p>";
        }
    }
    else {
        echo "<p style='color:red'>Errore</p>";
    }
    $conn->close();
?>

<!-- Link per tornare alla home page -->
<p><a href="../index.html">Torna alla Home Page</a></p>

</body>
</html>
