<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tạo mới danh sách người dùng</title>
	<link rel="stylesheet" href="../public/css/create.css">
</head>
<body>
		<h2>Tạo mới danh sách người dùng</h2>

		<form action="save_user" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="user">Username: </label> <br>
				<input type="text" id="user" name="username" class="form-control" placeholder="Enter Username" required>
			</div>			

			<div class="form-group">
				<label for="email">E-mail: </label>
				<br>
				<input type="text" id="email" name="email" class="form-control" placeholder="Enter E-mail" required>
			</div>			

			<div class="form-group">
				<label for="pwd">Password: </label>
				<br>
				<input type="password" id="pwd" name="password" class="form-control" placeholder="Enter Password" required="email">
			</div>			
			<br>
			<div class="form-group">
				<label for="">Avatar: </label>
				<br>
				<input type="file" name="avatar" class="form-control">
			</div>

			<br>
			<div class="form-group">
				<button class="btn-success btn" type="submit">
					<span class="btn-save">Save</span>
				</button>
			</div>

			<br>
			<br>
			<a  href="../" class="back-to-home">Back to Home</a>


		</form>
</body>
</html>