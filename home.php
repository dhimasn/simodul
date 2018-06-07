<?php
session_start();
include "config.php";
error_reporting(0);
if (empty($_SESSION['nama']) AND empty ($_SESSION['password'])){include "index.php";}
else{
?>
<?php

if ($_SESSION[status]  == "1"){echo "<script>document.location.href='logkelasipa.php'</script>";}

if ($_SESSION[status]  == "2"){echo "<script>document.location.href='logkelasips.php'</script>";}

if ($_SESSION[status] == "3"){echo "<script>document.location.href='logpelajaranipa.php'</script>";}

if  ($_SESSION[status] == "4"){echo "<script>document.location.href='logpelajaranips.php'</script>";}

if ($_SESSION[status] == "") {echo "<p>Kamu tidak memiliki akses kesini!</p>";}

?>
<?php } ?>