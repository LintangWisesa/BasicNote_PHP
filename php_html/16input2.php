
<form action="16inputz.php" method="post">
 <p> Masukkan angka : 
 <p><input type="number" name="angka">
 <p><input type="submit" value="Kuadratkan!">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	$bilangan = $_POST["angka"];
    echo pow($bilangan,2);
    }
?>
