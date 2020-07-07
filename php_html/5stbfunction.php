
<?php

//Function

function writeMsg() {
    echo "Hello world!<br><br>";
}

writeMsg();

//function & argument

function familyName($fname) {  //utk fname default ketik $fname = xxxx
    echo "$fname Susanto<br>"; //dg argumen default, kalau fname kososng, akan terisi xxxx
}

familyName("Andy");
familyName("Kay");
familyName("Rudy");
familyName("Zainal");
echo "<br>";

//function & 2 argument

function rsName($nama, $tahun) {
    echo "$nama Susanto. Lahir tahun $tahun <br>";
}

rsName("Hege", "1975");
rsName("Stale", "1978");
rsName("Kai Jim", "1983");

//return function

echo "<br>";
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);

?>