
<form action="" method="post">
 <p> Masukkan angka: <input type="number" name="angka"></p>
 <p><input type="submit" value="OK"></p>
</form>

<?php
function factorial($x) { 
    if ($x < 2) { 
        return 1; 
    } else { 
        return ($x * factorial($x-1)); 
    } 
}

if($_SERVER["REQUEST_METHOD"] == "POST")
	{
    $angka = $_POST["angka"];
	echo $angka."! = ".factorial($angka);  
    }

//echo factorial(3)."<br>";
//echo factorial(4)."<br>";
//echo factorial(5)."<br>";

?>
