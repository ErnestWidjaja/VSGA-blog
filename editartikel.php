<?php 
require_once('db.php');
include 'header.php';
if (!isset($_SESSION['login'])) {
	header('location:index.php');
}
$conn = connect();
function getInput($conn,$id){
	$query = mysqli_query($conn, "UPDATE artikel SET judul_artikel = '$_POST[judul]', isi_artikel = '$_POST[isi]' WHERE artikelid = $id");
	header('location:articles.php');
}
$id = $_GET['id'];
$select = mysqli_query($conn, "SELECT * FROM artikel WHERE artikelid = $id");
$data = mysqli_fetch_array($select);
if (isset($_POST['submit'])) {
	getInput($conn,$id);
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
					<h1 class="mb-4">Edit Artikel</h1>
					<div class="form-group">
						<label>Judul Artikel</label>
						<input type="text" class="form-control" name="judul" placeholder="Judul Artikel" value="<?php echo $data['judul_artikel']; ?>">
					</div>
					<div class="form-group">
						<label>Isi Artikel</label>
						<textarea class="form-control" name="isi" placeholder="Isi Artikel"><?php echo $data['isi_artikel']; ?></textarea>
					</div>
					<a href="detailarticle.php?id=<?php echo $data['artikelid'] ?>" class="btn btn-light">Kembali</a>
					<input type="submit" class="btn btn-dark" name="submit" value="Update">
				</form>
			</div>
		</div>
	</div>
</body>
</html>