<!-- Database -->
<?php @include __DIR__ . "/database.php" ?>

<!-- Header -->
<?php @include __DIR__ . "/src/partials/header/header.php" ?>

<main>
  <table>
    <thead>
      <th>ID</th>
      <th>Numero Stanza</th>
      <th>Piano</th>
    </thead>

    <?php foreach ($rooms as $room) { ?>
      <tbody>
        <td><?php echo $room["id"] ?></td>
        <td><?php echo $room["room_number"] ?></td>
        <td><?php echo $room["floor"] ?></td>
        <td><a href=" <?php echo $basepath . "/src/partials/view/view.php" ?> ">View</a></td>
      </tbody>
    <?php } ?>
  </table>
</main>
