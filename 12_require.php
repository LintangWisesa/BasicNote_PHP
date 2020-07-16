<html>
<body>

<h1>Welcome!</h1>
<?php 
    require '12_a.php';
    echo $x . "<br>";
    echo $y . "<br>";
    echo $x + $y . "<br>";    
?>

<!-- when a file is included with the include statement and PHP cannot find it, 
the script will continue to execute -->
<!-- If we do the same example using the require statement, the echo statement will not be executed 
because the script execution dies after the require statement returned a fatal error -->

<?php 
    require '12_b.php';
    echo "Hello" . $takada;
?>

</body>
</html>