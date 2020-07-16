<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>
    
    <?php
        $friends = array('Cindy', 'Budi', 'Ali');
        $number = array(100, 12, 35, 4, 59);

        sort($friends);
        sort($number);
        print_r($friends);
        echo("<br>");
        print_r($number);
        echo("<br>");

        rsort($friends);
        rsort($number);
        print_r($friends);
        echo("<br>");
        print_r($number);
        echo("<br>");
    ?>
    
</body>
</html>