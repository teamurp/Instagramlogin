<?php 
	$con = mysqli_connect('127.0.0.1','root','','instagram');
	mysqli_query($con, "INSERT INTO posts (author, text, img) VALUES ('".$_GET["author"]."','".$_GET["text"]."','".$_GET["img"]."')");
	header("Location: index.php");
 ?>