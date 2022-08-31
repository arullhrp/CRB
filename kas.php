<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body table {
}
#ss {
	font-size: 12px;
}
</style>
</head>
<?php include"konek.php";
#####################
$thn=date("Y");
$bln=date("m");
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
		 $de=$bln.$thn."-de".nomor(); $kre=$bln.$thn."-kre".nomor();
#########################
if(isset($_POST["in"]))
{	$bln=date('d-m-Y');
	if(!empty($_POST["tgl"]) && !empty($_POST["tr"]) && !empty($_POST["user"]) && !empty($_POST["jns"]) && !empty($_POST["jml"]) )
	{	if(empty ($_POST["bon"])) $bon='T'; else $bon=$_POST["bon"];
		switch($_POST["jns"])
		{case"Debet":$q=mysql_query("insert into kas values('','$de', '$_POST[tgl]', '$_POST[tr]', '$_POST[user]', '$_POST[donatur]', 'DEBET', '$_POST[jml]','$aldo','$bon')");
		if($q) echo"<script>alert('Alhamdulillah')</script>";
		else echo"<script>alert('gagal');history.go(-1)</script>"; break;
		case"Kredit":$q=mysql_query("insert into kas values('', '$kre', '$_POST[tgl]', '$_POST[tr]', '$_POST[user]', '$_POST[donatur]', 'KREDIT', '$_POST[jml]','$aldo','$bon')");
		if($q) echo"<script>alert('Alhamdulillah')</script>";
		else echo"<script>alert('gagal');history.go(-1)</script>"; break;}
	}
	else {echo"<script>alert('Data transaksi harus lengkap');document.location.href='?CRB=Kas'</script>";}
}

