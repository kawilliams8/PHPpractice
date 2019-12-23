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
      private $title; //This attr is visible and modifiable anywhere else (global)
      public $rating; //var and public would be synonymous here

      function __construct($title, $rating) {
        $this->title = $title;
        $this->rating = $rating; //Could also call a setRating method on a private attr
        //$this->setRating($rating);
      }

      function getTitle(){
        return "<h2>$this->title</h2>";
      }

      function setTitle($title){
        $this->title = $title;
      }
    }

    $avengers = new Movie("Avengers", "PG-13");
    // echo $avengers->title; //Triggers error, due to private keyword
    echo $avengers->rating; 

    echo $avengers->getTitle();
    echo $avengers->setTitle("Another Movie");
    echo $avengers->getTitle();
  ?>
</body>
</html>