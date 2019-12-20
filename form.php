<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2>User input form</h2>
    <form action="form.php" method="get">
      Name: <input type="text" name="name">
      Age: <input type="number" name="age">
      <input type="submit">
    </form>
    <br>
    Your name is <?php echo $_GET["name"] ?>
    Your age is <?php echo $_GET["age"] ?>
  <h2>Calculator</h2>
    <form action="form.php" method="get">
      Number 1: <input type="number" name="num1">
      <br>
      Number 2: <input type="number" name="num2">
      <input type="submit">
    </form>
  Total: <?php echo $GET["num1"] + $_GET["num2"] ?>
</body>
</html>