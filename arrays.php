<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Arrays</title>
</head>
<body>
  <?php
    $friends = array("Kevin", "Karen", "Oscar", "Jim");
    $friends[1] = "Dwight"; //Reassignment
    $friends[4] = 400; //Add new index 
    echo $friends[0];
  ?>
  <br>
  <?php
    echo count($friends); //Access globally scoped variable?
  ?>
</body>
</html>