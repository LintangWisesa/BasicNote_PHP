<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>
    
    <?php
        $friends = array('Andi', 'Budi', 'Caca');
        print_r($friends);

        echo $friends . "<br>";
        echo gettype($friends) . "<br>";
        
        echo $friends[0] . "<br>";
        echo $friends[1] . "<br>";
        echo $friends[2] . "<br>";
        echo count($friends) . "<br>";

        $cars = ['Avanza', 'Brio', 'Camry'];
        print_r($cars);
        $cars[0] = 'Pajero';
        echo $cars[0] . "<br>";
    ?>
    
</body>
</html>