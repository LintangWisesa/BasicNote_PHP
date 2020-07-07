<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>

    <?php 
        $x = 5985;  // integer
        $y = 'Halo';    // string
        $z = 2.12;  // double
        $a = true;  // boolean    
        $b = null;  // NULL

        echo $x . " = " . gettype($x) . "<br>";  // integer
        echo $y . " = " . gettype($y) . "<br>";  // string
        echo $z . " = " . gettype($z) . "<br>";  // double
        echo $a . " = " . gettype($a) . "<br>";  // boolean
        echo $b . " = " . gettype($b) . "<br>";  // NULL
    ?>
    
</body>
</html>