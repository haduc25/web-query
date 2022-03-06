<?php 
	$url = isset($_GET['url']) == true ? $_GET['url']:"/"; 
	require_once './Controllers/HomeController.php';
	require_once './Controllers/UserController.php';
	require_once './Controllers/PostsController.php';

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

		case 'posts/create_post':
			$ctl = new PostsController();
			$ctl->create_post();
			break;

		case 'posts/save_post':
			$ctl = new PostsController();
			$ctl->savePost();
			break;


		default:
			require_once 'Views/not_found.php';
			break;
	}

 ?>