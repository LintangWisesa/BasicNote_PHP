<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>

    <?php 
        $nama = "Lintang Wisesa";
        echo $nama . "<br>";    
        
        echo strlen($nama) . "<br>";            // character's length
        echo str_word_count($nama) . "<br>";    // character's word count
        echo strrev($nama) . "<br>";            // reverse string
        echo strtolower($nama) . "<br>";        // lowercase
        echo strtoupper($nama) . "<br>";        // uppercase
        echo str_replace("Wisesa", 'Budiman', $nama) . '<br>';  // replace Wisesa => Budiman
        echo substr($nama, 8) . '<br>';         // sub string start on index 8 til end: Wisesa
        echo substr($nama, 8, 3) . '<br><br>';  // sub string start on index 8, sebanyak 3 char: Wis

        echo $nama[0] . "<br>";             // print first character
        echo $nama[-1] . "<br>";            // print last caracter
        echo strpos($nama, "L") . '<br>';   // index position of 'L'
        $nama[1] = 'o';                     // assign value to 1st character in string
        echo $nama . "<br><br>";            // Lontang Wisesa
    ?>
    
</body>
</html>