<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'instagram');
	mysqli_query($con, "DELETE FROM posts WHERE id='".$_GET['id']."'");
	header("Location: posts.php");
 ?>