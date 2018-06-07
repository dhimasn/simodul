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
			</div><!-- /column 1 --> 
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<div class="panel panel-default">
								<div class="panel-heading">
									<span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;TAMBAH DATA SISWA</div>
										<div class="panel-body">
											<div class="table-responsive">		
			  <?php
			if(isset($_POST['add'])){
				$nis		= aman($_POST['nis']);
				$pass1		= aman($_POST['pass1']);
				$pass2		= aman($_POST['pass2']);
				$nama		= aman($_POST['nama']);
				$email		= aman($_POST['email']);
				$Perminatan	= aman($_POST['Perminatan']);
				$Tahun  	= aman($_POST['Tahun']);
				$status		= aman($_POST['status']);
				
				$cek = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$nis'");
				if(mysqli_num_rows($cek) == 0){
					if($pass1 == $pass2){
						$pass = md5($pass1);
						$insert = mysqli_query($koneksi, "INSERT INTO siswa (nis, password, nama, email, Perminatan,Tahun,status)
															VALUES('$nis', '$pass', '$nama', '$email', '$Perminatan','$Tahun','$status')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success">Pendaftaran berhasil dilakukan.</div>';
						}else{
							echo '<div class="alert alert-danger">Pendaftaran gagal dilakukan, silahkan coba lagi.</div>';
						}
					}else{
						echo '<div class="alert alert-danger">Konfirmasi Password tidak sesuai.</div>';
					}
				}else{
					echo '<div class="alert alert-danger">NIS sudah terdaftar.</div>';
				}
			}
			?>
				<table class="table table-danger">
				<form class="form-horizontal"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<tr>
					 <td>NIS</td>
					 <td>:</td>
					 <td><input type="text" name="nis" class="form-control" placeholder="NIS" required></td>
					</tr>
					<tr>
					 <td>PASSWORD</td>
					 <td>:</td>
					 <td><input type="password" name="pass1" class="form-control" placeholder="PASSWORD" required></td>
					</tr>
					<tr>
					<td>KONFIRMASI PASSWORD</td>
					 <td>:</td>
					 <td><input type="password" name="pass2" class="form-control" placeholder="KONFIRMASI PASSWORD" required></td>
					</tr>
					<tr>
					<td>NAMA LENGKAP</td>
					 <td>:</td>
					 <td><input type="text" name="nama" class="form-control" placeholder="NAMA LENGKAP" required></td>
					</tr>
					<tr>
					<td>EMAIL</td>
					 <td>:</td>
					 <td><input type="email" name="email" class="form-control" placeholder="EMAIL" required></td>
					</tr>
					<tr>
					<td>TAHUN MASUK</td>
					<td>:</td>
					<td><input type="number" name="Tahun" class="form-control" placeholder="TAHUN MASUK"></td>
					</tr>
					<tr>
					<td>PERMINATAN</td>
					 <td>:</td>
					 <td> <select class="form-control input-sm" name="Perminatan" required>
						    <option value=" ">PERMINATAN</option>
						    <option value="MIS">MIS</option>	
					      </select></td>
					</tr>
					<tr>
					<td>STATUS</td>
					<td>:</td>
					<td><select class="form-control input-sm" name="status" required>
						    <option value="">STATUS</option>
						    <option value="2">SISWA AKTIF</option>
						    <option value="0">SISWA TIDAK AKTIF</option>
					      </select>
						  </td>
					</tr>
					<tr colspan="3">
					 <td>
					 <input type="submit" name="add" class="btn btn-warning btn-sm"  value="TAMBAH">
					 <a href="admin2.php" class="btn btn-danger btn-sm" id="batal">BATAL</a>	
					 </td>
					 <td></td>
					 <td></td>
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
			</section>
  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script-->
	<script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>	
</body>
<footer class="footer">
      <div class="container">
        <p class="text-muted">
		<b>Copyirght © 2014-2016 nandista studio </b>All rights reserved</p>
      </div>
</footer>
</html>
<?php }?>