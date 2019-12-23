<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Conditionals</title>
</head>
<body>
  RED: <?php
    $isRed = true;
    if ($isRed){
      echo $isRed;
    };
  ?>
  <br>
  GREEN AND TALL: <?php
    $isGreen = true;
    $isTall = false;
    if ($isGreen && $isTall){
      echo "Yes, green and tall";
    } else if ($isGreen && !$isTall) {
      echo "Green, but not tall";
    } else {
      echo "Other combo";
    };
  ?>
</body>
</html>