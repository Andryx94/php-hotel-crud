<?php
//Query
$id = $_GET['id'];
$sql = "SELECT * FROM `stanze` WHERE `id` = $id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
  $row = $result->fetch_assoc();
}

elseif ($result) {
  $rooms = [];
}

else {
  $rooms = [];
}

$conn->close();
?>
