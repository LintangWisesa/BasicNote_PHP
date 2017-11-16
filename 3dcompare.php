<?php

//PHP Comparison Operators

$x = 4;
$y = '4';
$z = 4;

var_dump($x == $y); echo "<br>"; //equal, sama nilainya
var_dump($x == $z); echo "<br>";

var_dump($x === $y); echo "<br>"; //identik, sama nilai & type data
var_dump($x === $z); echo "<br>";

var_dump($x != $y); echo "<br>";  //atau pakai <>
var_dump($x != $z); echo "<br>";

var_dump($x > $y); echo "<br>";
var_dump($x > $z); echo "<br>";

var_dump($x >= $y); echo "<br>";
var_dump($x >= $z); echo "<br>";

var_dump($x < $y); echo "<br>";
var_dump($x < $z); echo "<br>";

var_dump($x <= $y); echo "<br>";
var_dump($x <= $z); echo "<br>";
?>