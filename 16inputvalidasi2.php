<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$namaError = $sexError = $lahirError = "";
$namaku = $sex = $lahir = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["name"])) {
    $namaError = "Nama harus diisi!";} 
    else {$namaku = $_POST["name"];}

  if (empty($_POST["sex"])) {
    $sexError = "Pilih salah satu!";} 
    else {$sex = $_POST["sex"];}

 if (empty($_POST["lahir"])) {
    $lahirError = "TTL harus diisi!";} 
    else {$lahir = $_POST["lahir"];}

}
?>

<h2>Purwadhika Job Connector</h2>
<p><b><font color="#ff0000"> * harus diisi</font><b>
<form method="post" action="16inputvalidasi2.php"> 
  
  <p> Nama : <input type="text" name="name"> 
  <b><font color="#ff0000"> * <?php echo $namaError;?></b></font>

  <p> Sex : <input type="radio" name="sex" value="P"> Pria <input type="radio" name="sex" value="W"> Wanita 
  <b><font color="#ff0000"> * <?php echo $sexError;?></b></font>

  <p> TTL : <input type="date" name="lahir"> 
  <b><font color="#ff0000"> * <?php echo $lahirError;?></b></font>

  <p><input type="submit" name="ok" value=" OK ">  
</form>

<?php
echo $namaku." ".$sex." ".$lahir;
?>

</body>
</html>