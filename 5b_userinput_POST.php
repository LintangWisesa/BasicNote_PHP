<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>
    
    <!-- POST method is more secure than GET -->

    <form action="5b_userinput_POST.php" method="post">
        Nama : <input type="text" name="nama">
        <input type="submit" value="OK">
    </form>
    <br>
    
    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nama = $_POST["nama"];
            echo "Nama Anda " . $nama;
        }
    ?>
    
</body>
</html>