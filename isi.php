<?php 
switch ($_GET ['CRB'])
{
case 'beranda' : if (!file_exists("beranda.php"))
	die("<script>alert('halaman tidak ada');document.location.href='?CRB=';</script>");
	include "beranda.php";
break;

case 'Kas' : if (!file_exists("kas.php"))
	die("<script>alert('halaman tidak ada');document.location.href='?CRB=';</script>");
	include "kas.php";
break;

case 'Kashari' : if (!file_exists("kasperhari.php"))
	die("<script>alert('halaman tidak ada');document.location.href='?CRB=';</script>");
	include "kasperhari.php";
break;

case 'lapkas' : if (!file_exists("lapkas.php"))
	die("<script>alert('halaman tidak ada');document.location.href='?CRB=';</script>");
	include "lapkas.php";
break;

case 'Galeri' : if (!file_exists("galeri.php"))
	die("<script>alert('halaman tidak ada');document.location.href='?CRB=';</script>");
	include "galeri.php";
break;

case 'Donasi' : if (!file_exists("donasi.php"))
	die("<script>alert('halaman tidak ada');document.location.href='?CRB=';</script>");
	include "Donasi.php";
break;

case 'De' : if (!file_exists("Donasipero.php"))
	die("<script>alert('halaman tidak ada');document.location.href='?CRB=';</script>");
	include "Donasipero.php";
break;

case 'Kas2' : if (!file_exists("kas2.php"))
	die("<script>alert('halaman tidak ada');document.location.href='?CRB=';</script>");
	include "kas2.php";
break;

case 'Web Member' : if (!file_exists("web.php"))
	die("<script>alert('halaman tidak ada');document.location.href='?CRB=';</script>");
	include "web.php";
break;


default: case ''; include "beranda.php";
}
?>