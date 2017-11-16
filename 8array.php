<?php

//dasar

$sayur = array("Tomat", "Wortel", "Paprika");
echo "Saya suka ".$sayur[0].", ".$sayur[1]." & ".$sayur[2].".";
echo "<br><br>";

//Get The Length of an Array 

$mobil = array("Volvo", "BMW", "Toyota");
echo count($mobil);
echo "<br><br>";

//Loop Through an Indexed Array

$hewan = array("Kucing", "Kelinci", "Ikan");
$pjgarray = count($hewan);

for($x = 0; $x < $pjgarray; $x++) {
    echo $hewan[$x];
    echo "<br>";
}
echo "<br><br>";

//Associative Arrays

$usia = array("Andi"=>"20", "Budi"=>"21", "Caca"=>"22");
echo "Umur Andi " . $usia['Andi'] . " tahun.";
echo "<br><br>";

//Loop Through an Associative Array

$umur = array("Andi"=>"20", "Budi"=>"21", "Caca"=>"22");

foreach($umur as $x => $nilai_x) {
    echo "Key= " . $x . ", Value= " . $nilai_x;
    echo "<br>";
}

?>
