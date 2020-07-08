<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>
    
    <?php
        // associative Array = array with pair of key & value for each element
        $nilai = array("Andi"=>"A", "Budi"=>"B", "Caca"=>"C");
        $nilai['Caca'] = 'A';

        print_r($nilai);
        echo $nilai['Andi'] . "<br>";
        echo $nilai['Budi'] . "<br>";
        echo $nilai['Caca'] . "<br>";

    ?>
    
</body>
</html>