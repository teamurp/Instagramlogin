<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<div class="col-6 border rounded mx-auto mt-3 row">
		<div class="col-7">
			<form method="GET" action="insert.php">

				<input type="" name="author" placeholder="Ник" class="form-control mt-5">
				<input type="" name="text" placeholder="Описание" class="form-control mt-3">
				<p class="mt-3">Загрузить картинку</p>
				<input type="file" name="img" class="form-control">
				<button class="btn btn-outline-dark my-3">Опубликовать</button>
			</form>
		</div>
		<div class="col-5">
			<img src="logo.png" class="w-100">
		</div>
	</div>
</body>
</html>