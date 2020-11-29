<?php 
require_once('db.php');
include 'header.php';
$conn = connect();
$artikel = mysqli_query($conn, "SELECT * FROM artikel WHERE artikelid = $_GET[id]");
$komentar = mysqli_query($conn, "SELECT * FROM komentar WHERE artikelid = $_GET[id]");
$data = mysqli_fetch_array($artikel)
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Article</title>
</head>
<body>
	<div class="container mt-5 mb-5">
		<h1>Artikel</h1>
		<a href="articles.php" class="btn btn-outline-dark">Kembali</a>
		<div class="row">
			<div class="col-lg-8 col-md-12 ">
				<div class="card mt-4">
					<div class="card-body">
						<h3 class="card-title"><?php echo $data['judul_artikel']; ?></h3>
						<p class="card-text mt-4"><?php echo $data['isi_artikel']; ?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-12 mt-4">
				<div class="card">
					<div class="card-body">
						<div class="col-md-12">
							<h3 class="mb-4">Komentar</h3>
							<form action="kirimkomentar.php?id=<?php echo $_GET['id'] ?>" method="post">
								<div class="form-group">
									<input type="text" class="form-control" name="judul" placeholder="Judul">
								</div>
								<div class="form-group">
									<textarea class="form-control" name="isi" placeholder="Komentar"></textarea>
								</div>
								<input type="submit" class="btn btn-dark" name="submit" value="Simpan">
							</form>
						</div>
						<div class="col-md-12"><hr>
							<?php while ($data = mysqli_fetch_array($komentar)) {	?>
								<div class="card mt-4">
									<div class="card-body">
										<h3 class="card-title"><?php echo $data['judul_komentar']; ?>
										<?php if(isset($_SESSION['login'])){ ?>
											<div class="btn-group float-right">
												<a href="editkomentar.php?id=<?php echo $data['komentarid']; ?>" class="btn btn-light">Edit</a>
												<a href="hapuskomentar.php?id=<?php echo $data['komentarid']; ?>" onclick="return confirm('Apakah Anda Yakin?!');" class="btn btn-secondary">Hapus</a>
											</div>
										<?php } ?>
										</h3>
										<p class="card-text mt-4"><?php echo $data['isi_komentar']; ?></p>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>