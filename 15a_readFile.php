<?php

// read all lines
$myfile = fopen("15_0.txt", "r") or die("File gagal dibuka!");
echo fread($myfile, filesize("15_0.txt")) . "<br>";
fclose($myfile);

// read first line
$myfile = fopen("15_0.txt", "r") or die("File gagal dibuka!");
echo fgets($myfile) . "<br>";
fclose($myfile);

// read first single character
$myfile = fopen("15_0.txt", "r") or die("File gagal dibuka!");
echo fgetc($myfile) . "<br>";
fclose($myfile);

// The feof() function checks if the "end-of-file" (EOF) has been reached.
// The feof() function is useful for looping through data of unknown length.
$myfile = fopen("15_0.txt", "r") or die("File gagal dibuka!");
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
fclose($myfile);

?>