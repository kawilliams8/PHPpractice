<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Inheritance</title>
</head>
<body>
  <?php
    class Chef {
      function makeChicken(){
        echo "The chef makes chicken. <br>";
      }

      function makeSalad(){
        echo "The chef makes salad. <br>";
      }

      function makeSpecialDish(){
        echo "The chef makes the special dish. <br>";
      }
    }

    class ItalianChef extends Chef{
      function makeLasagna(){
        echo "The italian chef makes lasagna. <br>";
      }
    }

    $chef = new Chef();
    $chef->makeChicken();
    $chef->makePasta(); //Throws error call to undefined method
    $italian = new ItalianChef();
    $italian->makeChicken();
    $italian->makeLasagna();
  ?>
</body>
</html>