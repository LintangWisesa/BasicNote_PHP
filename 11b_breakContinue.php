<?php 

    // break
    for ($x = 1; $x <= 5; $x++) {
        if ($x == 3) {
          break;
        }
        echo "[BREAK on 3] The number is: $x <br>";
    }

    // continue
    for ($x = 1; $x <= 5; $x++) {
        if ($x == 3) {
          continue;
        }
        echo "[CONTINUE on 3] The number is: $x <br>";
    }
?>