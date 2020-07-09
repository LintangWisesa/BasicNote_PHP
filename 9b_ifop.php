<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>
    
    <?php
        // comparison operator
        function maksimal($x, $y){
            if ($x > $y){
                return $x;
            } else {
                return $y;
            }
        }

        echo maksimal(12, 13) . "<br>";
        echo maksimal(1, 100) . "<br>";
        echo maksimal(5, 55) . "<br>";

        // logical operator and && or ||
        function maksim($x, $y, $z){
            if ($x > $y && $x > $z){
                return $x;
            } elseif ($y > $x && $y > $z) {
                return $y;
            } else {
                return $z;
            }
        }

        echo maksim(12, 13, 14) . "<br>";
        echo maksim(1, 100, 1000) . "<br>";
        echo maksim(5, 55, 555) . "<br>";

        // Conditional Assignment Operators
        // Ternary $x = condition ? val_if_TRUE : val_if_FALSE
        $x = 12;
        $y = 13;
        $z = $x < $y ? "$x lebih KECIL dari $y<br>" : "$x lebih BESAR dari $y   ";
        echo $z;

        $islogin = False;
        echo $islogin ? "Sukses login<br>" : "Silakan login dulu<br>";

        // in PHP7 Null coalescing $x = expr1 ?? expr2
        // $x = expr1 ?? expr2
        // The value of $x is expr1 if expr1 exists, and is not NULL.
        // If expr1 does not exist, or is NULL, the value of $x is expr2.
        $x = null;
        $y = 13;
        echo $x ?? $y;
    ?>
    
</body>
</html>