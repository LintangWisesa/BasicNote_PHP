<?php

$motor = array(
  array("Honda",22,18), array("Suzuki",15,13),
  array("Yamaha",5,2), array("Ducati",17,15)
  );
  
echo $motor[0][0].": Stok: ".$motor[0][1].", Terjual: ".$motor[0][2].".<br>";
echo $motor[1][0].": Stok: ".$motor[1][1].", Terjual: ".$motor[1][2].".<br>";
echo $motor[2][0].": Stok: ".$motor[2][1].", Terjual: ".$motor[2][2].".<br>";
echo $motor[3][0].": Stok: ".$motor[3][1].", Terjual: ".$motor[3][2].".<br>";

/*

// <ol> = order list dg angka
// <ul> = unordered list
// <li> = elemen list

$motor = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$motor[$row][$col]."</li>";
  }
  echo "</ul>";
}

*/

?>
