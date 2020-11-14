<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'instagram');
	$img = $_GET['img'];
	$text = $_GET['text'];
	$id = $_GET['id'];
	mysqli_query($con, "UPDATE posts SET img='{$img}', text='{$text}' WHERE id={$id}");
	header("Location: posts.php");
 ?>