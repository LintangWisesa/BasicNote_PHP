<?php
    $myfile = fopen("15_1.txt", "w") or die("Unable to write file!");
    $txt = "Andini\n";
    fwrite($myfile, $txt);
    $txt = "Balqis\n";
    fwrite($myfile, $txt);
    fclose($myfile);
?>