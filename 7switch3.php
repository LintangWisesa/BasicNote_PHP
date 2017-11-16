<?php
$alas = "sepatu";  //sandal || sepatu
$warna = "biru";  //biru || merah
$harga = "mahal";  //murah || mahal

switch (TRUE) {
    case ($warna=="biru" && $alas=="sandal" && $harga=="murah"):
        echo "Anda suka sandal biru murah!";
        break;
    case ($warna=="biru" && $alas=="sandal" && $harga=="mahal"):
        echo "Anda suka sandal biru mahal!";
        break;
    case ($warna=="biru" && $alas=="sepatu" && $harga=="murah"):
        echo "Anda suka sepatu biru murah!";
        break;
    case ($warna=="biru" && $alas=="sepatu" && $harga=="mahal"):
        echo "Anda suka sepatu biru mahal!";
        break;
    case ($warna=="merah" && $alas=="sandal" && $harga=="murah"):
        echo "Anda suka sandal merah murah!";
        break;
    case ($warna=="merah" && $alas=="sandal" && $harga=="mahal"):
        echo "Anda suka sandal merah mahal!";
        break;    
    case ($warna=="merah" && $alas=="sepatu" && $harga=="murah"):
        echo "Anda suka sepatu merah murah!";
        break;
    case ($warna=="merah" && $alas=="sepatu" && $harga=="mahal"):
        echo "Anda suka sepatu merah mahal!";
        break;
    default:
        echo "Anda tidak suka alas kaki apapun";
}
?>