<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <ul>
    <?php
    $i = 1;
    while ($i <= 10) {
      echo "<li>";
      echo $i;
      echo "</li>\n";
      $i++;
    }
    ?>
  </ul>


</body>

</html>