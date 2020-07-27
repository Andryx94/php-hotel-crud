<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "db_hotel";

  // Connessione
  $conn = new mysqli($servername, $username, $password, $dbname);

  // controllo connessione
  if ($conn && $conn->connect_error) {
    echo "Connessione fallita: " . $conn->connect_error;
  }
 ?>
