<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xóa sản phẩm</title>
	<link rel="stylesheet" href="../public/css/create_posts_view.css">
</head>
<body>
    <?php 
       if (isset($_GET['id']) && !empty($_GET['id'])) 
       { ?>
           <div class="container">
           <h1>Xóa Product?</h1>
		    <form action="delete_product?id=<?=$_GET['id']?>" method="POST">

                <label for="">Tiếp tục xóa với id [<?= $_GET['id'] ?>] </label><br>
                <div class="btn-submit">
                    <button class="btn">Xóa</button>
                </div>

                <div class="back-home">
                    <a  href="../" class="back-to-home">Back to Home</a>
                </div>

		</form>
    
    
    <?php }?>

	</div>
</body>
</html>