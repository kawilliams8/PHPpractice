<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Object Functions</title>
</head>
<body>
  <?php
    class Student {
      var $name;
      var $major;
      var $gpa;

      function __construct($name, $major, $gpa) {
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
      }

      function hasHonors(){
        return $this->gpa >= 3.5 ? "<h3>$this->name has honors: true</h3>" : "<h3>$this->name has honors: false</h3>";
      }
    }

    $student1 = new Student("Jim", "Business", 2.8);
    $student2 = new Student("Pam", "Art", 4.0);

    echo $student1->hasHonors();
    echo $student2->hasHonors();
  ?>
</body>
</html>