<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Views</title>
	<link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
	<div class="container">
		<h1>Danh sách người dùng (users)</h1>

	</div>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Avatar</th>
				<th>Username</th>
				<th>Password</th>
				<th>E-mail</th>
				<td>
					<a href="./users/create">Insert</a>
				</td>
			</tr>
		</thead>

		
		<tbody>
		<?php	foreach ($users as $user) { 
			// var_dump($users); exit();
			?>
				<tr>
					<td><?=$user->id ?></td>
					<td><img  src="<?=$user->avatar ?>" width='80' alt="<?=$user->avatar ?>"></td>
					<td><?=$user->username ?></td>
					<td><?=$user->password ?></td>
					<td><?=$user->email ?></td>
					<td>
						<a href="#">Sửa</a> |
						<a href="#">Xóa</a>
					</td>
				</tr>
		<?php  } ?>
			</tbody>
	</table>

	<br>
	<a href="">Đổi mật khẩu</a>

	<!-- 
		--doi mk
		if(pwd-input === md5($pwdsql))
			//update new pwd
	
	 -->



</body>
</html>