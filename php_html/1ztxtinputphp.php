
<form action="1ztxtinputphp.php" method="post">
	<p> Nama Anda : 
	<p><input type="text" name="nama">
	<p><input type="submit" value="O K">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $namaku = $_POST["nama"];
    echo "Nama Anda " . $namaku;
}

?>
