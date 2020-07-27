<?php
  // Basepath
  $basepath = "http://localhost:8888/php-hotel-crud";
  @include __DIR__ . "/../../../database.php"  //da sistemare da __DIR__ a basepath
?>

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hotel Boolean</title>
    <link rel="stylesheet" href=" <?php echo $basepath . "/dist/app.css" ?> ">
    <link href="https://fonts.googleapis.com/css?family=Roboto:200,600,400,800" rel="stylesheet">
  </head>
  <body>
    <header>
      <h1>Hotel Boolean</h1>
      <a href=" <?php echo $basepath ?> ">Ritorna alla lista stanze</a>
    </header>
  </body>
</html>
