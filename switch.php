<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Switch</title>
</head>
<body>
  What was your grade?
  <form action="switch.php" method="post">
    <input type="text" name="grade">
    <input type="submit">
  </form>
  <?php
    $grade = $_POST["grade"];
    switch ($grade){
      case "A":
        echo "A";
        break;
      case "B":
        echo "B";
        break;
      case "C":
        echo "C";
        break;
      case "D":
        echo "D";
        break;
      case "F":
        echo "F";
        break;
      default:
        echo "Invalid grade";
    }
  ?>
</body>
</html>