<?php
include('connessione.php');

if (isset($_POST['campi'])) {
    $selezionati = $_POST['campi'];
} else {
    $selezionati = array();
    echo "<p style='color:red'>Errore: nessun campo selezionato</p>";
    echo "<p><a href='../index.html'>Torna alla Home Page</a></p>";
    $conn->close();
    exit();
}

$campi = '';
foreach ($selezionati as $x) {
    $campi .= $x . ', ';
}
$campi = rtrim($campi, ', ');

$sql = "SELECT $campi FROM film";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<div>";
    echo "<table>";
    echo "<tr>";
    foreach ($selezionati as $x) {
        echo "<th>$x</th>";
    }
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($selezionati as $x) {
            echo "<td>" . $row[$x] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
} else {
    echo "<p>0 risultati</p>";
}
$conn->close(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
    <style>
        div{
            margin: 200px;
            margin-top: 50px;
        }
        body{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #111;
            color: #fff;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            background-color: #333;
        }

        th {
            background-color: #222;
            color: white;
        }
    </style>
</head>
<body>
    <p><a href="../index.html">Torna alla Home Page</a></p>
</body>
</html>
