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
				unset($_SESSION['idtugas']);
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
    <script src="../../js/jquery.min.js"></script>
				<script src="../../data_tables/js/jquery-1.11.1.min.js"></script>
    <script src="../../data_tables/js/bootstrap.min.js"></script>
    <script src="../../data_tables/js/jquery.dataTables.min.js"></script>
    <script src="../../data_tables/js/dataTables.bootstrap.js"></script>
				<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
			<div class="row">
				<div class="col-sm-12">
						<!-- carousel -->
						<div id="mySlide1" class="carousel slide" data-ride="carousel">
							<!-- Carousel items -->
							<div class="carousel-inner" role="listbox">
								<div  class="item active">
									<img src="../../images/slide1.png" alt="image1" width="100%">
								</div>
							</div>
						</div><!-- /carousel -->  
				</div>
			</div>
		</header>
		<br>
			<section> 
				<div class="container-fluid">
					<div class="row">		
						<div class="col-sm-4">
								<div class="panel panel-default">
				  <div class="panel-body">
				  <div class="panel panel-default" >
						<div class="panel-heading">
						<span class="glyphicon glyphicon-th"></span> DAFTAR MATA PELAJARAN SOSIAL
						</div>
								<div class="list-group">
									<a  href="../pab/ips.php" class="list-group-item ">
										<span class="glyphicon glyphicon-file"></span> Pendidikan Agama dan Budi pekerti
									</a>
									<a  href="../ppk/ips.php" class="list-group-item">
										<span class="glyphicon glyphicon-file"></span> Pendidikan Pancasila dan Kewarganegaraan
									</a>
									<a href="../bi/ips.php" class="list-group-item">
										<span class="glyphicon glyphicon-file"></span> Bahasa indonesia
									</a>
									<a href="../si/ips.php" class="list-group-item ">
										<span class="glyphicon glyphicon-file"></span> Sejarah Indonesia
									</a>
									<a href="../bis/ips.php" class="list-group-item">
										<span class="glyphicon glyphicon-file"></span> Bahasa Inggris
									</a>
									<a href="../mtk/ips.php" class="list-group-item">
										<span class="glyphicon glyphicon-file"></span> Matematika
									</a>
									<a href="../sb/ips.php" class="list-group-item">
										<span class="glyphicon glyphicon-file"></span> Seni budaya (seni musik)
									</a>
									<a href="../pjok/ips.php" class="list-group-item">
										<span class="glyphicon glyphicon-file"></span> Pendidikan jasmani olahraga dan kesehatan
									</a>
									<a href="../pbk/ips.php" class="list-group-item active">
										<span class="glyphicon glyphicon-file"></span> Prakarya Budi dan Kewirausahaan										
									</a>
									<a href="../geo/ips.php" class="list-group-item">
										<span class="glyphicon glyphicon-file"></span> Geografi
									</a>
									<a href="../sej/ips.php" class="list-group-item ">
										<span class="glyphicon glyphicon-file"></span> Sejarah
									</a>
									<a href="../sio/ips.php" class="list-group-item">
										<span class="glyphicon glyphicon-file"></span> Sosiologi
									</a>
									<a href="../ekonomi/ips.php" class="list-group-item">
										<span class="glyphicon glyphicon-file"></span> Ekonomi
									</a>
									<a href="../bas/ips.php" class="list-group-item ">
										<span class="glyphicon glyphicon-file"></span> Bahasa Asing dan Sastra Inggris
									</a>
									<a href="../jpg/ips.php" class="list-group-item">
										<span class="glyphicon glyphicon-file"></span> Bahasa Asing (Jepang)
									</a>
									</div>
									</div>
								</div>
							</div>
						</div><!-- /column 1 -->
								<div class="col-sm-8">
								<div class="panel panel-default">
								<div class="panel-heading"><span class="glyphicon glyphicon-book"></span>
											&nbsp;&nbsp;INFO TUGAS</div>
								<div class="panel-body">
								<div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
                								<th>No</th>
                    							<th>Mata pelajaran</th>
                    							<th>Batas Unggah</th>
                    							<th>Kelas</th>
                    							<th>Info tugas</th>
                    							<th>Aksi</th>
                							</tr>
                						</thead>
          								<?php
										$sql = mysqli_query($koneksi ,"SELECT * FROM tugas WHERE kelas='11 MIS'");
										if(mysqli_num_rows($sql) > 0){
										$no = 1;
										while($data = mysqli_fetch_assoc($sql)){
										echo '<tr bgcolor="#fff">
												<td align="center">'.$no.'</td>
												<td align="center">'.$data['matapel'].'</td>
												<td align="center">'.$data['deadline'].'</td>
												<td align="center">'.$data['kelas'].'</td>
												<td align="center"> '.substr ($data['info'], 0, 30).'
												<a href=detailtugas.php?id='.$data['id'].'><span class="label label-primary">selengkapnya</span></a></td>
												<td align="center">
													<a href=uploadtugas.php?id='.$data['id'].'><button class="btn btn-danger btn-xs">unggah tugas</button></a>
												</td>
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
</section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script-->
<!-- Include all compiled plugins (below), or include individual files as needed -->	
</body>
<footer class="footer">
      <div class="container">
        <p class="text-muted">
		<b>Copyirght © sistem informasi sma 90 jakarta </b>All rights reserved</p>
      </div>
</footer>	
</html>
	  <script type="text/javascript">
            $(function() {
                $('#example1').dataTable();
            });
    </script>
<?php }?>