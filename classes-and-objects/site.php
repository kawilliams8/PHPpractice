<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Classes and Objects</title>
</head>
<body>
  <?php
    class Book {
      var $title;
      var $author;
      var $numPages;
      var $other;

      function __construct($title, $author, $numPages, $other = 'hi'){ //Executed by the 'new' keyword
        $this->title = $title;
        $this->author = $author;
        $this->numPages = $numPages;
        $this->other = $other; //Passing default value
      }
    }

    $book1 = new Book("Harry Potter", "JK Rowling", 400);

    echo "<h1>$book1->title</h1>";
    echo "<h2>$book1->author</h2>";
    echo "<h2>$book1->numPages</h2>";
    echo "<h2>$book1->other</h2>";

    // $book2 = new Book;
    // $book2->title = "Lord of the Rings";
    // $book2->author = "Tolkein";
    // $book2->numPages = 700;

    // echo "<h1>$book2->title</h1>";
    // echo "<h2>$book2->author</h2>";
    // echo "<h2>$book2->numPages</h2>";
  ?>
</body>
</html>