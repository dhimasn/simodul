<!DOCTYPE>
<?php
session_start();
session_destroy();
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
	display: flex;
	align-items: center;
	}
	</style>
<body>
<div class="container">	
		<div class="vertical-center">
			<div class="panel panel-default center-block">
					<div class="panel-heading">
				  		<h3 class="panel-title text-center">LOGIN SI MODUL 90</h3>
			  		</div>
							<div class="panel-body">
								<form class="form" role="form" name='login' action='proses.php' method='post'>
								<div class="form-group form-group-sm">
									<div class="input group">
										<select name="status" id="status" class="form-control input-sm"  placeholder="Pilih User" required autofocus>
										 	<option autofocus value>PILIH USER</option>
										 	<option  value="5">Admin</option>
										 	<option  value="4">Guru Mis</option>
										 	<option  value="3">Guru Mia</option>
										 	<option  value="2">Siswa Mis</option>
										 	<option  value="1">Siswa Mia</option>
									 </select>
									</div>
								</div>
								<div class="form-group form-group-sm">
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
										<input type="email" class="form-control input-sm" name="email" 
										placeholder="EMAIL" maxsize="20" size="20" id="email" required autofocus/>
									</div>
								</div>
								<div class="form-group form-group-sm">
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
										<input type="password" class="form-control input-sm" name="password"
										placeholder="PASSWORD" maxsize="20" size="20" id="password"required />
									</div>
								</div>
								<input type="submit" class="btn btn-default btn-block" value="LOG IN" name="submit" id="loginBtn">
							</form>
							</div><!-- /panel body -->
			</div> <!-- /panel -->
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
