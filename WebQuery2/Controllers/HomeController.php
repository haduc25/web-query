<?php 
require_once './Models/Users.php';
require_once './Models/Posts.php';
require_once './Models/Products.php';


/**
 * 
 */
class HomeController
{
	
	public function index()
	{
		// $users = Users::getAll(); //chay ham getAll();
		//post
		$posts = Posts::getAll(); //chay ham getAll();

		//product
		$products = Products::getAll();

		require_once 'Views/index.php';
	}


}

 ?>