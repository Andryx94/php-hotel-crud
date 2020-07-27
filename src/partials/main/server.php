<?php
//Query
$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

$rooms = [];

if ($result && $result->num_rows > 0) {
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
