<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>
    
    <form action="14d_checkbox&radio.php" method="post">
        Nama : <input type="text" name="nama">
        <br><br>
        Buah favorit :
        <br>
        <input type="checkbox" name="fruits[]" value="Apel"> Apel<br>
        <input type="checkbox" name="fruits[]" value="Belimbing"> Belimbing<br>
        <input type="checkbox" name="fruits[]" value="Ceri"> Ceri
        <br><br>
        Gender:
        <br>
        <input type="radio" name="gender" value="Pria">Pria
        <input type="radio" name="gender" value="Wanita">Wanita
        <br><br>
        <input type="submit" value="OK">
    </form>
    <br>

    <?php
        $nama = $_POST["nama"];
        $fruits = $_POST['fruits'];
        $gender = $_POST['gender'];
        
        echo $nama . "<br>";
        echo $gender . "<br>";
        echo $fruits[0] . ' ';
        echo $fruits[1] . ' ';
        echo $fruits[2];
    ?>
    
</body>
</html>