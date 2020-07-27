<!-- Database -->
<?php @include __DIR__ . "/database.php" ?>

<!-- Header -->
<?php @include __DIR__ . "/src/partials/header/header.php" ?>

<main>
  <table>
    <thead>
      <th>Elemento1</th>
      <th>Elemento2</th>
      <th>Elemento3</th>
    </thead>

    <tbody>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td><a href=" <?php echo $basepath . "/src/partials/view/view.php" ?> ">View</a></td>
    </tbody>

    <tbody>
      <td>1</td>
      <td>2</td>
      <td>3</td>
    </tbody>
  </table>
</main>
