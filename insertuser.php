<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'instagram');
	$query= mysqli_query($con, "SELECT * FROM users");
	if($_POST["email"]==null||$_POST["name"]==null||$_POST["username"]==null||$_POST["password"]==null) header("Location: index.php?error=Заполните все поля!");
	else {mysqli_query($con, "INSERT INTO users (email, name, username, password) VALUES ('{$_POST["email"]}', '{$_POST["name"]}', '{$_POST["username"]}', '{$_POST["password"]}')");
	header("Location: posts.php?nick={$_POST["name"]}&name={$_POST["username"]}");}
	for ($i=0; $i < mysqli_num_rows($query); $i++) { 
		# code...
		$string = $query->fetch_assoc();
		if($_POST["email"]==$string["email"]) header("Location: index.php?error=Такой пользователь уже существует!");
	}
	
 ?>