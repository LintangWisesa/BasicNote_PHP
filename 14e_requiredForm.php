<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>

    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $nama = $fruits = "";
        $namaError = $fruitsError = "";

        if (empty($_POST["nama"])) {
            $namaError = "Nama harus diisi!";
        } else {
            $nama = $_POST["nama"];
        }
        if (empty($_POST["fruits"])) {
            $fruitsError = "Harus pilih minimal 1!";
        } else {
            $fruits = $_POST["fruits"];
        }

    }
    ?>

    <p style="color:red">* wajib diisi</p>
    <form action="14e_requiredForm.php" method="post">
        Nama : <input type="text" name="nama">
        <span style="color:red">
            * <?php echo $namaError; ?>
        </span>
        <br><br>
        Pilih salah satu:<span style="color:red">
            * <?php echo $fruitsError; ?>
        </span>
        <br>
        <input type="checkbox" name="fruits[]" value="Apel"> Apel<br>
        <input type="checkbox" name="fruits[]" value="Belimbing"> Belimbing<br>
        <input type="checkbox" name="fruits[]" value="Ceri"> Ceri<br>
        <br>
        <input type="submit" value="OK"><br><br>
    </form>

    <?php 
        
        echo $nama . "<br>";
        echo $fruits[0] . ' ';
        echo $fruits[1] . ' ';
        echo $fruits[2];

    ?>
    
</body>
</html>