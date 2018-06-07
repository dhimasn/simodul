<!--
	Nama		: dhimas nandista
	NIM			: 24010313120015 
-->
<?php
	session_start();
if ( !isset ($_SESSION) || $_SESSION['status'] !== '1') {
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
		<br>
		<section> 
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<div class="panel panel-default">
								<div class="panel-body">
								<h1 align="center">UNGGAH TUGAS</h1>
		<p>Unggah tugas Anda dengan melengkapi form di bawah ini. File yang bisa di Upload hanya file dengan ekstensi <b>.doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf, .rar, .zip , .png , .jpg</b>.</p>
	  <?php
	  $nis  					= $_SESSION['nis'];
					$sql2    		= mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$nis'");
						$row     		= mysqli_fetch_array($sql2);	

					$a 								= $_GET['id'];
					$sql1      = mysqli_query($koneksi, "SELECT * FROM tugas WHERE id='$a'");
						$data      = mysqli_fetch_assoc($sql1);

			if(isset($_POST['upload'])){
				$allowed_ext= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip','png','jpg');
				$value 					= explode('.', $_FILES['file']['name']);
				$ext 							= strtolower(array_pop($value));
				$file_name		= array_shift($value);
				$file_size		= $_FILES['file']['size'];
				$file_tmp			= $_FILES['file']['tmp_name'];	
				$tgl								= gmdate("y-m-d h:m:s", time()+60*60*7);
				$subject  		= aman($_POST['subject']);
				$id 								= aman($data['id']);
				$matapel				= aman($_POST['matapel']);
				$kelas						= aman($_POST['kelas']);
				$nama     		= aman($_POST['nama']);
				$minat						= 'MIA';
				
							
				if(in_array($ext, $allowed_ext) === true){
					if($file_size < 1024 * (1024 * 1024)){
							$lokasi = '../../file_tugas/biologi/'.$subject.'_'.$nama.'_'.$nis.'.'.$ext;
							if (file_exists($lokasi)) {
								echo '<div class="alert alert-warning">ERROR: Data sudah ada silahkan memasukan data dengan subject yang berbeda!</div>';
							} else if (!file_exists($lokasi)) {
							move_uploaded_file($file_tmp, $lokasi);
							$sql = "INSERT INTO tugasupload (idtugas,matapel,kelas,nama,subject,tipe_file,ukuran_file,file,tgl,minat)
							 VALUES('$id','$matapel','$kelas','$nama','$subject','$ext', '$file_size','$lokasi','$tgl','$minat')" ;
							$in = mysqli_query($koneksi, $sql)or die ("gagal query".mysqli_error());
							if($in){
									echo '<div class="alert alert-success">SUCCESS: Berhasil upload file!</div>';
							}else{
								echo '<div class="alert alert-danger">ERROR: Gagal upload file!</div>';
							}
						}else{
							echo '<div class="alert alert-danger">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
						}
					}else{
						echo '<div class="alert alert-danger">ERROR: Ekstensi file tidak di izinkan!</div>';
					}
				}
			}
							?>
			<p>
			 <form class="form-horizontal"  method="post" enctype="multipart/form-data">
											  <div class="form-group form-group-sm">
													<label class="col-sm-4 control-label pad-right-zero">Pilih File :</label>
													<div class="col-sm-5">
													<input type="file" name="file"  required/>
													</div>
													</div>
			 <div class="form-group form-group-sm">
													<label class="col-sm-4 control-label pad-right-zero">Subject :</label>
													<div class="col-sm-5">
												<input class="form-control input-sm" type="text" name="subject" size="40" maxlength="40" required />
												 </div>
											  </div>
											  <div class="form-group form-group-sm">
													<label class="col-sm-4 control-label pad-right-zero">Nama :</label>
													<div class="col-sm-5">
												<input class="form-control input-sm" type="text" name="nama" size="40" maxlength="40" required value="<?php echo $row['nama']?>" />
												</div>
											 </div>
											 <div class="form-group form-group-sm">
													<label class="col-sm-4 control-label pad-right-zero">Mata Pelajaran :</label>
													<div class="col-sm-5">
												<input class="form-control input-sm" type="text" name="matapel" size="40" maxlength="40" required value="<?php echo $data['matapel']?>" />
												</div>
											 </div>
											 <div class="form-group form-group-sm">
													<label class="col-sm-4 control-label pad-right-zero">Kelas :</label>
													<div class="col-sm-5">
												<input class="form-control input-sm" type="text" name="kelas" size="40" maxlength="40" required value="<?php echo $data['kelas']?>" />
												</div>
											 </div>
											<div class="form-group form-group-sm">
													<div class="col-sm-5 col-sm-offset-3">
											<input type="reset" name="reset" class="btn btn-danger btn-sm" value="ULANG" >  
											<input type="submit" name="upload" class="btn btn-warning btn-sm" value="UNGGAH"/>
												</div>
											</div>
										</form>
			</p>
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
</html>
<?php }?>