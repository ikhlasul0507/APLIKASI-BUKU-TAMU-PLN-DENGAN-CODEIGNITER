<?php 
// if(isset($_POST['login']))
// 	{
// 		if($_POST['email']=='pln@gmail.com' and $_POST['password']=='12345')
// 		{
// 			echo "<meta http-equiv='refresh' content='0;url=./?'>";
// 			echo "<script>alert(Login Berhasil !!');</script>";
// 			header("Location: beranda.php");
// 		}
// 		else
// 			echo "<meta http-equiv='refresh' content='0;url=./?'>";
// 			echo "<script>alert(Login Gagal !!');</script>";
// 	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="..\img\logo_PLN.png">
        <title>PLN Jakabaring </title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Silahkan Login</div>
				<div class="panel-body">
					<form role="form" action="proses\proses_login.php" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email_user" type="email" autofocus="" required autocomplete="off">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password_user" type="password" value="" required autocomplete="off">
							</div>
							<div class="form-group">
								<label>
									Belum daftar, silahkan Klik <a href="daftar.php">DAFTAR</a>
								</label>
							</div>
							<button  class="btn btn-primary" type="submit" name="login">Login</button>					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
