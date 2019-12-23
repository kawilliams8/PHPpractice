<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>While Loops</title>
</head>
<body>
  <?php
    $index = 1;
    while($index <= 5){
      echo "$index <br>";
      $index++;
    }
  ?>
  <?php
    $index = 6;
    do {
      echo "Loop 2 Index: $index <br>"; 
      $index++;
    } while($index <= 5)
  ?>
</body>
</html>