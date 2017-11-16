<?php  

/*
echo strlen($kalimat) . '<br>';

echo str_word_count($kalimat) . '<br>';

echo strrev($kalimat) . '<br>';

echo strpos($kalimat, "Dino") . '<br>';

echo str_replace(" ", "a", $kalimat) . '<br>';
*/

$kalimat = "welcome to the world of electro dinosaur!";
echo $kalimat . "<br>";
$kalimat2 = str_replace(" ", "a", $kalimat);
echo $kalimat2 . "<br>";
$kalimat3 = str_replace("electro", " ", $kalimat2); 
echo $kalimat3 . "<br>";
echo str_word_count($kalimat3)-1;
?>  