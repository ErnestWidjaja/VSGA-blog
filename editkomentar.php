<?php 
require_once('db.php');
include 'header.php';
if (!isset($_SESSION['login'])) {
	header('location:index.php');
}
$conn = connect();
function getInput($conn,$id,$data){
	$query = mysqli_query($conn, "UPDATE komentar SET judul_komentar = '$_POST[judul]', isi_komentar = '$_POST[isi]' WHERE komentarid = $id");
	header('location:detailarticle.php?id='.$data['artikelid']);
}
$id = $_GET['id'];
$select = mysqli_query($conn, "SELECT * FROM komentar WHERE komentarid = $id");
$data = mysqli_fetch_array($select);
if (isset($_POST['submit'])) {
	getInput($conn,$id,$data);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Artikel</title>
</head>
<body>
	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-lg-8 col-md-12 ">
				<form action="" method="post">
					<h1 class="mb-4">Edit Komentar</h1>
					<div class="form-group">
						<input type="text" class="form-control" name="judul" placeholder="Judul" value="<?php echo $data['judul_komentar'] ?>">
					</div>
					<div class="form-group">
						<textarea class="form-control" name="isi" placeholder="Komentar"><?php echo $data['isi_komentar'] ?></textarea>
					</div>
					<a href="detailarticle.php?id=<?php echo $data['artikelid'] ?>" class="btn btn-light">Kembali</a>
					<input type="submit" class="btn btn-dark" name="submit" value="Update">
				</form>
			</div>
		</div>
	</div>
</body>
</html>