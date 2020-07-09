<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>
    
    <?php
        function cube($num){
            return pow($num, 3) . "<br>";
        }
        echo cube(4);
        echo cube(5);

        // PHP 7 also supports Type Declarations for the return statement
        function addFloat(float $a, float $b) : float {
            return $a + $b;
        }
        echo addFloat(1.2, 5.2);
        echo("<br>");

        function addInt(float $a, float $b) : int {
            return $a + $b;
        }
        echo addInt(1.2, 5.2);
        echo("<br>");
    ?>
    
</body>
</html>