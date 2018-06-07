<!--
	Nama		: dhimas nandista
	NIM			: 24010313120015 
-->
<?php
	session_start();
	if ( !isset ($_SESSION) || $_SESSION['status'] !== '4') {
			header('Location: ../../index.php');
	exit;
	} else {
	include('../../config.php');
	$id = $_GET['id'];
	$sql = mysqli_query($koneksi ,"SELECT * FROM materi WHERE id = '$id' ");
	if(mysqli_num_rows($sql) > 0){
	$data = mysqli_fetch_array($sql);}
	$target = $data['file'];
	if(file_exists($target)){
		unlink($target); // delete now
		$query = mysqli_query($koneksi ,"DELETE FROM materi WHERE id=".$id." ");
		if ($query){
		echo "<script language=javascript>
			 alert('Data Berhasil Dihapus');</script>";
		echo '<script type=text/javascript>
			<!--
			window.location = "javascript:history.back()"
			//-->
			</script>';
	    }
		else{
			echo "<script language=javascript>
			 alert('Data gagal Dihapus');</script>";
			echo '<script type=text/javascript>
			<!--
			window.location = "javascript:history.back()"
			//-->
			</script>';
		
		}
	}
	else {
		echo "Problem deleting". $target;
	}					
?>
<html>
	<head>
		<title>Hapus Data</title>
	</head>
<html>
<?php }?>

