<script>
	 function sleep(time){
      return new Promise((resolve)=>setTimeout(resolve,time)
    )
}
 </script>
<?php 

/**
 * 
 */
class ProductsController
{
	public function create_product()
	{
		require_once "Views/products/create_product.php";
	}	

	public function saveProduct()
	{

		$_name = $_POST['name'];
		$_price = $_POST['price'];
		$_supplier = $_POST['supplier'];
		$_stock = $_POST['stock'];

		$products = new Products();
		$products->name = $_name; 
		$products->price = $_price;
		$products->supplier = $_supplier;
		$products->stock = $_stock;


		$products->insert();
		header("Location: ../index.php");
	}

	//del
	public function delProduct()
	{
		require_once "Views/products/del_product.php";
	}

	//delete 
	public function deleleProduct()
	{
		if (isset($_GET['id']) && !empty($_GET['id'])) 
		{
			$products = new Products();
			//echo $_GET['id'];
			// var_dump($_GET['id']); exit();
			
			$products->delete($_GET['id']);

			echo "<script type='text/javascript'> 
			sleep(500).then(()=>{
				console.log('you can see me after 2000 milliseconds');
				alert('Đã xóa thành công! !');
				location.href = '../index.php';
			 }) </script>";

			//  header('Location: ../index.php');
		}

		
	}
}

 ?>

