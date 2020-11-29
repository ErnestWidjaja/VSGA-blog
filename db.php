<?php 
function connect(){
	$conn = mysqli_connect('localhost','root','','vsga_blog');
	return $conn;
}
?>
