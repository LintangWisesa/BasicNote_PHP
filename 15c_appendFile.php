<?php
    $myfile = fopen("15_1.txt", "a") or die("Unable to write file!");
    $txt = "Cindy\n";
    fwrite($myfile, $txt);
    $txt = "Dodit\n";
    fwrite($myfile, $txt);
    fclose($myfile);
?>