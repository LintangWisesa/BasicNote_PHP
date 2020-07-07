<?php

$nama = array("Budi", "Andi", "Caca");
echo "Urutan elemen array sebelum disortir:<br>";
echo $nama[0] . "<br>";
echo $nama[1] . "<br>";
echo $nama[2] . "<br><br>";

//sort() ascending sorting array

sort($nama);
echo "Urutan elemen usai disortir dengan SORT():<br>";
echo $nama[0] . "<br>";
echo $nama[1] . "<br>";
echo $nama[2] . "<br><br>";

//rsort() descending sorting array

rsort($nama);
echo "Urutan elemen usai disortir dengan RSORT():<br>";
echo $nama[0] . "<br>";
echo $nama[1] . "<br>";
echo $nama[2] . "<br><br>";



?>