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
    ?>
    
</body>
</html>