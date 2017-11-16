<html>
<head>
    <title>Purwadhika</title>
</head>
<body>
<h2>&#9786; Menghitung hari... &#9786;</h2>
<form action="4waktu3.php" method="post">
<p><b>Pilih tanggal: </b><input type="date" name="x">
<p><b>Pilih tanggal: </b><input type="date" name="y">
<p><input type="submit" value=" Hitung! ">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $waktu1 = $_POST["x"];
    $waktu2 = $_POST["y"];
$date1=date_create($waktu1);
$date2=date_create($waktu2);
$diff=date_diff($date1,$date2);

echo $waktu1."<br>";
echo $waktu2."<br>";
echo $diff->format("Selisih %R%a hari");

/*if($_SERVER["REQUEST_METHOD"] == "POST"){
    $waktu = $_POST["y"];
    $plusmin = $_POST["x"];
    $pilihan = $_POST["z"];

}
//<meta http-equiv="refresh" content="1"/>

//add hari
/*
$date=date_create("19-07-2017");
date_sub($date,date_interval_create_from_date_string("2 days"));
echo date_format($date,"d-m-Y");

//kurank hari
$date=date_create("19-07-2017");
date_sub($date,date_interval_create_from_date_string("2 days"));
echo date_format($date,"d-m-Y");

 //jS F Y h:i:s A
//echo idate("B") . "<br>";
/*
$bulan = " - ";
$jam = "";
$menit = ":";
$detik = ":";

if(idate("m") < 10){$bulan = " - 0";}
if(idate("H") < 10){$jam = "0";}
if(idate("i") < 10){$menit = ":0";}
if(idate("s") < 10){$detik = ":0";}

echo "<center><h1>";
echo idate("d") . "<br>";
echo idate("m") . "<br>";
echo idate("Y") . "<br>";
echo idate("H") . "<br>";
echo idate("i") . "<br>";
echo idate("s") . "<br>";


echo date("l jS F Y h:i:s A") . "<br>";


//echo idate("I") . "<br>";
//echo idate("L") . "<br>";
//echo idate("t") . "<br>";
//echo idate("U") . "<br>";
//echo idate("w") . "<br>";
//echo idate("W") . "<br>";
//echo idate("y") . "<br>";
//echo idate("z") . "<br>";
//echo idate("Z") . "<br>";

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
}
?>

</body>
</html>
