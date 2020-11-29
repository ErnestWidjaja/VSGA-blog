<?php 
include 'header.php';
if (!isset($_SESSION['login'])) {
	header('location:index.php');
}
function getInput(){
	require_once('db.php');
	$conn = connect();
	$query = mysqli_query($conn, "INSERT INTO artikel VALUES('','$_POST[judul]','$_POST[isi]')");
	header('location:articles.php');
}
if (isset($_POST['submit'])) {
	getInput();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Input Artikel</title>
</head>
<body>
	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-lg-8 col-md-12 ">
				<form action="inputartikel.php" method="post">
					<h1 class="mb-4">Input Artikel</h1>
					<div class="form-group">
						<label>Judul Artikel</label>
						<input type="text" class="form-control" name="judul" placeholder="Judul Artikel">
					</div>
					<div class="form-group">
						<label>Isi Artikel</label>
						<textarea class="form-control" name="isi" placeholder="Isi Artikel"></textarea>
					</div>
					<a href="articles.php" class="btn btn-light">Kembali</a>
					<input type="submit" class="btn btn-dark" name="submit" value="Simpan">
				</form>
			</div>
		</div>
	</div>
</body>
</html>