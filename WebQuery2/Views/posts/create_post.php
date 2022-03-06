<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../public/css/create_posts_view.css">
</head>
<body>
	<div class="container">
		<h1>Thêm bài đăng mới</h1>
		<form action="save_post" method="POST">
			<label for="">Title</label> <br>
			<input type="text" name="title"> 
			<br>

			<label for="">Description</label> 
			<br>
			<textarea rows="5" cols="60" name="description"></textarea>
			<br>

			<label for="">Author</label> <br>
			<input type="text" name="author"> <br>

			<label for="">Created by</label> <br>
			<input type="text" name="createby"> <br>

			<div class="btn-submit">
				<button class="btn">SAVE</button>
			</div>

			<div class="back-home">
				<a  href="../" class="back-to-home">Back to Home</a>
			</div>

		</form>
	</div>
</body>
</html>