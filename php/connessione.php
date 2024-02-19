<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "cinema_finale";

mysqli_report(MYSQLI_REPORT_OFF);

$conn = new mysqli($servername, $username, $password, $dbname);	

if ($conn->connect_error) {
  header("Location: ../errore.html");  // Se la connessione NON va a buon fine, faccio un redirect a una pagina di errore
}
?>
