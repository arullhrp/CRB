<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#ss {	font-size: 12px;
}
</style>
</head>
<?php include"konek.php"; ?>
<body>
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" id="ss">
  <tr align="center">
    <td width="230"><table width="100%" border="1">
      <tr align="center">
        <td width="57">Item Foundrising</td>
        <td width="53">Total Jumlah</td>
        <td width="53">&nbsp;</td>
        <td width="53">&nbsp;</td>
        <td width="53">&nbsp;</td>
        <td width="53">&nbsp;</td>
      </tr>
      <?php $d=mysql_query("select *from kas where user='$_GET[nm]' and transaksi LIKE '%donasi%'"); $tm=mysql_num_rows($d); while($do=mysql_fetch_array($d)){$dona=$jml+$do["jumlah"];}?>
      <tr>
        <td align="center"><?php echo $tm;?></td>
        <td align="right"><?php $angka=$dona;$desimal=0;$pdesimal=',';$ribu='.'; echo "Rp.".number_format($angka,$desimal,$pdesimal,$ribu);?></td>
        <td align="right">&nbsp;</td>
        <td align="right">&nbsp;</td>
        <td align="right">&nbsp;</td>
        <td align="right">&nbsp;</td>
      </tr>
      <?php ?>
    </table></td>
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