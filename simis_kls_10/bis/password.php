<!--
	Nama		: dhimas nandista
	NIM			: 24010313120015 
-->
<?php
	session_start();
	if ( !isset ($_SESSION) || $_SESSION['status'] !== '2') {
			header('Location: ../../index.php');
	exit;
	} else {
			include('../../config.php');
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SI Modul 90</title>
	<!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
								<li><a href="ips.php"><span class="glyphicon glyphicon-home"></span>  Beranda</a></li>
								<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profil</a></li>
								<li><a href="ips.php" ><span class="glyphicon glyphicon-file"></span>  Materi</a></li>
								<li><a href="tugas.php"><span class="glyphicon glyphicon-pencil"></span> Tugas</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="../../logout.php"><span class="glyphicon glyphicon-log-out"></span>  Keluar</a></li>
							</ul>
						</div>
			</div><!-- /column 1 -->
		</nav>
</header>
<section> 
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;GANTI PASSWORD</div>
								<div class="panel-body">
									<div class="table-responsive">
			
			<?php
			if(isset($_POST['ganti'])){
				$nis		= $_SESSION'nis'];
				$password 	= md5($_POST['password']);
				$password1 	= aman($_POST['password1']);
				$password2 	= aman($_POST['password2']);
				
				$cek = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$nis' AND password='$password'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-danger">Password sekarang tidak tepat.</div>';
				}else{
					if($password1 == $password2){
						if(strlen($password1) >= 5){
							$pass = md5($password1);
							$update = mysqli_query($koneksi, "UPDATE siswa SET password='$pass' WHERE nis='$nis'");
							if($update){
								echo '<div class="alert alert-success">Password berhasil dirubah.</div>';
							}else{
								echo '<div class="alert alert-danger">Password gagal dirubah.</div>';
							}
						}else{
							echo '<div class="alert alert-danger">Panjang karakter Password minimal 5 karakter.</div>';
						}
					}else{
						echo '<div class="alert alert-danger">Konfirmasi Password tidak tepat.</div>';
					}
				}
			}
			?>
				<table class="table table-danger">
				<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<tr>
					 <td>PASSWORD SEKARANG</td>
					 <td>:</td>
					 <td><input type="password" name="password" class="form-control" placeholder="PASSWORD SEKARANG" required></td>
					</tr>
					<tr>
					 <td>PASSWORD BARU</td>
					 <td>:</td>
					 <td><input type="password" name="password1" class="form-control" placeholder="PASSWORD BARU" required></td>
					</tr>
					<tr>
					<td>KONFIRMASI PASSWORD BARU</td>
					 <td>:</td>
					 <td><input type="password" name="password2" class="form-control" placeholder="KONFIRMASI PASSWORD BARU" required>
					 </td>
					 </tr>
					 <tr colspan="2">
					 <td><input type="submit" name="ganti" value="GANTI" class="btn btn-danger btn-sm">
					 <a href="profile.php" class="btn btn-warning btn-sm">BATAL</a></td>
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
	<script src="../../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>	
</body>
<footer class="footer">
      <div class="container">
        <p class="text-muted">
		<b>Copyirght © sistem informasi sma 90 jakarta </b>All rights reserved</p>
      </div>
</footer>	
</html>
<?php }?>