<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="public/css/viewindex.css">
</head>
<body>
	<div class="container">
		<h1>Danh sách người dùng</h1>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Avatar</th>
					<th>Username</th>
					<th>Password</th>
					<th>Email</th>
					<th>
						<a class="nut" href="./create">Thêm</a>
					</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $user): ?>
				<tr>
						<td><?= $user->id ?></td>
						<td><img width="120" src="<?= $user->avatar ?>" alt=""></td>
						<td><?= $user->username ?></td>
						<td><?= $user->password ?></td>
						<td><?= $user->email ?></td>
						<td>
							<a class="nut" href="">Edit</a>
							<a class="nut" href="">Delete</a>
						</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>
</html>