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
		<br>
		<section> 
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<div class="panel panel-default">
				  				<div class="panel-body">
								<h1 align="center">UNGGAH MATERI</h1>
        <p>Upload file Anda dengan melengkapi form di bawah ini. File yang bisa di Upload hanya file dengan ekstensi <b>.doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf, .rar, .zip , .png , .jpg</b></p>
        	<?php
			//connect database
			//require_once('../config.php');			
			//set variabel
			$matapel = $nama_file = $tahun = $kelas = $tipe = $minat =" ";
			if (isset($_POST["submit"])){
				$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip','png','jpg');
				$value 			  = explode('.', $_FILES['file']['name']);
				$ext 			    = strtolower(array_pop($value));
				$file_name		= array_shift($value);
				$file_size		= $_FILES['file']['size'];
				$file_tmp	 	= $_FILES['file']['tmp_name'];
				$nama_file		= aman($_POST['nama_file']);
				$tgl			     = gmdate("y-m-d h:m:s", time()+60*60*7);
				$tahun 	   	= aman($_POST['tahun']);
				$matapel    = aman($_POST['matapel']);
				$tipe		    	= aman($_POST['tipe']);
				$kelas			   = aman($_POST['kelas']);
				$minat ="MIA";

					if (empty($nama_file) || empty ($tahun)|| empty($matapel) || empty($tipe) || empty($kelas))
								{
								echo '<div class="alert alert-warning">ERROR: Data Harus di isi !</div>';
								}else{
								if(in_array($ext, $allowed_ext) === true){
										
										if($file_size < 1024 * (1024 * 1024)){
										
											$lokasi = '../../file_materi/sb/'.$nama_file.' '.$tipe.' '.$minat.'.'.$ext;
										
												if (file_exists($lokasi)) {
													echo '<div class="alert alert-warning">ERROR: Data sudah ada !</div>';
													} 
													else if (!file_exists($lokasi)) {
													move_uploaded_file($file_tmp, $lokasi);
										
										$sql= "INSERT INTO materi (matapel,kelas,Tahun,tanggal_upload,nama_file,tipe,ukuran_file,file,minat)
											VALUES('$matapel', '$kelas','$tahun','$tgl','$nama_file','$tipe','$file_size', '$lokasi','$minat')";
											$in = mysqli_query($koneksi , $sql)or die ("gagal query".mysqli_error());
										
						if($in){
						echo '<div class="alert alert-success">SUCCES: berhasil upload file!</div>';	
						}
						else{
						
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
		}		
?>
        
            <form class="form-horizontal"  method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >

			<div class="form-group form-group-sm">
			<label class="col-sm-4 control-label pad-right-zero">Pilih File :</label>
			<div class="col-sm-5">
				<input type="file" name="file"  required  />
			</div>
			</div>
			<div class="form-group form-group-sm">
			<label class="col-sm-4 control-label pad-right-zero">Nama File :</label>
			<div class="col-sm-5">
				<input class="form-control input-sm" type="text" name="nama_file" size="40" maxlength="40" autofocus value="<?php echo $nama_file;?>" required />
				</div>
			</div>
			<div class="form-group form-group-sm">
			<label class="col-sm-4 control-label pad-right-zero">Tahun :</label>
			<div class="col-sm-5">
				<select class="form-control input-sm"  name="tahun" required>
				                <option autofocus value="<?php echo $tahun;?>">TAHUN</option>
				                <?php
				                $thn_skr = date('Y');
				                for ($x = $thn_skr; $x >= 2010; $x--) {
				                ?>
				                    <option value="<?php echo $x ?>"><?php echo $x ?></option>
				                <?php
				                }
				                ?>
				</select>
				</div>
			</div>
			<div class="form-group form-group-sm">
			<label class="col-sm-4 control-label pad-right-zero">Mata Pelajaran :</label>
			<div class="col-sm-5">
				<select class="form-control input-sm"  name="matapel" required>
			 				<option autofocus value="<?php echo $matapel;?>">MATA PELAJARAN</option>
			 				<option value="Seni budaya(Seni Musik)">Seni budaya(Seni Musik)</option>
		    	</select>
				</div>
			</div>
			<div class="form-group form-group-sm">
			<label class="col-sm-4 control-label pad-right-zero">Tipe Modul :</label>
			<div class="col-sm-5">
				<select class="form-control input-sm"  name="tipe" required>
			 				<option autofocus value="<?php echo $tipe;?>">TIPE MODUL</option>
			 				<option value="UAS">UAS</option>
			 				<option value="UTS">UTS</option>
			 				<option value="SBMPTN">SBMPTN</option>
			 				<option value="UN">UN</option>
			 				<option value="OSN">OSN</option>
			 				<option value="MODUL PELAJARAN">MODUL PELAJARAN</option> 

		    	</select>
				</div>
			</div>
			<div class="form-group form-group-sm">
			<label class="col-sm-4 control-label pad-right-zero">Kelas :</label>
			<div class="col-sm-5">
				<select class="form-control input-sm"  name="kelas" required>
			 				<option autofocus value="<?php echo $kelas;?>">KELAS</option>
			 				<option ="10 MIA">10 MIA</option>
			 				<option ="11 MIA">11 MIA</option>
			 				<option ="12 MIA">12 MIA</option>
		    	</select>
				</div>
			</div>

			<div class="form-group form-group-sm">
			<div class="col-sm-8 col-sm-offset-3" > 
			<button type="reset" name="reset" value="Reset" class="btn btn-danger btn-sm">RESET</button>  
			<button type="submit" name="submit" class="btn btn-warning btn-sm" value="Submit">KIRIM</button> 
			</div>
			</div>
		</form>
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