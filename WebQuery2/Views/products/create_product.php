<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thêm sản phẩm</title>
	<link rel="stylesheet" href="../public/css/create_posts_view.css">
</head>
<body>
	<div class="container">
		<h1>Thêm sản phẩm</h1>
		<form action="save_product" method="POST">
			<label for="">Name</label> <br>
			<input type="text" name="name"> 

			<label for="">Price</label> 
			<input type="text" name="price"> <br>

			<label for="">Supplier</label> <br>
			<input type="text" name="supplier"> <br>

			<label for="">Stock</label> <br>
			<input type="text" name="stock"> <br>

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