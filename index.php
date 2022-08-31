<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="design.css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<?php session_start(); ?>

<head>
<link rel="shortcut icon" href="foto/vavicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>&Ccedil;&Gamma;&szlig;&nbsp; &rArr; <?php echo $_GET["CRB"];?></title>
</head>

<body id="body">
<div id="topbannerBG" align="center">
  <table width="756" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr align="center" valign="middle">
      <td width="752" height="32"><ul id="menu" class="MenuBarHorizontal">
        <li><a href="?CRB=beranda">Beranda</a>          </li>
        <li><a href="?CRB=Kas" class="MenuBarItemSubmenu">Kas</a>
          <ul>
            <li><a href="?CRB=Kashari">Kas Per Hari</a></li>
            <li><a href="?CRB=Kas2&amp;tp=msk">Kas Masuk</a></li>
<li><a href="?CRB=lapkas&amp;ck=1">Laporan Masuk</a></li>
<li><a href="?CRB=Kas2&amp;tp=klr">Kas Keluar</a></li>
<li><a href="?CRB=lapkas&amp;ck=2">Laporan Keluar</a></li>
          </ul>
        </li>
        <li><a href="?CRB=Donasi" class="MenuBarItemSubmenu">Donasi</a>
          <ul>
<li><a href="?CRB=De&amp;nm=Abdul Wahid" class="MenuBarItemSubmenu">Abdul Wahid</a>
  <ul>
                <li><a href="?CRB=De&amp;nm=M. Ilyas">M. Ilyas</a></li>
                <li><a href="?CRB=De&amp;nm=Anas Abdillah">Anas Abdillah</a></li>
                <li><a href="?CRB=De&amp;nm=Asropul Ulumi">Asropul Ulumi</a></li>
                <li><a href="?CRB=De&amp;nm=Abdul Salam">Abdul Salam</a></li>
                <li><a href="?CRB=De&amp;nm=Erlangga Sukma S.">Hanif</a></li>
                <li><a href="?CRB=De&amp;nm=Deni Indra P.">Deni Indra P.</a></li>
  </ul>
          </li>
            <li><a href="?CRB=De&amp;nm=Aminudin">Aminudin</a></li>
<li><a href="?CRB=De&amp;nm=Budi Jafar" class="MenuBarItemSubmenu">Budi Jafar</a>
  <ul>
                <li><a href="?CRB=De&amp;nm=Ariyanto">Ariyanto</a></li>
                <li><a href="?CRB=De&amp;nm=Dani Jaelani">Dani Jaelani</a></li>
                <li><a href="?CRB=De&amp;nm=Fathi Muhamad Maswan">Fathi Muhamad M</a></li>
                <li><a href="?CRB=De&amp;nm=Muktar Atmaja">Muktar Atmaja</a></li>
                <li><a href="?CRB=De&amp;nm=Rahmat Hidayat">Rahmat Hidayat</a></li>
                <li><a href="?CRB=De&amp;nm=Ridho Hariaji">Ridho Hariaji</a></li>
              </ul>
          </li>
<li><a href="?CRB=De&amp;nm=Dedi Thomas">Dedi Thomas</a></li>
<li><a href="?CRB=De&amp;nm=Marulla Harahap">Marulla Harahap</a></li>
<li><a href="?CRB=De&amp;nm=Nur Jaya">Nur Jaya</a></li>
<li><a href="?CRB=De&amp;nm=Teddy Fikri Irawan">Teddy Fikri I</a></li>
            <li><a href="?CRB=De&amp;nm=Abdul Rosid">Abdul Rosid</a></li>
            <li><a href="?CRB=De&amp;nm=Khairul Fikri" class="MenuBarItemSubmenu">Khairul Fikri</a>
              <ul>
                <li><a href="?CRB=De&amp;nm=Kaharudin Adam">Kaharudin Adam</a></li>
                <li><a href="?CRB=De&amp;nm=Kiki Sukirman">Kiki Sukirman</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="?CRB=Web Member">Web Member</a></li>
        <li><a href="?CRB=Galeri">Galeri</a></li>
      </ul></td>
    </tr>
  </table>
<div align="left" style="font-weight:bolder;"><marquee width="355" behavior="slide"><?php include "tanggal.php" ; ?></marquee></div>
</div>

<div align="center">
  <table class="web" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="270" valign="top"><div id="menukiri"><?php include "kalender.php" ; ?></div></td>
      <td width="790"><div><table class="web" width="890" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr >
          <td width="2%" rowspan="4" background="foto/bg2.jpg">&nbsp;</td>
          <td width="96%" height="53">&nbsp;</td>
          <td background="foto/bg.jpg" width="2%" rowspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td height="480" align="center" valign="top"><div><table width="850" border="1" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="671" height="171" align="center" valign="middle"><img src="foto/Hrp_Design.png" width="100%" height="100%" /></td>
            </tr>
            <tr>
              <td height="9"></td>
            </tr>
            <tr>
              <td id="tblisi" height="57" align="center" valign="top"><div ><?php include "isi.php"; ?></div></td>
            </tr>
          </table></div></td>
        </tr>
        <tr>
          <td height="26">&nbsp;</td>
        </tr>
        <tr>
          <td height="23" align="left" valign="middle" id="botombg"><div>&nbsp; &nbsp; &nbsp;www.Hrpdesign.esy.es</div></td>
        </tr>
      </table></div></td>
      <td width="270">&nbsp;</td>
    </tr>
  </table>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("menu", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>