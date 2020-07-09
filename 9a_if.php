<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>
    
    <?php
        $isJomblo = false;

        if($isJomblo){
            echo "You're JOMBLO!<br><br>";
        } else {
            echo "You're NOT jomblo.<br><br>";
        }

        $isMale = false;
        $isTall = true;

        if ($isMale && $isTall){
            echo "You're Tall Male";
        } elseif ($isMale && !$isTall) {
            echo "You're Short Male";
        } elseif (!$isMale && $isTall) {
            echo "You're Tall Female";
        }else {
            echo "You're Female";
        }
    ?>
    
</body>
</html>