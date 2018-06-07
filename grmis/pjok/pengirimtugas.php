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
    <link href="../../css/bootstrap.min.css" rel="stylesheet">	
    <link rel="stylesheet" href="../../data_tables/css/dataTables.bootstrap.css">
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
		<br>
			<section> 
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default">
				  		<div class="panel-body">
								<h2 class="text-center">Data Pengirim Tugas</h2>
								<div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Mata Pelajaran</th>
										<th>kelas</th>
										<th>nama</th>
										<th>subject</th>
										<th>tipe file</th>
										<th>ukuran file</th>
										<th>Tanggal Unggah</th>
										<th>Aksi</th>
									</tr>
        </thead>
										<?php
										$sql = mysqli_query($koneksi ,"SELECT * FROM tugasupload WHERE matapel='Pendidikan Jasmani Olahraga dan Kesehatan' && minat='MIS'");
										if(mysqli_num_rows($sql) > 0){
										$no = 1;
										while($data = mysqli_fetch_array($sql)){
								
										echo '<tr bgcolor="#fff">
												<td align="center">'.$no.'</td>
												<td align="center">'.$data['matapel'].'</td>
												<td align="center">'.$data['kelas'].'</td>
												<td><a href="'.$data['file'].'">'.$data['nama'].'</a></td>
												<td align="center">'.$data['subject'].'</td>
												<td align="center">'.$data['tipe_file'].'</td>
												<td align="center">'.formatBytes($data['ukuran_file']).'</td>
												<td align="center">'.$data['tgl'].'</td>
												<td align="center">
												<a href="hapustugas.php?id='.$data['id'].'"  title="Hapus Data" onclick="return confirm(\'Yakin?\')"><button class="btn btn-danger btn-sm">Delete</button></a>
												<a href="'.$data['file'].'" class="btn btn-success btn-sm" role="button">Download</a></td>
												
												
											</tr>';
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
			</div>			
		</section>
</body>
<footer class="footer">
      <div class="container">
        <p class="text-muted">
		<b>Copyirght © sistem informasi sma 90 jakarta </b>All rights reserved</p>
      </div>
</footer>
        <script src="../../data_tables/js/jquery-1.11.1.min.js"></script>
        <script src="../../data_tables/js/bootstrap.min.js"></script>
        <script src="../../data_tables/js/jquery.dataTables.min.js"></script>
        <script src="../../data_tables/js/dataTables.bootstrap.js"></script>	
        <script type="text/javascript">
            $(function() {
                $('#example1').dataTable();
            });
        </script>
</html>
<?php }?>