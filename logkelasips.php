<!DOCTYPE>
<?php
session_start();
?>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login SI Modul 90</title>
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
	<style>
	.vertical-center{
	min-height: 70%;  /* Fallback for browsers do NOT support vh unit */
	min-height: 70vh; /* These two lines are counted as one :-)       */
	margin-top: 30px;
	display: flex;
	align-items: center;
	}
	</style>
<body>
<div class="container">	
		<div class="vertical-center">
			<div class="col-sm-3 col-sm-offset-4">
				<div class="panel panel-default" align="center">
				 <div class="panel-body">
				  <div class="panel panel-default" >
						<div class="panel-heading">
						<span class="glyphicon glyphicon-th"></span> PILIH KELAS
						</div>
						<div class="list-group">
									<a data-toggle="modal" href="#myModal" class="list-group-item">
										<span class="glyphicon glyphicon-file"></span> KELAS 10 MIS
									</a>
									<a data-toggle="modal" href="#myModal" class="list-group-item">
										<span class="glyphicon glyphicon-file"></span> KELAS 11 MIS
									</a>
									<a data-toggle="modal" href="#myModal" class="list-group-item">
										<span class="glyphicon glyphicon-file"></span> KELAS 12 MIS
									</a>
									</div>
								</div>
							</div>
							<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
											<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Masukkan ENROLL KEY</h4>
											</div>
											<form class="form" role="form" name='login' action='enrollkey.php' method='post'>
											<div class="modal-body">
											<div class="form-group form-group-sm">
											<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
											<input type="password" class="form-control input-sm" name="enrollkey"
														placeholder="enrollkey" maxsize="20" size="20" id="password" required />
												</div>
											</div> 
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<input type="submit" class="btn btn-primary" value="LOG IN" name="submit" id="loginBtn">
											</div>
											</form>
											</div>
									</div>
								</div>
							</div>
						</div><!-- /column 1 -->
</div>
</div><!-- /container -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script-->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
<footer class="footer">
      <div class="container">
        <p class="text-muted">
		<b>Copyirght © sistem informasi sma 90 jakarta </b>All rights reserved</p>
      </div>
</footer>
</html>
