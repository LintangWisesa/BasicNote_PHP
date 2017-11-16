
<!DOCTYPE html><html><head><title>Sortir Array</title>
<style>
table, th, td {
	border: 1px solid black;
	border-collapse: collapse;}
</style></head><body>

<?php
echo "<table>";
$nama = array("Budi"=>"19", "Andi"=>"21", "Caca"=>"20");
echo "Urutan elemen array sebelum disortir:<br>";
foreach($nama as $key => $value) {
echo "<tr><td>&nbsp;&nbsp;".$key . "&nbsp;&nbsp;</td><td>&nbsp;&nbsp;" . $value . "&nbsp;&nbsp;</td></tr>";}
echo "</table>";

//sorting array ascending berdasarkan key

echo "<br>Urutan ascending berdasarkan nama KSORT:<br>";
ksort($nama);
foreach($nama as $key => $value) {
echo $key . "&nbsp" . $value . "<br>";}

//sorting array descending berdasarkan key

echo "<br>Urutan descending berdasarkan nama KRSORT:<br>";
krsort($nama);
foreach($nama as $key => $value) {
echo $key . "&nbsp" . $value . "<br>";}

//sorting array ascending berdasarkan value

echo "<br>Urutan ascending berdasarkan usia ASORT:<br>";
asort($nama);
foreach($nama as $key => $value) {
echo $key . "&nbsp" . $value . "<br>";}

//sorting array descending berdasarkan value

echo "<br>Urutan descending berdasarkan usia ARSORT:<br>";
arsort($nama);
foreach($nama as $key => $value) {
echo $key . "&nbsp" . $value . "<br>";}

?>
</body>
</html>