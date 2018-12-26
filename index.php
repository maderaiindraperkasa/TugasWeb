<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
 <title>Roti Rasa</title>    
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>
	<?php include 'config/connect.php'; ?>
	<style type="text/css">
	.kotak{	
		margin-top: 150px;
	}

	.kotak .input-group{
		margin-bottom: 20px;
	}
	body{
		background:url('./images/tampilanlogin1.png');
		font-family:Georgia, 'Times New Roman', Times, serif;
		color:white;
	}
	</style>

  
</head>
<body>
<div class="container">
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>  Login Gagal !! Username dan Password Salah !!</div>";
			}
		}
		?>
		<div class="panel panel-default">
			<form action="login_aksi.php" method="POST">
				<div class="col-md-4 col-md-offset-4 kotak">
					<center><h3>Silahkan Login</h3></center>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control" placeholder="Username" name="username">
					</div>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>

					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<select name="level_user" class="form-control">
							<option value="1">Admin</option>
							<option value="3">Konsumen</option>
						</select>
					</div>

					<div class="input-group">			
						<input type="submit" class="btn btn-primary" value="Login">
						<a href = "register.php" class="btn btn-danger"> Register </a>
					</div>

				</div>
			</form>
		</div>
	</div>
</body>
</html>
