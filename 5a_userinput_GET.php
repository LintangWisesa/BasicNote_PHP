<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>

    <!-- in this case, GET is insecure cause user can see the input value on the url! -->
    <!-- http://localhost:1234/5a_userinput_GET.php?nama=Andi&usia=21 -->
    
    <form action="5a_userinput_GET.php" method="get">
        Nama : <input type="text" name="nama">
        Usia : <input type="number" name="usia">
        <input type="submit" value="OK">
    </form>
    <br>
    
    <?php
        echo "Nama: " . $_GET['nama'] . " " . gettype($_GET['nama']) . "<br>" ; 
        echo "Usia: " . $_GET['usia'] . " " . gettype($_GET['usia']) . "<br>";
    ?>
    
</body>
</html>