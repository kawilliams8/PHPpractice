<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Functions</title>
</head>
<body>
  <?php
    function sayHi($name, $age){
      echo "Hi $name, you are $age years old. <br>";
    }

    sayHi("Katie", 21);
    sayHi("Someone else", 80);
  ?>
</body>
</html>