    <?php  
    $hari = date("d");  
    $bulan = date ("m");  
    $tahun = date("Y");  
    $jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));  
    ?> 
<script type="text/javascript">
 window.setTimeout("jam()",1000);
 function jam() {
  var tanggal = new Date();
  //alert(tanggal);
  setTimeout("jam()",1000);
  document.getElementById("jam").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();}
</script>
<font size="+5"><div style="color:#FFF" align="center" id="jam">00:00:00</div></font>
<?php /*    
    <table width="80" border="0" cellpadding="0" cellspacing="1" style="border:5px double #CCC; font-size:18px; font-weight:bold;">  
      
      <tr bgcolor="#FFC20E">  
      <td align=center><font color="#FF0000">Ahd </font></td>  
      <td align=center>Sen </td>
      <td align=center>Sel </td>
      <td align=center>Rab </td>
      <td align=center>Kam </td>
      <td align=center>Jum </td>
      <td align=center>Sab </td>
      </tr>  
      <?php  
    $s=date ("w", mktime (0,0,0,$bulan,1,$tahun));  
       
    for ($ds=1;$ds<=$s;$ds++) {  
    echo "<td></td>";  
    }  
       
    for ($d=1;$d<=$jumlahhari;$d++) {  
       
     if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {  
      echo "<tr>";   
      }  
    $warna="#FFFF"; // warna default  
       
    if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") { $warna="#FF0000"; }  
    echo "<td align=center bgcolor='#33FF00'  valign=middle> <span style=\"color:$warna\">$d</span></td>";   
    if (date('w',mktime (0,0,0,$bulan,$d,$tahun)) == 6) { echo '</tr>'; }  
    }  
 ?>  
</table> */?>