<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Views</title>
	<!-- <link rel="stylesheet" href="./public/css/style.css"> -->
	<link rel="stylesheet" href="./public/css/viewindex.css">
</head>
<body>
	<div class="container">
		<h1>Danh sách post (post)</h1>

	</div>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Description</th>
				<th>Author</th>
				<th>Create by</th>
				<td>
					<a class="nut" style="padding: 5px 43px;" href="./posts/create_post">Insert</a>
				</td>
			</tr>
		</thead>

		
		<tbody>
		<?php	foreach ($posts as $post) { 
			// var_dump($users); exit();
			?>
				<tr>
					<td><?=$post->id ?></td>
					<td><?=$post->title ?></td>
					<td><?=$post->description ?></td>
					<td><?=$post->author ?></td>
					<td><?=$post->createby ?></td>
					<td>
						<a class="nut" href="#">Sửa</a> |
						<a class="nut" href="#">Xóa</a>
					</td>
				</tr>
		<?php  } ?>
			</tbody>
	</table>



</body>
</html>