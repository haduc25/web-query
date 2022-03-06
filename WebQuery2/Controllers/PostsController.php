<?php 

/**
 * 
 */
class PostsController
{
	public function create_post()
	{
		require_once "Views/posts/create_post.php";
	}	

	public function savePost()
	{
		$_title = $_POST['title'];
		$_desc = $_POST['description'];
		$_author = $_POST['author'];
		$_createby = $_POST['createby'];


		$posts = new Posts();
		$posts->title = $_title; 
		$posts->description = $_desc;
		$posts->author = $_author;
		$posts->createby = $_createby;


		$posts->insert();
		header("Location: ../index.php");
	}

	public function delPost()
	{
		require_once "Views/posts/del_post.php";
	}

	public function deletePost()
	{
		if (isset($_GET['id']) && !empty($_GET['id'])) 
		{
			$posts = new Posts();
			//echo $_GET['id'];
			// var_dump($_GET['id']); exit();

			$posts->delete($_GET['id']);
			header("Location: ../index.php");
		}

		
	}


}

 ?>