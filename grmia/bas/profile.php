<!--
	Nama		: dhimas nandista
	NIM			: 24010313120015 
-->
<?php
	session_start();
	if ( !isset ($_SESSION) || $_SESSION['status'] !== '3') {
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
</head>
  	<body >
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
								<li><a href="ipa.php"><span class="glyphicon glyphicon-home"></span>  Beranda</a></li>
								<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profil</a></li>
								<li><a href="ipa.php" ><span class="glyphicon glyphicon-file"></span>  Materi</a></li>
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
				<div class="col-sm-5 col-sm-offset-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;PROFILE USER</div>
								<div class="panel-body">
									<div class="table-responsive">
			<?php
			$nip = $_SESSION['nip'];
			$sql = mysqli_query($koneksi, "SELECT * FROM guru WHERE nip='$nip'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: ipa.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			?>
			<table class="table table-danger">
				<tr>
					<th><div align="left">NIP</div></th>
					<td><?php echo $row['nip']; ?></td>
				</tr>
				<tr>
					<th><div align="left">NAMA LENGKAP</div></th>
					<td><?php echo $row['nama']; ?></td>
				</tr>
				<tr>
					<th><div align="left">EMAIL</div></th>
					<td><?php echo $row['email']; ?></td>
				</tr>
				<tr>
					<th><div align="left">BIDANG</div></th>
					<td><?php echo $row['bidang']; ?></td>
				</tr>
				<tr>
					<th><div align="left">STATUS</div></th>
					<td><?php if($row['status'] == 1){ echo 'SISWA AKTIF'; }else if($row['status'] == 2){ echo 'SISWA AKTIF'; }
					else if($row['status'] == 3){ echo 'GURU AKTIF'; } else if($row['status'] == 4){ echo 'GURU TIDAK AKTIF'; }
					else { echo 'ADMIN'; }?></td>
				</tr>
			</table>
			<a href="password.php?nis=<?php echo $row['nis']; ?>" class="btn btn-success btn-sm" >RUBAH PASSWORD</a>
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
</body>
<footer class="footer">
      <div class="container">
        <p class="text-muted">
		<b>Copyirght © sistem informasi sma 90 jakarta</b>All rights reserved</p>
      </div>
</footer>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script-->
	<script src="../../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>	
</html>
<?php }?>