if(isset($_POST["in2"]))
{	
	switch($_POST["jns2"])
	{case"Debet":$q=mysql_query("update kas set tgl='$_POST[tgl2]', transaksi='$_POST[tr2]', user='$_POST[user2]', donatur='$_POST[donatur2]', jenis='DEBET', jumlah='$_POST[jml2]', bon='$_POST[bon2]' where no='$_POST[id2]'"); if($q){echo"<script>alert('alhamdulillah telah diubah')</script>";} else {echo"<script>alert('maaf belum diubah')</script>";} break;
	case"Kredit":$q=mysql_query("update kas set tgl='$_POST[tgl2]', transaksi='$_POST[tr2]', user='$_POST[user2]', donatur='$_POST[donatur2]', jenis='KREDIT', jumlah='$_POST[jml2]', bon='$_POST[bon2]' where no='$_POST[id2]'"); if($q){echo"<script>alert('alhamdulillah telah diubah')</script>";} else {echo"<script>alert('maaf belum diubah')</script>";} break;}
	
}
if (isset($_POST["Hapus"]))
{$del=mysql_query("delete from kas where no ='$_POST[id3]'");}
?>
<body>
<?php if(isset($_POST["Tambah"])) {?>
<form id="form1" name="form1" method="post" action="">
  <table width="444" border="1" align="center">
    <tr>
      <td height="48" colspan="3" align="center">Input Kas CRB</td>
    </tr>
    <tr>
      <td width="156">Tanggal</td>
      <td width="272" colspan="2"><input type="date" name="tgl" id="tgl" /></td>
    </tr>
    <tr>
      <td>Transaksi</td>
      <td colspan="2"><input name="tr" type="text" id="tr" size="45" /></td>
    </tr>
    <tr>
      <td>User</td>
      <td colspan="2"><select name="user" id="user">
        <option value="CRB" selected="selected">CRB</option>
<option value="Abdul Salam">Abdul Salam</option>
          <option value="Abdul Wahid">Abdul Wahid</option>
          <option value="Aminudin">Aminudin</option>
          <option value="Anas Abdillah">Anas Abdillah</option>
          <option value="Ariyanto">Ariyanto</option>
          <option value="Asropul Ulumi">Asropul Ulumi</option>
          <option value="Budi Jafar">Budi Ja'far</option>
          <option value="Dani Jaelani">Dani Jaelani</option>
          <option value="Dedi Thomas">Dedi Thomas</option>
          <option value="Deni Indra P.">Deni Indra P.</option>
          <option value="Dicky">Dicky</option>
          <option value="Erlangga Sukma S.">Erlangga Sukma S.</option>
          <option value="Fathi Muhamad Maswan ">Fathi Muhamad Maswan </option>
          <option value="Kaharudin Adam">Kaharudin Adam</option>
          <option value="Khairul Fikri">Khairul Fikri</option>
          <option value="Kiki Sukirman">Kiki Sukirman</option>
          <option value="M. Ilyas">M. Ilyas</option>
          <option value="Marulla Harahap">Marulla Harahap</option>
          <option value="Muktar Atmaja">Muktar Atmaja</option>
          <option value="Nur Jaya">Nur Jaya</option>
          <option value="Rahmat Hidayat">Rahmat Hidayat</option>
          <option value="Ridho Hariaji">Ridho Hariaji</option>
          <option value="Teddy Fikri Irawan">Teddy Fikri Irawan</option>
          <option value="Abdul Rosid">Abdul Rosid</option>
      </select></td>
    </tr>
    <tr>
      <td>Donatur</td>
      <td colspan="2"><input type="text" name="donatur" id="donatur" /></td>
    </tr>
    <tr>
      <td>Jenis Transaksi</td>
      <td colspan="2"><input type="radio" name="jns" id="jns" value="Debet" />
        Debet 
        <input type="radio" name="jns" id="jns2" value="Kredit" />
        Kredit</td>
    </tr>
    <tr>
      <td>Jumlah (Rp)</td>
      <td colspan="2"><input type="number" name="jml" id="jml" /> 
        <input name="bon" type="checkbox" id="bon" value="Y" />
      Ada Bon     </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="in" id="in" value="Simpan" /></td>
      <td><input onclick="document.location.href='?CRB=Kas'" type="reset" name="Reset" id="button" value="Batal" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>
</form>
<?php } ?>
<?php if(isset($_POST["Edit"])) {?>
<form id="form2" name="form2" method="post" action="">
  <table width="444" border="1" align="center">
    <tr>
      <td height="48" colspan="3" align="center">Edit Kas CRB</td>
    </tr>
<?php $q=mysql_query("select *from kas where no='$_POST[id]'"); if($dit=mysql_fetch_array($q))
?>    
    <tr>
      <td width="156">Tanggal</td>
      <td width="272" colspan="2"><input type="date" name="tgl2" id="tgl2" value="<?php echo $dit['tgl'];?>" /></td>
    </tr>
    <tr>
      <td>Transaksi</td>
      <td colspan="2"><input name="tr2" type="text" id="tr2" size="45" value="<?php echo $dit['transaksi'];?>"/></td>
    </tr>
    <tr>
      <td>User</td>
      <td colspan="2"><select name="user2" id="user2">
        <option value="<?php echo $dit['user'];?>">&lt;?php echo $dit['user'];?&gt; </option>
        <option value="CRB">CRB</option>
          <option value="Abdul Salam">Abdul Salam</option>
          <option value="Abdul Wahid">Abdul Wahid</option>
          <option value="Aminudin">Aminudin</option>
          <option value="Anas Abdillah">Anas Abdillah</option>
          <option value="Ariyanto">Ariyanto</option>
          <option value="Asropul Ulumi">Asropul Ulumi</option>
          <option value="Budi Ja'far">Budi Ja'far</option>
          <option value="Dani Jaelani">Dani Jaelani</option>
          <option value="Dedi Thomas">Dedi Thomas</option>
          <option value="Deni Indra P.">Deni Indra P.</option>
          <option value="Dicky">Dicky</option>
          <option value="Erlangga Sukma S.">Erlangga Sukma S.</option>
          <option value="Fathi Muhamad Maswan ">Fathi Muhamad Maswan </option>
          <option value="Kaharudin Adam">Kaharudin Adam</option>
          <option value="Khairul Fikri">Khairul Fikri</option>
          <option value="Kiki Sukirman">Kiki Sukirman</option>
          <option value="M. Ilyas">M. Ilyas</option>
          <option value="Marulla Harahap">Marulla Harahap</option>
          <option value="Muktar Atmaja">Muktar Atmaja</option>
          <option value="Nur Jaya">Nur Jaya</option>
          <option value="Rahmat Hidayat">Rahmat Hidayat</option>
          <option value="Ridho Hariaji">Ridho Hariaji</option>
          <option value="Teddy Fikri Irawan">Teddy Fikri Irawan</option>
      </select></td>
    </tr>
    <tr>
      <td>Donatur</td>
      <td colspan="2"><input type="text" name="donatur2" id="donatur2" value="<?php echo $dit['donatur'];?>"/></td>
    </tr>
    <tr>
      <td>Jenis Transaksi</td>
      <td colspan="2"><?php if($dit["jenis"]=="KREDIT") echo" <input type='radio' name='jns2' id='jns3' value='Debet' />
        Debet
        <input type='radio' name='jns2' id='jns4' value='Kredit' checked='checked' />
        Kredit "; else echo" <input type='radio' name='jns2' id='jns3' value='Debet' checked='checked' />
        Debet
        <input type='radio' name='jns2' id='jns4' value='Kredit' />
        Kredit "; ?></td>
    </tr>
    <tr>
      <td>Jumlah (Rp)</td>
      <td colspan="2"><input type="text" name="jml2" id="jml2" value="<?php echo $dit["jumlah"];?>"/> <?php if ($dit["bon"]=='Y')echo"<input name='bon2' type='checkbox' id='bon2' value='Y' checked='checked' />"; else echo"<input name='bon2' type='checkbox' id='bon2' value='Y'/>"?>
Ada Bon </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="in2" id="in2" value="Simpan" />
      <input name="id2" type="hidden" id="id2" value="<?php echo $dit['no'] ?>" /></td>
      <td><input onclick="document.location.href='?CRB=Kas'" type="reset" name="button" id="button2" value="Batal" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>
</form>
<?php } ?>
<table id="ss" width="100%" height="146" border="1" align="center">
  <tr align="center">
    <td height="26">&nbsp;</td>
    <td height="26">&nbsp;</td>
    <td height="26">&nbsp;</td>
    <td height="26">&nbsp;</td>
    <td height="26">&nbsp;</td>
    <td>&nbsp;</td>
    <td><form id="form5" name="form5" method="post" action="">
      <input type="submit" name="saldo" id="saldo" value="Udate Saldo" />
    </form></td>
    <td colspan="2"><form id="input" name="input" method="post" action="">
      <input type="submit" name="Tambah" id="ss" value="Tambah" />
    </form></td>
  </tr>
  <tr align="center" valign="middle" >
    <td width="75" height="19">TANGGAL</td>
    <td width="179">TRANSAKSI</td>
    <td width="122">USER</td>
    <td width="113">DONATUR</td>
    <td width="99">DEBET</td>
    <td width="98">KREDIT</td>
    <td width="40">SALDO</td>
    <td colspan="2">Opsi</td>
  </tr>
