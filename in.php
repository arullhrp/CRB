<?php
include"konek.php";
$thn=date("y");
$bln=date("m");
function nomor($param='-YCRB-') {
$dataMax = mysql_fetch_assoc(mysql_query(
"SELECT SUBSTR(MAX(`NO_FAKTUR`),-5) AS ID  FROM master_transaksi")); // ambil data maximal dari id transaksi

            if($dataMax['ID']=='') { // bila data kosong
                $ID = $param."00001";
            }else {
                $MaksID = $dataMax['ID'];
                $MaksID++;
                if($MaksID < 10) $ID = $param."0000".$MaksID; // nilai kurang dari 10
                else if($MaksID < 100) $ID = $param."000".$MaksID; // nilai kurang dari 100
                else if($MaksID < 1000) $ID = $param."00".$MaksID; // nilai kurang dari 1000
                else if($MaksID < 10000) $ID = $param."0".$MaksID; // nilai kurang dari 10000
                else $ID = $MaksID; // lebih dari 10000
            }

            return $ID;
        }
		echo $t=$bln.$thn.nomor();
?>

<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><?php  $now=date("Y-m-d"); $year=date("Y"); $mon=date("m");$hr=date("d");
	$jumlahhari=date("t",mktime(0,0,0,$mon,$hr,$year)); 
	// bangun jumlah hiperlink halaman
echo "<center>Tanggal<br />";
// bangun Previous link
if($hr > 1){
$sebelum = ($hr - 1);
echo "<a href=$_SERVER[PHP_SELF]?hal=$sebelum>Prev</a>
";
}
for($i = 1; $i <= $hr; $i++){
if(($hr) == $i){
echo "$i ";
} else {
echo "<a href=$_SERVER[PHP_SELF]?hal=$i>$i</a> ";
}
}
// bangun Next link
if($hr < $hr){
$selanjutnya = ($hr + 1);
echo "<a href=$_SERVER[PHP_SELF]?hal=$selanjutnya>Next</a>";
}
echo "</center>";
?></td>
  </tr>
</table>