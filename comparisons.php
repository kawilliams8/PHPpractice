<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Comparisons</title>
</head>
<body>
  <?php
    function getMax($num1, $num2){
      return $num1 > $num2 ? $num1 : $num2;
    }

    echo getMax(6, 3)
  ?>
</body>
</html>