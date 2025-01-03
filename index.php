<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing development</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
        }
    ?>

    <?php

        $answer = "Earth";
        $bool = true;
        $num = 1;

        switch ($answer) {
            case "Earth":
                echo "Correct answer!";
                $num++;
                echo $num;
            case "Mars":
                echo "Wrong answer! Mars is the 4th planet and is also called the red planet";
                $num += 10;
            case "Jupiter":
                echo "Wrong answer! Jupiter is the biggest planet in our solar system.";
            default:
                echo "Wrong answer!";
        }

        while (!$bool) {
            echo "It's true";
        }

        do {
            $num--;
            echo $num;
        } while (!$bool);

        for ($i = 0; $i < 10; $i++) {
            echo $i;
        }

        $arr = array(1,2,4,5,55,2);
        foreach ($arr as $all) {
            echo $all . " ";
        }
        echo "\n";

        $members = array("Peter"=>"35", "Ben"=>"22");

        echo count($members);

        foreach ($members as $x => $y) {
            echo $x . " " . $y;
            echo "\n";
        }

        class Car {
            public $make;
            public $speed;

            public function __construct($make, $speed) {
                $this->make = $make;
                $this->speed = $speed;
            }
        }

        $newCar = new Car("BMW",200);

        foreach ($newCar as $key => $value) {
            echo "Car: " . $key . ", Speed: " . $value;
            echo "\n";
        }

        
        function message($name) {
            echo "Hello $name";
        }

        message("Eduan");

        function sum($num1, $num2) {
            $val = $num1 + $num2;
            return $val;
        }

        echo sum(1,2);

        $car = [
        "brand"=>"Ford", 
        "model"=>"Mustang", 
        "year"=>1964
        ];

        echo $car["model"];

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $answer = $_POST["answer"];
        
            if ($answer == "Earth") {
               echo "Correct answer!";
            } else {
                echo "Wrong answer";
            }
        
        }
    ?>
</body>
</html>