<?php 
require_once('db.php');
include 'header.php';
$conn = connect();
$query = mysqli_query($conn, "SELECT * FROM artikel ORDER BY artikelid DESC");
$cek = mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
</head>
<body>
	<div class="container mt-5 mb-5">
		<h1>Artikel</h1>
		<?php 
			if (isset($_SESSION['login'])) {
				echo '<a href="inputartikel.php" class="btn btn-outline-dark mt-2 mb-3">Tambah</a>';
			}
		 ?>
		<div class="row">
			<?php 
			if ($cek <= 0) {
				echo '<div class="card-body"><h4>Tidak ada artikel...</h4></div>';
			}
			?>
			<div class="col-lg-8 col-md-12">
				<?php while ($data = mysqli_fetch_array($query)) { ?>
					<div class="card mt-4">
						<div class="card-body">
							<h3 class="card-title"><?php echo $data['judul_artikel']; ?>
								<?php if (isset($_SESSION['login'])) { ?>
								 <div class="btn-group float-right">
									<a href="editartikel.php?id=<?php echo $data['artikelid']; ?>" class="btn btn-light">Edit</a>
									<a href="hapusartikel.php?id=<?php echo $data['artikelid']; ?>" onclick="return confirm('Apakah Anda Yakin?!');" class="btn btn-secondary">Hapus</a>
								</div>
								<?php } ?>
							</h3>
							<p class="card-text"><?php echo $data['isi_artikel'] ?></p>
							<a href="detailarticle.php?id=<?php echo $data['artikelid']; ?>" class="card-link" style="font-size: small;">See More...</a>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>