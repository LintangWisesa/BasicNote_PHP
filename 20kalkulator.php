<center>
<h1>Kalkulator Sederhana</h1>
<form action="16kalkulator.php" method="post">
 <p>Masukkan angka 1 : <input type="number" name="angka1">
 <p>Masukkan angka 2 : <input type="number" name="angka2">
 <p> <input type="radio" name="math" value="+"> + Tambah
     <input type="radio" name="math" value="-"> - Kurang
     <input type="radio" name="math" value="*"> x Kali
     <input type="radio" name="math" value="/"> : Bagi
     </p>
 <p> <input type="radio" name="math" value="%"> % Sisa Bagi
     <input type="radio" name="math" value="^"> ^ Pangkat
     <input type="radio" name="math" value="v"> v Akar Pangkat
     </p>
 <p><input type="submit" value="Hitung!">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	$bilangan1 = $_POST["angka1"];
    $bilangan2 = $_POST["angka2"];
    $operator = $_POST["math"];
    echo "<h1>"; 
    if($operator == "+"){echo $bilangan1+$bilangan2;}
    if($operator == "-"){echo $bilangan1-$bilangan2;}
    if($operator == "*"){echo $bilangan1*$bilangan2;}
    if($operator == "/"){echo $bilangan1/$bilangan2;}
    if($operator == "%"){echo $bilangan1%$bilangan2;}
    if($operator == "^"){echo pow($bilangan1,$bilangan2);}
    if($operator == "v"){echo pow($bilangan1,1/$bilangan2);}
    echo "</h1>";
    }

</center>
