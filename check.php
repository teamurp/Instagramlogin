<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'instagram');
	$query = mysqli_query($con, "SELECT * FROM users WHERE password='{$_GET["password"]}' and email='{$_GET["email"]}'");
	$stroka = $query->fetch_assoc();
	if($query->num_rows==0) header("Location: auto.php?error=Нет такого пользователя!");
	else{
	//	echo "<h1>Привет, ".$stroka["name"]."<h1>";
		header("Location: posts.php?name={$stroka["name"]}&nick={$stroka["username"]}");
	}
 ?>