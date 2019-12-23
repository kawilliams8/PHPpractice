<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>For Loop</title>
</head>
<body>
  <?php
    $luckyNums = array(4,8,15,16,23,42);
    for($i = 0; $i < count($luckyNums); $i++){
      echo "<h3>$luckyNums[$i]</h3>";
    }
  ?>
</body>
</html>