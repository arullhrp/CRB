<?php
require "clasConversi.php";
?>

<?php
//membuat objek
$oConver = new classConversi();
$data =123456; $_POST['data'];
//memberikan titik angka
$titik = number_format($data, 0, '','.');
$cAngka = $oConver->conversiAngka($data);
$b = ucfirst(strtolower($cAngka));
echo "

$data";
echo "

$titik";
echo "

Terbilang : $b

";
?>