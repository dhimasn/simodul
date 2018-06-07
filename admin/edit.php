<!--
	Nama		: dhimas nandista
	NIM			: 24010313120015 
-->
<?php
	session_start();
	if ( !isset($_SESSION) || $_SESSION['status'] !== '5') {
		header('Location: ../index.php');
	exit;
	} else {
		include("../config.php");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SI Modul 90</title>
	<!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style media="all">
		.list-group{min-width:260px;}
	</style>
  </head>
  	<body>
  		<header>
<nav class="navbar navbar-default">
			<div class="container-fluid">
				 <!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" 	aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						<a class="navbar-brand" href="#">SI MODUL 90</a>
					</div><!-- komponen navbar lainnya (link, tombol, teks, dsb -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="admin1.php"><span class="glyphicon glyphicon-home"></span>  Beranda</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span>  Keluar</a></li>
							</ul>
						</div>
			</div><!-- /column 1 -->
		</nav>
	</header>
<section> 
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;EDIT USER</div>
								<div class="panel-body">
									<div class="table-responsive">
			
			<?php
			$nis = $_GET['nis'];
			$sql = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$nis'");
			$row = mysqli_fetch_assoc($sql);
			
			if(isset($_POST['save'])){
				$nama		= aman($_POST['nama']);
				$email		= aman($_POST['email']);
				$perminatan	= aman($_POST['perminatan']);
				$thn_masuk	= aman($_POST['tahun_masuk']);
				$status		= aman($_POST['status']);
				
				$update = mysqli_query($koneksi, "UPDATE siswa SET nama='$nama',email='$email',Perminatan='$perminatan', Tahun='$thn_masuk',status='$status' WHERE nis='$nis'") or die(mysqli_error());
				if($update){
					header("Location: edit.php?nis=".$nis."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger">Data gagal disimpan, silahkan coba lagi.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success">Data berhasil disimpan.</div>';
			}
			?>
				<table class="table table-danger">
				<form class="form-horizontal" method="post">
					<tr>
					<td>NAMA LENGKAP</td>
					 <td>:</td>
					 <td><input type="text" name="nama" class="form-control" placeholder="NAMA LENGKAP" value="<?php echo $row['nama']; ?>" required></td>
					</tr>
					<tr>
					<td>EMAIL</td>
					 <td>:</td>
					 <td><input type="email" name="email" class="form-control" placeholder="EMAIL" value="<?php echo $row['email']; ?>"required></td>
					</tr>
					<tr>
					<td>PERMINATAN</td>
					 <td>:</td>
					 <td> <select name="perminatan">
							<option value="">PERMINATAN</option>
							<option value="MIA"  <?php if($row['Perminatan'] == 'MIA'){ echo 'selected'; } ?>>MIA</option>
							<option value="MIS" <?php if($row['Perminatan'] == 'MIS'){ echo 'selected'; } ?>>MIS</option>
						</select></td>
					</tr>
					<tr>
					<td>TAHUN MASUK</td>
					 <td>:</td>
					 <td> <input type="text" name="tahun_masuk" value="<?php echo $row['Tahun']; ?>" placeholder="TAHUN MASUK"></td>
					</tr>
					<tr>
					<td>STATUS</td>
					<td>:</td>
					<td><select name="status" class="form-control" value="<?php echo $row['status']; ?>" required>
							<option value="">STATUS</option>
							<option value="1" <?php if($row['status'] == '1'){ echo 'selected'; } ?>>SISWA MIA AKTIF</option>
							<option value="2" <?php if($row['status'] == '2'){ echo 'selected'; } ?>>SISWA MIS AKTIF</option>
							<option value="0" <?php if($row['status'] == '0'){ echo 'selected'; } ?>>SISWA TIDAK AKTIF</option>
						</select>
					</td>
					</tr>
					<tr colspan="2">
					 <td><input type="submit" name="save" value="SIMPAN" class="btn btn-warning btn-sm" >
					 <a href="admin2.php" class="btn btn-danger btn-sm" >BATAL</a></td>
					</tr>
			 </form>
	 		</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script-->
	<script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>		
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
</body>
<footer class="footer">
      <div class="container">
        <p class="text-muted">
		<b>Copyirght © sistem informasi sma 90 jakarta </b>All rights reserved</p>
      </div>
</footer></html>
<?php }?>