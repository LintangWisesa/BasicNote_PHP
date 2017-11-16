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
    $namaError = "<sup>Nama harus diisi!</sup>";
  } else {
    $namaku = $_POST["name"];
  }}
?>

<h2>Purwadhika Job Connector</h2>
<p><b><font color="#ff0000"> * harus diisi</font><b>
<form method="post" action="16inputvalidasi0.php"> 
  <p>Nama: <input type="text" name="name"> 
  <b><font color="#ff0000"><sup> * </sup><?php echo "<font color=\"#ffff00\">".$namaError."</font>";?>
  </b></font>
  <p><input type="submit" name="ok" value=" OK ">  
</form>

<?php
echo $namaku;
?>

</body>
</html>