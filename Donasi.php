<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="696" border="1" align="center">
  <tr align="center">
    <td width="112">Tanggal</td>
    <td width="183">User</td>
    <td width="183">Donatur</td>
    <td width="190">Debet</td>
  </tr>
<?php include"konek.php";
$q=mysql_query("select *from kas where transaksi='Donasi' order by tgl asc");
while($don=mysql_fetch_array($q)) {$jml=$jml+$don["jumlah"];
?>  
  <tr>
    <td><?php echo $don["tgl"];?></td>
    <td><input type="tex" height="100%" width="100%" onclick="document.location.href='?CRB=De&nm=<?php echo $don["user"];?>'" value="<?php echo $don["user"];?>" readonly="readonly" /></td>
    <td><?php echo $don["donatur"];?></td>
    <td align="right"><?php $angka=$don["jumlah"];$desimal=0;$pdesimal=',';$ribu='.'; echo "Rp.".number_format($angka,$desimal,$pdesimal,$ribu);?></td>
  </tr><?php }?>
  <tr>
    <td colspan="4"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><?php $angka=$jml;$desimal=0;$pdesimal=',';$ribu='.'; echo "Rp.".number_format($angka,$desimal,$pdesimal,$ribu);?></td>
  </tr>
</table>
</body>
</html>