<?php 
function getInput(){
	require_once('db.php');
	$conn = connect();
	$id = $_GET['id'];
	$query = mysqli_query($conn, "INSERT INTO komentar VALUES('','$id','$_POST[judul]','$_POST[isi]')");
	header('location:detailarticle.php?id='.$id);
}
if (isset($_POST['submit'])) {
	getInput();
}
?>