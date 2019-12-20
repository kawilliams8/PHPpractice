<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Practice</title>
</head>
<body>

  <?php 
    echo "<h1>Hello World</h1>";
    echo "<hr>";
    echo "<h2>Subtitle Here</h2>";

    $name = "Sally";
    $age = 35;

    echo "<h3>There once was a woman named $name.</h3>";
    echo "<h3>She was $age years old.</h3>";
    echo "<h3>She really liked the name $name.</h3>";
    echo "<h3>She doesn't like being $age years old.</h3>";

    $name = "SallyTwo";
    $age = 40;

    echo "<h3>There once was a woman named $name.</h3>";
    echo "<h3>She was $age years old.</h3>";
    echo "<h3>She really liked the name $name.</h3>";
    echo "<h3>She doesn't like being $age years old.</h3>";

    echo "<h2>Data Types</h2>";

    $var_integer = 1; //Whole numbers, no decimal, pos or neg
    $var_float = 2.34; //Floating point numbers or 'doubles', with decimal/fractional
    $var_string = 'Hello again'; //Collection of characters
    $var_bool = true; //True or false
    $var_array = array("Red", "Green", "Blue"); //Collection of related items, zero indexed
    $comment_null = "Empty variables are initalized as null";
    $comment_resources = '"Resources" are variables holding a reference to an external file or database connection';

    echo "<h3>Integers: $var_integer</h3>";
    echo "<h3>Floats: $var_float</h3>";
    echo "<h3>Strings: $var_string</h3>";
    echo "<h3>Boolean (true): $var_bool</h3>";
    echo "<h3>Array: $var_array</h3>";
    echo "<h3>*** $comment_null</h3>";
    echo "<h3>*** $comment_resources</h3>";
  ?>

  <?php
    echo "<h2>String methods</h2>";
    $phrase = "This is my phrase";
    echo "$phrase <br>"; //Just printing phrase variable
    echo strtolower($phrase); //To lower on variable
    echo strtoupper($phrase); //To upper on a variable
    echo strtoupper('dog'); //To Upper on a string
    echo strlen($phrase); //Char length
    $phrase[0] = 'X'; //Reassign char by index position
    echo $phrase;
    echo str_replace("phrase", "coffee cup", $phrase);
    echo substr($phrase, 7, 5); //Variable, then starting index, then length you want
  ?>
  
</body>
</html>