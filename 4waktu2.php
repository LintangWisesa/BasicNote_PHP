<html>
<head>
    <title>Purwadhika</title>
    <meta http-equiv="refresh" content="1"/>
</head>
<body>


<?php

//echo idate("B") . "<br>";

echo "<center><h1>";
echo idate("d") . " - ";
echo idate("m") . " - ";
echo idate("Y") . "<br>";
//echo idate("h") . "<br>";
echo idate("H") . ":";
echo idate("i") . ":";
echo idate("s") . "<br></h1><center>";
//echo idate("I") . "<br>";
//echo idate("L") . "<br>";
//echo idate("t") . "<br>";
//echo idate("U") . "<br>";
//echo idate("w") . "<br>";
//echo idate("W") . "<br>";
//echo idate("y") . "<br>";
//echo idate("z") . "<br>";
//echo idate("Z") . "<br>";

$tgl1=date_create("2017-03-15");
$tgl2=date_create("2017-03-12");

$selisih=date_diff($tgl1,$tgl2);
echo $selisih->format("%R%a hari");


$tgl= date_create("2017-07-19");

date_add($tgl,date_interval_create_from_date_string("2 days"));

echo date_format($tgl,"Y-m-d");




/*

//demo_func_date_timezone_set
$date=date_create("2013-05-25",timezone_open("Asia/Jakarta"));
echo date_format($date,"Y-m-d H:i:sP") . "<br>";

date_timezone_set($date,timezone_open("Asia/Jakarta"));
echo date_format($date,"Y-m-d H:i:sP");

// Prints the day
echo date("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
echo date("l jS F Y h:i:s A") . "<br>";

//nampilin tgl, bln, th
$t=time();
echo($t . "<br>");      //unix
echo(date("Y-m-d",$t)); //th,bln,tgl

//hitung hari antara 2 tanggal
$date1=date_create("2013-03-15");
$date2=date_create("2013-12-12");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");

//add hari
$date=date_create("2013-03-15");
date_add($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"Y-m-d");

//kurank hari
$date=date_create("2013-03-15");
date_sub($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"Y-m-d");

//cek tanggal valid/tidak
var_dump(checkdate(12,31,-400));
echo "<br>";
var_dump(checkdate(2,29,2003));
echo "<br>";
var_dump(checkdate(2,29,2004));
*/
?>

</body>
</html>
