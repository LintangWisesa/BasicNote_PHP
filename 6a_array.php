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

        // Multidimensional Array
        $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Toyota",5,2),
            array("Mitsubishi",17,15)
        );
        
        print_r($cars);
        
        echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
        echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
        echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
        echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
    ?>
    
</body>
</html>