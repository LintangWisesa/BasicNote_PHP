<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>
    
    <?php
        function hi(){
            echo "Hi!" . "<br>";
        }

        // function with parameters
        function hello($name, $age){
            echo "Hello $name! You're $age" . "<br>";
        }

        hi(); 
        hi();
        hello("Andi", 21);
        hello("Budi", 35);

        // In PHP 7, type declarations were added
        // function with type declared parameters
        function add(int $a, int $b) {          // string, bool, int, float
            echo $a + $b . "<br>";
        }
        
        add(12, 13);
        add(1.5, 2.9);              // = 3 karena yg diminta int bukan float
        add("6 buku", "2 sapi");    // = 8 karena yg diminta int bukan string
        // add("a", "b");              // = FATAL ERROR
        
        // default param value
        function tes(int $a = 20) {          // string, bool, int, float
            echo $a . "<br>";
        }
        
        tes(100);
        tes();      // =20 karena call func tanpa param & default value param=20
        tes(21);
    ?>
    
</body>
</html>