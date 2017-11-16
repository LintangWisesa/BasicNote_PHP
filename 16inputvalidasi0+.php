<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$namaError = "";
$namaku = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $namaError = "Nama harus diisi!";
  } else {
    $namaku = $_POST["name"];
  }}
?>

<h2>Purwadhika Job Connector</h2>
<p><b><font color="#ff0000"> * harus diisi</font><b>
<form method="post" action="16inputvalidasi0+.php"> 
  <p>Nama: <input type="text" name="name" value="<?php echo $namaku;?>"> 
  <b><font color="#ff0000"> * <?php echo $namaError;?></b></font>
  <p><input type="submit" name="ok" value=" OK ">  
</form>

<?php
echo $namaku;
?>

</body>
</html>