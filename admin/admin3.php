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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SI Modul 90</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../data_tables/css/dataTables.bootstrap.css">
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
		<div class="container-fluid">	
		<section>
 <div class="col-sm-3">
				 	<div class="panel panel-default" >
				 		<div class="panel-heading">
										<span class="glyphicon glyphicon-th"></span> DAFTAR USER
										</div>
								<div class="list-group">
									<a href="admin1.php" class="list-group-item ">
										<span class="glyphicon glyphicon-user"></span> Data Guru MIA
									</a>
									<a href="admin3.php" class="list-group-item active">
										<span class="glyphicon glyphicon-user"></span> Data Guru MIS
									</a>
									<a href="admin.php" class="list-group-item">
										<span class="glyphicon glyphicon-user"></span> Data Siswa MIA
									</a>
									<a href="admin2.php" class="list-group-item ">
										<span class="glyphicon glyphicon-user"></span> Data Siswa MIS
									</a>									
								</div>
							</div>
				</div><!-- /column 1 -->
				<div class="col-sm-9">
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp; DATA GURU MIS</div>
							<div class="panel-body">
							<p>
							<a href="add3.php" button class="btn btn-info btn-sm" id="btnTambahtugas">TAMBAH DATA GURU MIS</a></p>	
							<div class="box-body table-responsive">
        					<table id="example1" class="table table-bordered table-striped">
			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$nip = $_GET['nip'];
				$cek = mysqli_query($koneksi, "SELECT * FROM guru WHERE nip='$nip'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($koneksi, "DELETE FROM guru WHERE nip='$nip'");
					if($delete){
						echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-info">Data gagal dihapus.</div>';
					}
				}
			}
			?>
					<thead>
                      <tr>
                        <th>NO.</th>
                        <th>nip</th>
                        <th>NAMA LENGKAP</th>
                        <th>BIDANG</th>
                        <th>STATUS</th>
                        <th>SETTING</th>
                      </tr>
                    </thead>
                      <?php
				$sql = mysqli_query($koneksi, "SELECT * FROM guru WHERE Perminatan ='MIS'ORDER BY nip ASC");
				if(mysqli_num_rows($sql) > 0){
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['nip'].'</td>
							<td>'.$row['nama'].'</td>
							<td>'.$row['bidang'].'</td>
						<td>';
							if($row['status'] == 1){
								echo '<span class="label label-success">Siswa mia Aktif</span>';
							}else if($row['status'] == 2){
								echo '<span class="label label-success">Siswa mis Aktif</span>';
							}else if($row['status'] == 3){
								echo '<span class="label label-success">Guru mia Aktif</span>';
							}else if($row['status'] == 4){
								echo '<span class="label label-success">Guru mis Aktif</span>';
							}else{
								echo '<span class="label label-danger">tidak Aktif</span>';
							}
						echo '
							</td>
							<td>
								<a href="profile3.php?nip='.$row['nip'].'"><button type="button" class="btn btn-primary" aria-label="user"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></button>
								</a>
								<a href="edit3.php?nip='.$row['nip'].'"><button type="button" class="btn btn-success" aria-label="edit"><span class="glyphicon glyphicon-list" aria-hidden="ture"></span></button>
								</a>
								<a href="password1.php?nip='.$row['nip'].'"><button type="button" class="btn btn-warning" aria-label="password"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></button>
								</a>
								<a href="admin3.php?aksi=delete&nip='.$row['nip'].'"onclick="return confirm(\'Yakin?\')"><button type="button" class="btn btn-danger" aria-label="delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a>
							</td>
						</tr>
						';
						$no++;
					}
				}
				?>
               </table>
										</div>
									</div>
								</div>
							</div>
						</div>	

		</section>
		</div>	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script-->
	<script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
	<script src="../data_tables/js/jquery-1.11.1.min.js"></script>
    <script src="../data_tables/js/bootstrap.min.js"></script>
    <script src="../data_tables/js/jquery.dataTables.min.js"></script>
    <script src="../data_tables/js/dataTables.bootstrap.js"></script>	
    <script type="text/javascript">
            $(function() {
                $('#example1').dataTable();
            });
    </script>
  </body>
  			<footer class="footer">
      <div class="container">
        <p class="text-muted">
		<b>Copyirght © 2014-2016 nandista studio </b>All rights reserved</p>
      </div>
</footer>
</html>
<?php }?>
