<?php 
require_once('db.php');
include 'header.php';
unset($_SESSION['pesan']);
$conn = connect();
if (isset($_SESSION['login'])) {
	header('location:index.php');
}
if (isset($_POST['submit'])) {
	$query = mysqli_query($conn,"SELECT * FROM user WHERE username = '$_POST[username]' AND password = md5('$_POST[password]')");
	$cek = mysqli_num_rows($query);
	if ($cek > 0) {
		$data = mysqli_fetch_array($query);
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['login'] = TRUE;
		header('location:index.php');
	}elseif($cek <= 0){
		// header('location:login.php');
		$_SESSION['pesan'] = "Username dan Password Salah!";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card border-0 rounded shadow-lg mt-5">
					<div class="card-body">
						<form class="p-4" action="" method="post">
							<div class="text-center mb-4">
								<h1>Login!</h1>
							</div>
							
							<?php 
								if (isset($_SESSION['pesan'])) {
									echo '<div class="alert alert-danger">'.$_SESSION['pesan'].'</div>';
								}
							 ?>
							<div class="form-group">
								<!-- <label>Username</label> -->
								<input type="text" name="username" class="form-control" placeholder="Username">
							</div>
							<div class="form-group">
								<!-- <label>Password</label> -->
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
							<input type="submit" name="submit" class="btn btn-primary" value="Login">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>