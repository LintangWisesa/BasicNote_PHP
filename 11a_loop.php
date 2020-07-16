<?php

// while loop
$x = 1;
while($x <= 5) {
  echo "[While loop] The number is: $x <br>";
  $x++;
}

// do while loop
$x = 20;
do {
  echo "[Do While loop] The number is: $x <br>";
  $x++;
} while ($x <= 25);

// for loop
for ($x = 0; $x <= 10; $x++) {
  echo "[for loop] The number is: $x <br>";
}

// foreach loop
// The foreach loop works only on arrays, and 
// is used to loop through each key/value pair in an array.
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
  echo "$value <br>";
}
?>