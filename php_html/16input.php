
<form action="16input.php" method="post">
 <p> Nama : <input type="text" name="nama"></p>
 <p> Usia : <input type="number" name="usia"></p>
 
 <p> Gender : </p>
 <p> <input type="radio" name="gender" value="Pria"> Pria
     <input type="radio" name="gender" value="Wanita"> Wanita
     <input type="radio" name="gender" value="Lainnya"> Lainnya</p>

 <p><input type="submit" value="S E L E S A I"></p>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	$nama = $_POST["nama"];
    $usia = $_POST["usia"];
    $gender = $_POST["gender"];
    
    echo "Halo ";
    echo $nama;
    echo ", usia Anda ";
    echo $usia;
    echo " tahun <br>";
    echo "Anda seorang ";
    echo $gender;
    
    }
?>
