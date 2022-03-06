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
}

 ?>