<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container {
        max-width: 80%;
        background-color: rgb(228, 195, 195);
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>Lets learn about php</h1>
        <p>Your party status is here: </p>
       <?php 
            $age = 8;
            if($age > 18) {
                echo "You can go to the party";
            }
            else if($age == 7) {
                echo "You are bloody 7";
            } 
            else {
                echo "You may not go to the party";
            }
                
            echo "<br>";
            
            // Array:
            $languages = array("Python", "C++", "php", "NodeJs");
            // echo $languages[0]." and ".$languages[1]." and ".$languages[2]; // Printing multiple things together
            echo "<br>";
            // echo count($languages); // No. of elements in array

            // LOOPS in php:
            $a = 0;
            while ($a <= 10) {
                echo "<br>";
                echo "The value of a is: ".$a;
                $a++;
            }

            // While Loop
            echo "<br>";
            $languageNo = 0;
            while($languageNo < count($languages)) {
                echo "<br>";
                echo $languages[$languageNo];
                $languageNo++;
            }

            // Do While Loop
            echo "<br>";
            $langNum = 0;
            do {
                echo "<br>";
                echo $languages[$langNum];
                $langNum++;
            } while($langNum < count($languages));

            // For Loop
            echo "<br>";
            for ($j=0; $j < count($languages); $j++) { 
                echo "<br>";
                echo $languages[$j];
            }

            // For Each Loop
            echo "<br>";
            foreach ($languages as $value) {
                echo "<br>";
                echo $value;
            }

            // FUNCTIONS in PHP
            echo "<br>";
            function print5() {
                echo "<br>";
                echo "Five";
            }
            print5();

            echo "<br>";
            function print_number($number) {
                echo "<br>";
                echo "Your number is ".$number;
            }
            print_number(1);
            print_number(5);
            print_number(69);
       ?>
    </div>
</body>
</html>