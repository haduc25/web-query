<?php 
require_once './Models/Users.php';

/**
 * 
 */
class HomeController
{
	
	public function index()
	{
		$users = Users::getAll(); //chay ham getAll();

		require_once 'Views/index.php';
	}


}

 ?>