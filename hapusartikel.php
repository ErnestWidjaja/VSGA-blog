<?php 
require_once "db.php";
$conn = connect();
$id = $_GET['id'];
$artikel = mysqli_query($conn, "DELETE FROM artikel WHERE artikelid = $id");
$komentar = mysqli_query($conn, "DELETE FROM komentar WHERE artikelid = $id");
header('Location:articles.php');
 ?>