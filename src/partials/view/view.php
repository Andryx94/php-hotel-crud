<?php @include "../header/header.php" ?>
<?php @include "server.php" ?>

<table>
  <thead>
    <th>ID</th>
    <th>Numero Stanza</th>
    <th>Piano</th>
    <th>Letti</th>
    <th>Data crezione</th>
  </thead>

  <tbody>
    <td><?php echo $row["id"] ?></td>
    <td><?php echo $row["room_number"] ?></td>
    <td><?php echo $row["floor"] ?></td>
    <td><?php echo $row["beds"] ?></td>
    <td><?php echo $row["created_at"] ?></td>
  </tbody>
</table>
