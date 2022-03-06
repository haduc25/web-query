<?php 
	$url = isset($_GET['url']) == true ? $_GET['url']:"/"; 
	require_once './Controllers/HomeController.php';
	require_once './Controllers/UserController.php';

	switch ($url) 
	{
		case '/':
			$ctl = new HomeController();
			$ctl->index();
			break;
		
		case 'users/create':
			$ctl = new UserController();
			$ctl->create();
			break;

		case 'users/save_user':
			$ctl = new UserController();
			$ctl->saveUser();
			break;

		default:
			require_once 'Views/not_found.php';
			break;
	}

 ?>