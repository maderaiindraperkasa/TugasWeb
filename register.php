<?php 
$conn = mysqli_connect("sql209.epizy.com","epiz_23139895","zD3bh6KNO","epiz_23139895_rotirasa") or die("connection failed !");
$notif = "";
if(isset($_POST['nama'])){
	if(isset($_POST['username'])){
		if(isset($_POST['password'])){	
			if(isset($_POST['password2'])){
				if($_POST['password2']== $_POST['password2']){
					if(isset($_POST['nomor'])){
						$nama 		= $_POST['namapengguna'];
						$username 	= $_POST['username'];
						$password 	= $_POST['password'];
						$nomor 		= $_POST['nomor'];
						$leveluser 	= $_POST['level_user'];
						mysqli_query($conn, "INSERT INTO user (username,password,level_user,Nama_Pengguna,Phone_Number)
						VALUE('$username','$password','$leveluser','$nama','$nomor')");
						header('location:./index.php');
						die();
						$notif = "berhasil";
					}else $notif = 'Nomor harus diinputkan';
				}else $notif = 'Password tidak sama'; 
			}else $notif = 'Password harus ada';
		}else $notif = 'Password harus ada';
	}else $notif = 'username harus ada';
}
?>
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
	<div class="panel panel-default">
			<form action="register.php" method="post">
				<div class="col-md-4 col-md-offset-4 kotak">
					<?php echo $notif?>
					<center><h3>Halaman Register Roti Rasa</h3></center>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control" placeholder="Nama Pengguna" name="nama" required>
					</div>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control" placeholder="Username" name="username" required>
					</div>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="password" class="form-control" placeholder="Password" name="password" required>
					</div>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="password" class="form-control" placeholder="Confirm Password" name="password2" required>
					</div>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="text" class="form-control" placeholder="Phone Number" name="nomor" required>
					</div>

					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<select name="level_user" class="form-control" required>
							<option value="3">Konsumen</option>
						</select>
					</div>

					<div class="input-group">			
						<input type="submit" class="btn btn-danger" value="Register">
					</div>
				</div>
			</form>
		</div>
	</div>
	</body>
	</html>