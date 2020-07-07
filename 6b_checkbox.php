<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>
    
    <form action="6_checkbox.php" method="post">
        <input type="checkbox" name="fruits[]" value="Apel"> Apel<br>
        <input type="checkbox" name="fruits[]" value="Belimbing"> Belimbing<br>
        <input type="checkbox" name="fruits[]" value="Ceri"> Ceri<br>
        <input type="submit" value="OK"><br><br>
    </form>

    <?php
        $fruits = $_POST['fruits'];
        echo $fruits[0] . ' ';
        echo $fruits[1] . ' ';
        echo $fruits[2];
    ?>
    
</body>
</html>