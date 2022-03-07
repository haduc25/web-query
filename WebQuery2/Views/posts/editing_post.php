<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit</title>
	<link rel="stylesheet" href="../public/css/create_posts_view.css">
</head>
<body>
	<?php
		if (!empty($_GET['id'])) 
		{
			// var_dump($temp[0]);
			// echo "$posts->title";
			// require_once ''
			// $result = mysqli_query($conn, "SELECT * FROM `posts` WHERE `id` = " . $_GET['id']);
			// $products = $result->fetch_assoc();
		}

	?>

	<div class="container">
		<h1>Editing</h1>
		<form action="submit_edit_post" method="POST">
			<label for="">ID</label>
			
			<input type="text" value="<?=$_GET['id']?>" name="id"> 
			<label for="">Title</label> <br>
			<input type="text" name="title" value="<?= $temp->title ?>"> 
			<br>

			<label for="">Description</label> 
			<br>
			<textarea rows="5" cols="60" name="description"><?= $temp->description ?></textarea>
			<br>

			<label for="">Author</label> <br>
			<input type="text" name="author" value="<?= $temp->author ?>"> <br>

			<label for="">Created by</label> <br>
			<input type="text" name="createby" value="<?= $temp->createby ?>"> <br>

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