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
		<link href="../../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">		
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
		</header>
		<br>
		<section>        
	 	<div class="container-fluid">	
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="panel panel-default">
				  	<div class="panel-body">
		<h1 align="center">KIRIM INFO TUGAS</h1>
		<p align="center">Anda dapat memberikan Tugas kepada siswa dengan melengkapi form di bawah ini.</p>
			<br>
			<?php
			$valid_matapel = $info = $matapel = $pass = $deadline = $kelas = $minat =" ";
			if(isset($_POST["submit"])){
				$matapel			= aman ($_POST['matapel']);
				$deadline		= aman ($_POST['deadline']); 
				$kelas					= aman ($_POST['kelas']);
				$info						= aman ($_POST['info']);
				$pass 					= aman ($_POST['pass']);
				$tgl							= gmdate("y-m-d h:m:s", time()+60*60*7);
				$minat					= 'MIS';
				
				if (empty($matapel) || empty ($deadline)|| empty($kelas) || empty($info))
				{
							echo '<div class="alert alert-warning">ERROR: Data Harus di isi !</div>';
				}else{	
				if($matapel == ''){
							$error_matapel = "matapel is required";
				}
				else if (!preg_match("/^[a-zA-Z ]*$/",$matapel)) {
							$error_matapel = "Only letters and white space allowed";
				}				
				else{
							$valid_matapel = TRUE;
				}
				if($valid_matapel){				
				$insert = mysqli_query($koneksi,"INSERT INTO tugas (matapel,info,deadline,kelas,tgl,pass,minat)
						   VALUES ('$matapel','$info','$deadline','$kelas','$tgl','$pass','$minat')") or die(mysqli_error());
				if($insert){
							echo '<div class="alert alert-success">input tugas berhasil dilakukan.</div>';
						}else{
							echo '<div class="alert alert-danger">input tugas dilakukan, silahkan coba lagi.</div>';
						}
					}
				}
			}
			?>
        
         <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

			<div class="form-group form-group-sm">
			<label class="col-sm-4 control-label pad-right-zero">Matapel :</label>
			<div class="col-sm-5">
				<select class="form-control input-sm"  name="matapel">
			 				<option autofocus value="<?php echo $matapel;?>">MATA PELAJARAN</option>
			 				<option value="Bahasa Asing dan sastra Inggris">Bahasa Asing dan sastra Inggris</option>
		    	</select>
				</div>
			</div>

			<div class="form-group form-group-sm">
			<label class="col-sm-4 control-label pad-right-zero">Kelas :</label>
			<div class="col-sm-5">
				<select class="form-control input-sm"  name="kelas">
			 				<option autofocus value="<?php echo $kelas;?>">KELAS</option>
			 				<option ="10 MIS">10 MIS</option>
			 				<option ="11 MIS">11 MIS</option>
			 				<option ="12 MIS">12 MIS</option>
		    	</select>
				</div>
			</div>

			<div class="form-group form-group-sm">
			<label class="col-sm-4 control-label pad-right-zero">Info tugas :</label>
			<div class="col-sm-5">
				<textarea rows="3" cols="50" name="info" class="form-control input-sm" placeholder="INFO TUGAS"></textarea>
				</div>
			</div>
			<div class="form-group form-group-sm">
			<label class="col-sm-4 control-label pad-right-zero">Batas Pengumpulan:</label>
			<div class="col-sm-5">
				<fieldset>
					<div class="input-group date form_date col-sm-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="form_date" data-link-format="yyyy-mm-dd">
					<input class="form-control" size="10" type="text" name="deadline">
	     			<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div>
					<input type="hidden" id="form_date" value=""/>
			    	</div>
			    </fieldset>
			<br>
			<br>
			<br>
			<div class="col-sm-8 col-sm-offset-3" > 
			<button type="reset" name="reset" value="Reset" class="btn btn-danger btn-sm">RESET</button>  
			<button type="submit" name="submit" class="btn btn-warning btn-sm" value="Submit">KIRIM</button> 		</div>
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
		<b>Copyirght © sistem informasi sma 90 jakarta </b>All rights reserved</p>
      </div>
</footer>
	<script type="text/javascript" src="../../jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript" src="../../js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
	<script type="text/javascript">
	$('.form_date').datetimepicker({
			language:  'id',
	        weekStart: 1,
	        todayBtn:  1,
	  autoclose: 1,
	  todayHighlight: 1,
	  startView: 2,
	  minView: 2,
	  forceParse: 0
	    });
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script-->
	<script src="../../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>	
</html>
<?php }?>