<?php $bln=date('Y-m-d'); $q=mysql_query("select *from kas order by tgl asc"); while($kas=mysql_fetch_array($q)){
if($kas['jenis']=="DEBET"){
$debit=$kas['jumlah'];
$kredit="0";
$aldo=$aldo+$debit;
$umdebet=$umdebet+$debit;}
else{
$kredit=$kas['jumlah'];
$debit="0";
$aldo=$aldo-$kredit;
$umkredit=$umkredit+$kredit;}
$saldo=$umdebet-$umkredit;
if(isset($_POST["saldo"])){$cek=mysql_query("update kas set saldo='$saldo' where no='$kas[no]'");}
?>  
  <tr valign="middle">
    <?php if($kas["bon"]!='Y') echo"<td height='22' bgcolor='#CC9900'> $kas[tgl]</td>"; else echo"<td height='22'> $kas[tgl]</td>"?>
    <td><?php echo $kas["transaksi"]; ?></td>
    <td><?php echo $kas["user"]; ?></td>
    <td><?php echo $kas["donatur"];?></td>
    <td align="right"><?php $angka=$debit;$desimal=0;$pdesimal=',';$ribu='.'; echo number_format($angka,$desimal,$pdesimal,$ribu).",-";?></td>
    <td align="right"><?php $angka=$kredit;$desimal=0;$pdesimal=',';$ribu='.'; echo number_format($angka,$desimal,$pdesimal,$ribu)."-";?></td>
    <td align="right"><?php $angka=$saldo;$desimal=0;$pdesimal=',';$ribu='.'; echo number_format($angka,$desimal,$pdesimal,$ribu)."-";?></td>
    <td width="40"><form id="form3" name="form3" method="post" action=""><input id="ss" type="submit" name="Edit" value="Edit" /><input name="id" type="hidden" id="id" value="<?php echo $kas["no"]; ?>" /></form></td>
    <td width="62"><form id="form4" name="form4" method="post" action="">
      <input id="ss" type="submit" name="Hapus" value="Hapus" onclick="confirm('yakin akan dihapus ?')" />
      <input name="id3" type="hidden" id="id3" value="<?php echo $kas["no"]; ?>" />
    </form></td>
  </tr>
  <?php }?>
  <tr align="center" valign="middle" >
    <td height="19">TANGGAL</td>
    <td>TRANSAKSI</td>
    <td>USER</td>
    <td>DONATUR</td>
    <td>DEBET</td>
    <td>KREDIT</td>
    <td>SALDO</td>
    <td colspan="2">Opsi</td>
  </tr>
  <tr valign="middle">
    <td height="22">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php $angka=$umdebet;$desimal=0;$pdesimal=',';$ribu='.'; echo "Rp.".number_format($angka,$desimal,$pdesimal,$ribu);?></td>
    <td><?php $angka=$umkredit;$desimal=0;$pdesimal=',';$ribu='.'; echo "Rp.".number_format($angka,$desimal,$pdesimal,$ribu);?></td>
    <td><?php $angka=$saldo;$desimal=2;$pdesimal=',';$ribu='.'; echo "Rp.".number_format($angka,$desimal,$pdesimal,$ribu);?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>