<?php 
require_once "db.php";
$conn = connect();
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM komentar WHERE komentarid = $id");
header('Location: ' . $_SERVER['HTTP_REFERER']);
 ?>