<?php 
	$url = isset($_GET['url']) == true ? $_GET['url']:"/"; 
	require_once './Controllers/HomeController.php';
	require_once './Controllers/UserController.php';
	require_once './Controllers/PostsController.php';
	require_once './Controllers/ProductsController.php';

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

		// posts
		
		case 'posts/create_post':
			$ctl = new PostsController();
			$ctl->create_post();
			break;
		
		//insert
		case 'posts/save_post':
			$ctl = new PostsController();
			$ctl->savePost();
			break;

		
		//del
		case 'posts/del_post':
			$ctl = new PostsController();
			$ctl->delPost();
			break;

		//delete_post
		case 'posts/delete_post':
			$ctl = new PostsController();
			$ctl->deletePost();
			break;
		
		//home edit post
		case 'posts/editing_post': 
			$ctl = new PostsController();
			$ctl->editingPost();
			$ctl->findPost();
			break;

		case 'posts/submit_edit_post': 
			$ctl = new PostsController();
			$ctl->editedPost();
			break;





		// products
		case 'products/create_product':
			$ctl = new ProductsController();
			$ctl->create_product();
			break;

		case 'products/save_product':
			$ctl = new ProductsController();
			$ctl->saveProduct();
			break;

		//del product
		case 'products/del_product':
			$ctl = new ProductsController();
			$ctl->delProduct();
			break;	

		//delete
		case 'products/delete_product':
			$ctl = new ProductsController();
			$ctl->deleleProduct();
			break;
		default:
			require_once 'Views/not_found.php';
			break;
	}

 ?>