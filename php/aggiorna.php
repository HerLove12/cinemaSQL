<?php
include('connessione.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiorna Voto Recensione</title>
</head>
<body>

<?php
    $id_recensione = $_POST['id_recensione'];
    $nuovo_voto = $_POST['nuovo_voto'];

    $sql = "UPDATE recensioni SET Voto = '$nuovo_voto' WHERE IDRecensione = '$id_recensione'";

    if ($conn->query($sql)) {
        if ($conn->affected_rows > 0) {
            echo "<p>Aggiornamento andato a buon fine</p>";
        }
        else {
            echo "<p>Non è stato aggiornato nulla</p>";
        }
    } else {
        echo "<p style='color:red'>Errore</p>";
    }
?>

<!-- Link per tornare alla home page -->
<p><a href="../index.html">Torna alla Home Page</a></p>

</body>
</html>
