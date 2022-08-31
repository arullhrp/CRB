<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<blockquote>&nbsp;	</blockquote>
<table width="753" border="1" align="center">
  <tr>
    <td colspan="7" align="center">Kas Masuk</td>
  </tr>
  <tr align="center">
    <td width="102" height="31">NO</td>
    <td width="76">Tanggal</td>
    <td width="147">Transaksi</td>
    <td width="127">User</td>
    <td width="124">Donatur</td>
    <td width="93">Jumlah</td>
    <td width="38">Opsi</td>
  </tr>
<?php include"konek.php"; 
if($_GET["tp"]=="msk") $jns="Debet"; else $jns="Kredit";
$q=mysql_query("select *from kas where jenis='$jns' "); while($de=mysql_fetch_array($q)) { $jml=$jml+$de["jumlah"];?>
  <tr valign="middle">
    <td><div style="font-size:10px;"><?php echo $de["kode"];?></div></td>
    <td><?php echo $de["tgl"];?></td>
    <td><?php echo $de["transaksi"];?></td>
    <td><?php echo $de["user"];?></td>
    <td><?php echo $de["donatur"];?></td>
    <td align="right"><?php $angka=$de["jumlah"];$desimal=0;$pdesimal=',';$ribu='.'; echo number_format($angka,$desimal,$pdesimal,$ribu);?></td>
    <td>&nbsp;</td>
  </tr><?php }?>
  <tr>
    <td colspan="7"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right" valign="middle"><?php $angka=$jml;$desimal=0;$pdesimal=',';$ribu='.'; echo "Rp.".number_format($angka,$desimal,$pdesimal,$ribu);?></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>