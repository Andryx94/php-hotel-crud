<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "db_hotel";

  // Connect
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
  }

  $sql = "SELECT * FROM `stanze`";

  $result = $conn->query($sql);
  $rooms = [];

  if ($result && $result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $rooms[] = $row;
    }
  }

  elseif ($result) {
    $rooms = [];
  }

  else {
    $rooms = [];
  }

  $conn->close();
 ?>
