<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LAPORAN<?php echo $_GET["nis"];?></title>
</head>
<?php include"konek.php";
require "clasConversi.php";
#####################
$thn=date("Y");$bln=date("F-");$hr=date("d-");
function nomor($param='CRB-') {
$dataMax = mysql_fetch_assoc(mysql_query(
"SELECT SUBSTR(MAX(`kode`),-5) AS ID  FROM kas")); // ambil data maximal dari id transaksi

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
		 $lakas=$thn."-LAP".nomor();
#########################
?>
<body onload="window.print()" onblur="window.close()">


<?php if($_GET["ck"]==1) {$jen="DEBET"; $nis="KAS MASUK";} else {$jen="KREDIT"; $nis="KAS KELUAR";}
if(!empty($_GET["tgl"])){$lam=mysql_query("select *from kas where tgl between '$_GET[lap]' and '$_GET[tgl]' and jenis='$jen'");} else {$lam=mysql_query("select *from kas where tgl='$_GET[lap]' and jenis='$jen'");}$xx=mysql_num_rows($lam);
?>
<form id="form2" name="form2" method="post" action="print.php">
  <table width="711" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="350" align="left" valign="middle"><img src="foto/kop.png" width="347" height="106" /></td>
      <td width="349" align="left"><table width="100%" height="106" border="1" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="2">&nbsp;Nomor</td>
          <td width="171"><?php echo $lakas;?></td>
        </tr>
        <tr>
          <td width="69" rowspan="2">&nbsp;Tanggal</td>
          <td width="83">Transaksi</td>
          <td><?php if(!empty($_GET["tgl"])) echo $_GET["lap"]."  S/d  ".$_GET["tgl"]; else echo $_GET["lap"];?></td>
        </tr>
        <tr>
          <td>Cetak</td>
          <td><?php echo $hr.$bln.$thn;?></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;Lampiran</td>
          <td><?php echo $xx;?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="31" align="center"><div style="font-size:36px;"><?php echo $nis;?></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="3" colspan="2"></td>
    </tr>
    <tr>
      <td colspan="2" align="left"><table width="100%" border="1" cellpadding="0" cellspacing="0">
        <tr align="center">
          <td width="77">NO ID</td>
          <td width="175">No Transaksi</td>
          <td width="293">Keterangan</td>
          <td width="129">Jumlah</td>
        </tr>
        <?php if(!empty($_GET["tgl"])){$la=mysql_query("select *from kas where tgl between '$_GET[lap]' and '$_GET[tgl]' and jenis='$jen'");} else {$la=mysql_query("select *from kas where tgl='$_GET[lap]' and jenis='$jen'");} while($rb=mysql_fetch_array($la)){ $tot=$tot+$rb["jumlah"];?>
        <tr>
          <td align="center" valign="middle"><?php echo $rb["no"];?></td>
          <td><?php echo $rb["kode"];?></td>
          <td><?php echo $rb["transaksi"];?></td>
          <td align="right"><?php $angka=$rb["jumlah"];$desimal=0;$pdesimal=',';$ribu='.'; echo number_format($angka,$desimal,$pdesimal,$ribu).",-";?></td>
        </tr><?php }?>
        <tr>
          <td colspan="3" align="center" valign="middle"></td>
          <td align="right"><?php $angka=$tot;$desimal=0;$pdesimal=',';$ribu='.'; echo "Rp.".number_format($angka,$desimal,$pdesimal,$ribu).",-";?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="2"></td>
    </tr>
    <tr>
      <td height="26" colspan="2" valign="top">Terbilang :</td>
    </tr>
    <tr>
      <td height="42" colspan="2" valign="top">#&nbsp; <?php
//membuat objek
$oConver = new classConversi();
$data =$tot; //$_POST['data'];
//memberikan titik angka
$titik = number_format($data, 0, '','.');
$cAngka = $oConver->conversiAngka($data);
$b = ucfirst(strtolower($cAngka));
/*echo "$data";echo "$titik";*/echo "$b";
?>&nbsp; #</td>
    </tr>
    <tr align="center">
      <td height="64" colspan="2" align="left"><table width="100%" border="1" cellpadding="0" cellspacing="0">
        <tr align="center" valign="middle">
          <td width="168">Disetujui</td>
          <td width="168">Diperiksa</td>
          <td width="168">Dibuat</td>
          <td width="168">Diterima</td>
        </tr>
        <tr>
          <td height="74">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>

</body>
</html>