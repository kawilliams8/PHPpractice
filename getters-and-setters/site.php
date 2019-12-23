<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Getters and Setters</title>
</head>
<body>
  <?php
    class Movie {
      public $title;
      public $rating;

      function __construct($title, $rating) {
        $this->title = $title;
        $this->rating = $rating;
      }
    }

    $avengers = new Movie("Avengers", "PG-13");
    echo $avengers->title;
    echo $avengers->rating; 
  ?>
</body>
</html>