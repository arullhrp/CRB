<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style type="text/css">
body table {
}
#ss {
	font-size: 12px;
}
</style>
<body>
<table width="696" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr align="center">
    <td>Nama</td>
    <td><?php echo $_GET["nm"];?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <td width="112">Tanggal</td>
    <td width="183">Keterangan</td>
    <td width="183">Donatur</td>
    <td width="93">Debet</td>
    <td width="95">Kredit</td>
  </tr>
<?php include"konek.php";
$q=mysql_query("select *from kas where user='$_GET[nm]' order by tgl asc");
while($don=mysql_fetch_array($q)) {
if($don["jenis"]=="DEBET"){$deb=$don["jumlah"]; $kred=0; $jmldeb=$jmldeb+$deb;}  else {$deb=0; $kred=$don["jumlah"];$jmlkre=$jmlkre+$kred;} $ub=$jmldeb-$jmlkre;
?>  
  <tr>
    <td><?php echo $don["tgl"];?></td>
    <td><?php echo $don["transaksi"];?></td>
    <td><?php echo $don["donatur"];?></td>
    <td align="right"><?php $angka=$deb;$desimal=0;$pdesimal=',';$ribu='.'; echo number_format($angka,$desimal,$pdesimal,$ribu);?></td>
    <td align="right"><?php $angka=$kred;$desimal=0;$pdesimal=',';$ribu='.'; echo number_format($angka,$desimal,$pdesimal,$ribu);?></td>
  </tr>
  <?php }?>
  <tr>
    <td colspan="5"></td>
  </tr>
  <tr>
    <td colspan="3" align="right">Sub Total</td>
    <td align="right"><?php $angka=$jmldeb;$desimal=0;$pdesimal=',';$ribu='.'; echo "Rp.".number_format($angka,$desimal,$pdesimal,$ribu);?></td>
    <td align="right"><?php $angka=$jmlkre;$desimal=0;$pdesimal=',';$ribu='.'; echo "Rp.".number_format($angka,$desimal,$pdesimal,$ribu);?></td>
  </tr>
  <tr>
    <td colspan="3" align="right">Total </td>
    <td colspan="2" align="center"><?php $angka=$ub;$desimal=0;$pdesimal=',';$ribu='.'; echo "Rp.".number_format($angka,$desimal,$pdesimal,$ribu);?></td>
  </tr>
</table>
<table width="696" border="1" align="center" cellpadding="0" cellspacing="0" id="ss">
  <tr align="center">
    <td width="230"><table width="126" border="1">
      <tr align="center">
        <td width="57">Item Foundrising</td>
        <td width="53">Total Jumlah</td>
      </tr><?php $d=mysql_query("select *from kas where user='$_GET[nm]' and transaksi LIKE '%donasi%'"); $tm=mysql_num_rows($d); while($do=mysql_fetch_array($d)){$dona=$jml+$do["jumlah"];}?>
      <tr>
        <td align="center"><?php echo $tm;?></td>
        <td align="right"><?php $angka=$dona;$desimal=0;$pdesimal=',';$ribu='.'; echo "Rp.".number_format($angka,$desimal,$pdesimal,$ribu);?></td>
      </tr><?php ?>
    </table>
    <input type="image" value="detail" onclick="window.open(href='dedonper.php?nm=<?php echo $_GET["nm"];?>')" /></td>
    <td width="230"><table width="126" border="1">
      <tr align="center">
        <td width="57">Item Pulsa</td>
        <td width="53">Total Jumlah</td>
      </tr>
      <?php $d=mysql_query("select *from kas where user='$_GET[nm]' and transaksi LIKE '%pulsa%'"); $tm=mysql_num_rows($d); while($do=mysql_fetch_array($d)){$pul=$jml+$do["jumlah"];}?>
      <tr>
        <td align="center"><?php echo $tm;?></td>
        <td align="right"><?php $angka=$pul;$desimal=0;$pdesimal=',';$ribu='.'; echo "Rp.".number_format($angka,$desimal,$pdesimal,$ribu);?></td>
      </tr>
      <?php ?>
    </table></td>
    <td width="228"><table width="126" border="1">
      <tr align="center">
        <td width="57">Item Kasbon</td>
        <td width="53">Total Jumlah</td>
      </tr>
      <?php $d=mysql_query("select *from kas where user='$_GET[nm]' and transaksi LIKE '%kasbon,casbon%'"); $tm=mysql_num_rows($d); while($do=mysql_fetch_array($d)){$bon=$jml+$do["jumlah"];}?>
      <tr>
        <td align="center"><?php echo $tm;?></td>
        <td align="right"><?php $angka=$bon;$desimal=0;$pdesimal=',';$ribu='.'; echo "Rp.".number_format($angka,$desimal,$pdesimal,$ribu);?></td>
      </tr>
      <?php ?>
    </table></td>
  </tr>
</table>
</body>
</html>