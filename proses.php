<?php
session_start();
include "config.php";
$status = ($_POST['status']);
$email  = ($_POST['email']);
$password = (md5($_POST['password']));
	
	if($status == "3" || $status == "4"){
		$login = "SELECT * FROM guru WHERE email='$email' AND password='$password' AND status='$status'";
		$result =mysqli_query($koneksi,$login);
		if ($result) {
		$r = mysqli_fetch_array ($result);
			if ($r > 0)
			{
				session_start();
				$_SESSION[nip]          = $r[nip];
				$_SESSION[nama]     	= $r[nama];
				$_SESSION[password]     = $r[password];
				$_SESSION[status]    	= $r[status];
				$_SESSION[bidang]		= $r[bidang];
			 	$_SESSION[timeout] 		= time();
				header('location:home.php');
			}
			else
			{ 	echo "<script language=javascript>
						 alert('Login gagal!,Silahkan masukkan kategori user, username dan password dengan benar');</script>";
				echo '<script type=text/javascript>
					<!--
					window.location = "index.php"
					//-->
					</script>';
			}
		}mysqli_free_result($result);
	}

	if($status == "1" || $status == "2"){
		$login = "SELECT * FROM siswa WHERE email='$email' AND password='$password' AND status='$status'";
		$result =mysqli_query($koneksi,$login);
		if ($result) {
		$r = mysqli_fetch_array ($result);
		if ($r > 0)
			{
				session_start();
				$_SESSION[nis]          = $r[nis];
				$_SESSION[nama]     	= $r[nama];
				$_SESSION[password]     = $r[password];
				$_SESSION[status]    	= $r[status];
			 	$_SESSION[timeout] 		= time();
				header('location:home.php');
			}
		else{ echo "<script language=javascript>
					 alert('Login gagal!,Silahkan masukkan kategori user, username dan password dengan benar');</script>";
				echo '<script type=text/javascript>
					<!--
					window.location = "index.php"
					//-->
					</script>';
			}
		}mysqli_free_result($result);
	}
	
	if ($status == "5" AND $email =="andi@com" AND $password == "25f9e794323b453885f5181f1b624d0b")
			{echo "<script>document.location.href='admin/admin1.php'</script>";
			 $_SESSION['status']='5';
			}
			else{ echo "<script language=javascript>
					 alert('Login gagal!,Silahkan masukkan kategori user, username dan password dengan benar');</script>";
				echo '<script type=text/javascript>
					<!--
					window.location = "index.php"
					//-->
					</script>';
			}
?>


