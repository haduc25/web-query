<?php 
require_once './Models/Users.php';
require_once './Models/Posts.php';


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

		require_once 'Views/index.php';
	}


}

 ?>