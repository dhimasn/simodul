<?php
include "config.php";
session_start();
$enrollkey = aman (($_POST['enrollkey']));
error_reporting(0);
if (empty($_SESSION['nama']) AND empty ($_SESSION['password'])){include "index.php";}
else{
?>
<?php
if ($_SESSION[status] == "1" AND $enrollkey =="simia10"){echo "<script>document.location.href='simia_kls_10/pab/ipa.php'</script>";}

if ($_SESSION[status] == "1" AND $enrollkey =="simia11"){echo "<script>document.location.href='simia_kls_11/pab/ipa.php'</script>";}

if ($_SESSION[status] == "1" AND $enrollkey =="simia12"){echo "<script>document.location.href='simia_kls_12/pab/ipa.php'</script>";}

if ($_SESSION[status] == "2" AND $enrollkey =="simis10"){echo "<script>document.location.href='simis_kls_10/pab/ips.php'</script>";}

if ($_SESSION[status] == "2" AND $enrollkey =="simis11"){echo "<script>document.location.href='simis_kls_11/pab/ips.php'</script>";}

if ($_SESSION[status] == "2" AND $enrollkey =="simis12"){echo "<script>document.location.href='simis_kls_12/pab/ips.php'</script>";}

if ($_SESSION[bidang] == "Fisika" AND $_SESSION[status] == "3" AND $enrollkey =="fisikamia" ){echo "<script>document.location.href='grmia/fisika/ipa.php'</script>";}

if ($_SESSION[bidang] == "Pendidikan agama dan Budi pekerti" AND $_SESSION[status] == "3" AND $enrollkey =="pabmia" ){echo "<script>document.location.href='grmia/pab/ipa.php'</script>";}

if ($_SESSION[bidang] == "Pendidikan pancasila dan Kewarganegaraan" AND $_SESSION[status] == "3" AND $enrollkey =="ppkmia" ){echo "<script>document.location.href='grmia/ppk/ipa.php'</script>";}

if ($_SESSION[bidang] == "Bahasa Indonesia" AND $_SESSION[status] == "3" AND $enrollkey =="bimia"){echo "<script>document.location.href='grmia/bi/ipa.php'</script>";}

if ($_SESSION[bidang] == "Sejarah Indonesia" AND $_SESSION[status] == "3" AND $enrollkey =="simia"){echo "<script>document.location.href='grmia/si/ipa.php'</script>";}

if ($_SESSION[bidang] == "Matematika" AND $_SESSION[status] == "3" AND $enrollkey =="mtkmia"){echo "<script>document.location.href='grmia/mtk/ipa.php'</script>";}

if ($_SESSION[bidang] == "Bahasa Inggris" AND $_SESSION[status] == "3" AND $enrollkey =="bismia"){echo "<script>document.location.href='grmia/bis/ipa.php'</script>";}

if ($_SESSION[bidang] == "Seni budaya(Seni Musik)" AND $_SESSION[status] == "3" AND $enrollkey =="sbmia"){echo "<script>document.location.href='grmia/sb/ipa.php'</script>";}

if ($_SESSION[bidang] == "Pendidikan Jasmani Olahraga dan Kesehatan" AND $_SESSION[status] == "3" AND $enrollkey =="pjokmia"){echo "<script>document.location.href='grmia/pjok/ipa.php'</script>";}

if ($_SESSION[bidang] == "Prakarya Budidaya dan Kewirausahaan" AND $_SESSION[status] == "3" AND $enrollkey =="pbkmia"){echo "<script>document.location.href='grmia/pbk/ipa.php'</script>";}

if ($_SESSION[bidang] == "Biologi" AND $_SESSION[status] == "3" AND $enrollkey =="biologimia"){echo "<script>document.location.href='grmia/biologi/ipa.php'</script>";}

if ($_SESSION[bidang] == "Bahasa Asing dan sastra Inggris" AND $_SESSION[status] == "3" AND $enrollkey =="basmia"){echo "<script>document.location.href='grmia/bas/ipa.php'</script>";}

if ($_SESSION[bidang] == "Kimia" AND $_SESSION[status] == "3" AND $enrollkey =="kimiamia"){echo "<script>document.location.href='grmia/kimia/ipa.php'</script>";}

if ($_SESSION[bidang] == "Ekonomi" AND $_SESSION[status] == "3" AND $enrollkey =="ekonomimia"){echo "<script>document.location.href='grmia/ekonomi/ipa.php'</script>";}

if ($_SESSION[bidang] == "Pendidikan agama dan Budi pekerti" AND $_SESSION[status] == "4" AND $enrollkey =="pabmis"){echo "<script>document.location.href='grmis/pab/ips.php'</script>";}

if ($_SESSION[bidang] == "Pendidikan pancasila dan Kewarganegaraan" AND $_SESSION[status] == "4" AND $enrollkey =="ppkmis"){echo "<script>document.location.href='grmis/ppk/ips.php'</script>";}

if ($_SESSION[bidang] == "Bahasa Indonesia" AND $_SESSION[status] == "4" AND $enrollkey =="bimis"){echo "<script>document.location.href='grmis/bi/ips.php'</script>";}

if ($_SESSION[bidang] == "Sejarah Indonesia" AND $_SESSION[status] == "4" AND $enrollkey =="simis"){echo "<script>document.location.href='grmis/si/ips.php'</script>";}

if ($_SESSION[bidang] == "Matematika" AND $_SESSION[status] == "4" AND $enrollkey =="mtkmis"){echo "<script>document.location.href='grmis/mtk/ips.php'</script>";}

if ($_SESSION[bidang] == "Bahasa Inggris" AND $_SESSION[status] == "4" AND $enrollkey =="bismis"){echo "<script>document.location.href='grmis/bis/ips.php'</script>";}

if ($_SESSION[bidang] == "Seni budaya(Seni Musik)" AND $_SESSION[status] == "4" AND $enrollkey =="sbmis"){echo "<script>document.location.href='grmis/sb/ips.php'</script>";}

if ($_SESSION[bidang] == "Pendidikan Jasmani Olahraga dan Kesehatan" AND $_SESSION[status] == "pjokmis" AND $enrollkey =="simis12"){echo "<script>document.location.href='grmis/pjok/ips.php'</script>";}

if ($_SESSION[bidang] == "Prakarya Budidaya dan Kewirausahaan" AND $_SESSION[status] == "pbkmis" AND $enrollkey =="simis12"){echo "<script>document.location.href='grmis/pbk/ips.php'</script>";}

if ($_SESSION[bidang] == "Geografi" AND $_SESSION[status] == "4" AND $enrollkey =="geomis"){echo "<script>document.location.href='grmis/geo/ips.php'</script>";}

if ($_SESSION[bidang] == "Sejarah" AND $_SESSION[status] == "4" AND $enrollkey =="sejmis"){echo "<script>document.location.href='grmis/sej/ips.php'</script>";}

if ($_SESSION[bidang] == "Sosiologi" AND $_SESSION[status] == "4" AND $enrollkey =="siomis"){echo "<script>document.location.href='grmis/sio/ips.php'</script>";}

if ($_SESSION[bidang] == "Ekonomi" AND $_SESSION[status] == "4" AND $enrollkey =="ekonomimis"){echo "<script>document.location.href='grmis/ekonomi/ips.php'</script>";}

if ($_SESSION[bidang] == "Bahasa Asing dan sastra Inggris" AND $_SESSION[status] == "4" AND $enrollkey =="basmis"){echo "<script>document.location.href='grmis/bas/ips.php'</script>";}

if ($_SESSION[bidang] == "Bahasa Asing(Jepang)" AND $_SESSION[status] == "4" AND $enrollkey =="jpgmis"){echo "<script>document.location.href='grmis/jpg/ips.php'</script>";}

if ($_SESSION[password] != $enrollkey) { echo "<script language=javascript>
			 alert('enrollkey salah!,Silahkan masukkan enrollkey dengan benar');</script>";
		echo '<script type=text/javascript>
			<!--
			window.location = "index.php"
			//-->
			</script>';}mysqli_free_result($result);
?>
<?php } ?>