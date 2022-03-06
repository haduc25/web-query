<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="public/css/viewcreate.css">
</head>
<body>
	<div class="container">
		<h1>Thêm mới người dùng</h1>
		<form action="save-user" method="POST" enctype="multipart/form-data">
			<label for="">Username</label> <br>
			<input type="text" name="user"> <br>

			<label for="">Password</label> <br>
			<input type="password" name="pass"> <br>

			<label for="">Email</label> <br>
			<input type="text" name="email"> <br>

			<label for="">Avatar</label> <br>
			<input type="file" name="avt"> <br>

			<div class="nutnhan">
				<button class="btn">SAVE</button>
			</div>
		</form>
	</div>
</body>
</html>