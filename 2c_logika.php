<?php

//PHP Logical Operators

$x = 40;
$y = 50;

if ($x == 40 and $y == 50) {echo "x = 40 & y = 50 <br>";}
if ($x == 40 && $y == 50) {echo "x = 40 & y = 50 <br><br>";}

if ($x == 40 or $y == 80) {echo "x = 40 & y salah <br>";}
if ($x == 40 || $y == 80) {echo "x = 40 & y salah <br>";}
if ($x == 40 xor $y == 80) {echo "XOR true if x & y trus, but not both";}

?>