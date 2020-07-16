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
        $a = false;  // boolean : true True false False    
        $b = null;  // NULL

        echo $x . " = " . gettype($x) . "<br>";  // integer
        echo $y . " = " . gettype($y) . "<br>";  // string
        echo $z . " = " . gettype($z) . "<br>";  // double
        echo $a . " = " . gettype($a) . "<br>";  // boolean
        echo $b . " = " . gettype($b) . "<br>";  // NULL

        print($a); echo "<br>";
        print_r($a); echo "<br>";

        // show value & datatype
        var_dump($x); echo "<br>";
        var_dump($y); echo "<br>";
        var_dump($z); echo "<br>";
        var_dump($a); echo "<br>";
        var_dump($b); echo "<br>";
        
    ?>
    
</body>
</html>