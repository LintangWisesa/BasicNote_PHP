<?php 

// $GLOBALS is a PHP super global variable which is used to access global variables 
// from anywhere in the PHP script (also from within functions or methods).
// PHP stores all global variables in an array called $GLOBALS[index]. 
// The index holds the name of the variable.

$x = 4;

function ok($a){
  // $GLOBALS['b'] = 12;
  return 2 * $a;
}

echo ok($x) . "<br>";
echo ok(15) . "<br>";
echo $b;

// =====================================

$x = 75;
$y = 25;
$GLOBALS['a'] = 10;

function addGlobal() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

echo addGlobal();
echo $z;
echo $a;

?>