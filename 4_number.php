<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>

    <?php 
        $a = 1;
        $b = 2.5;
        $c = -3;

        echo $a . ' = ' . gettype($a) . "<br>";
        echo $b . ' = ' . gettype($b) . "<br>";
        echo $c . ' = ' . gettype($c) . "<br><br>";

        // Arithmetics
        echo $a + $b . "<br>";
        echo $a - $b . "<br>";
        echo $a * $b . "<br>";
        echo $a / $b . "<br>";
        echo $a % $b . "<br>";
        echo $a + $b * $c . "<br>";
        echo ($a + $b) * $c . "<br><br>";

        $num = 10;
        $num++;                 // $num + 1 , try --
        echo $num . "<br>";
        $num = $num + 2;
        $num += 2;              // $num = $num + 2, try += -= /= *=
        echo $num . "<br><br>";

        // Math function
        echo abs(-100) . "<br>";
        echo pow(2, 3) . "<br>";
        echo sqrt(16) . "<br>";
        echo max(2, 9) . "<br>";
        echo min(2, 9) . "<br>";

        echo round(4.59) . "<br>";
        echo ceil(3.21) . "<br>";
        echo floor(3.99) . "<br>";
        echo round(4.59, 2) . "<br>";
        echo round(4.59, 1) . "<br><br>";

        $num = "99";
        echo gettype($num) . "<br>";
        echo $num + $num . "<br>";
        echo $num * $num . "<br>";
        echo gettype((int)$num) . "<br>";
        echo gettype((float)$num) . "<br>";
    ?>
    
</body>
</html>