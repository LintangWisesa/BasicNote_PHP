<?php
$alas = "sepatu";  //sandal || sepatu
$warna = "merah";   //biru || merah

switch (TRUE) {
    case ($warna=="biru" && $alas=="sandal"):
        echo "Anda suka sandal biru!";
        break;
    case ($warna=="biru" && $alas=="sepatu"):
        echo "Anda suka sepatu biru!";
        break;
    case ($warna=="merah" && $alas=="sandal"):
        echo "Anda suka sandal merah!";
        break;
    case ($warna=="merah" && $alas=="sepatu"):
        echo "Anda suka sepatu merah!";
        break;
    default:
        echo "Anda tidak suka apapun";
}
?>