<center>
<h1>Penghitung Huruf & Kata</h1>
<form action="6kalkulatorhurufkata.php" method="post">
 <p><b>Ketik sebuah kalimat :
 <p><input type="text" name="kalimat">
 <p><b>Karakter yang dicari :</b> 
 <br><sup><i>*huruf/kata case sensitif</i></sup></p>
 <p><input type="text" name="huruf">
 <p><input type="submit" value="Hitung!">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	$kalimat0 = $_POST["kalimat"];
    $hurufkata = $_POST["huruf"];
    
    echo "<h1>"; 
    echo $kalimat0 . "<br>";
    $kalimat1 = "---".$kalimat0."---";
    //echo $kalimat1 . "<br>";
    $kalimat2 = str_replace(" ", "-", $kalimat1);
    //echo $kalimat2 . "<br>";
    $kalimat3 = str_replace($hurufkata, "&nbsp", $kalimat2); 
    //echo $kalimat3 . "<br>";
    echo str_word_count($kalimat3)-1;
    echo "</h1>";

    }
?>
</center>
