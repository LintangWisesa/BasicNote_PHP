<?php
$x = 1.575;
echo ceil($x) . "<br>";  //atas
echo floor($x) . "<br>"; //bawah
echo round($x,2,PHP_ROUND_HALF_UP);
echo "<br>";   //atas
echo round($x,2,PHP_ROUND_HALF_DOWN); //bawah
echo "<br>";
echo round($x,2,PHP_ROUND_HALF_EVEN);
echo "<br>"; //genap
echo round($x,2,PHP_ROUND_HALF_ODD);
echo "<br>";  //ganjil
?>