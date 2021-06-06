<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">

        This is my first php website
        <?php 
            echo "Hello World and this is printed using php";
            // Comments are written like this
        ?>

        <!-- This php tags can be used multiple time -->
        <?php 
            echo "<br>";
            echo "Hello World again";
            /* Multi
            line
            comments */

            $variable1 = 34;
            $variable2 = 45;

            echo "<br>";
            echo "variable1 = ";
            echo $variable1;
            echo "<br>";
            echo "variable2 = ";
            echo $variable2;

            echo "<br>";
            echo $variable1 + $variable2;

            // OPERATORS IN PHP
            
            // Arithmatic
            echo "<br>";
            echo "Sum of variable1 and variable2 is ";
            echo "<br>";
            echo $variable1 + $variable2;
            echo "<br>";

            echo "<br>";
            echo "Difference of variable1 and variable2 is ";
            echo "<br>";
            echo $variable1 - $variable2;
            echo "<br>";

            echo "<br>";
            echo "Product of variable1 and variable2 is ";
            echo "<br>";
            echo $variable1 * $variable2;
            echo "<br>";

            echo "<br>";
            echo "Quotient of variable1 and variable2 is ";
            echo "<br>";
            echo $variable1 / $variable2;
            echo "<br>";

            // Assignment operators
            $newVar = $variable1;
            echo "<br>";
            echo "The value of newVar is";
            echo $newVar;
            echo "<br>";
            // $newVar += 1;
            // $newVar -= 1;
            // $newVar *= 1;
            $newVar /= 2;
            echo $newVar;

            //Comparison Operators (return boolean values true/false)
            echo "<br>";
            echo "The value of 1==4 is ";
            echo var_dump(1==4);
            echo "<br>";
            echo "The value of 1!=4 is ";
            echo var_dump(1!=4);
            echo "<br>";
            echo "The value of 1>=4 is ";
            echo var_dump(1>=4);
            echo "<br>";
            echo "The value of 1<=4 is ";
            echo var_dump(1<=4);

            // Increment Decrement Operators:
            $variable = 5;
            echo "<br>";
            echo $variable++; // Executes and then increments
            echo "<br>";
            echo $variable--; // Executes and then decrements
            echo "<br>";
            echo ++$variable; // Increments and then executes
            echo "<br>";
            echo --$variable; // Decrements and then executes

            // Logical Operators:
            // and (&&)
            // or (||)
            // xor
            // not (!)
            echo "<br>";
            echo "<br>";
            $myVar = (true and true);
            echo var_dump($myVar);
            echo "<br>";
            $myVar = (true and false);
            echo var_dump($myVar);
            echo "<br>";
            $myVar = (false and false);
            echo var_dump($myVar);
            echo "<br>";
            $myVar = (true or true);
            echo var_dump($myVar);
            echo "<br>";
            $myVar = (true xor true); // xor => true if both are different
            echo var_dump($myVar);

        ?>
        <?php 
            define('PI', 3.14);

            // Data Types
            echo "<h3>Data types: </h3>";
            echo "<br>";
            // 1. String
            $stringVar = "This is a string";
            echo var_dump($stringVar);
            echo "<br>";
            // 2. Integer
            $intVar = 69;
            echo var_dump($intVar);
            echo "<br>";
            // 3. Float
            $floatVar = 69.420;
            echo var_dump($floatVar);
            echo "<br>";
            // 4. Boolean
            $boolVar = true;
            echo var_dump($boolVar);
            echo "<br>";
            // 5. Array
            // 6. Objects

            // Constants in PHP
            echo PI;
        ?>

    </div>
</body>
</html>