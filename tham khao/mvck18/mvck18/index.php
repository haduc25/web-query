<?php 
	$url = isset($_GET['url'])==true? $_GET['url']:"/";
	require_once 'controllers/HomeController.php';
	require_once 'controllers/UserController.php';
	switch ($url) {
		case '/':
			$ctl = new HomeController();
			$ctl->index();
			break;
		case 'create':
			$ctl = new UserController();
			$ctl->create();
			break;
		case 'save-user':
			$ctl = new UserController();
			$ctl->save();
			break;
		default:
			include_once 'view/not_found.php';
			break;
	}


 ?>