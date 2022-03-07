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

	//del
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

	//editing home
	public function editingPost()
	{
		// require_once "Views/posts/editing_post.php";
	}

	//edited Post
	public function editedPost()
	{
		$_id = $_POST['id'];
		$_title = $_POST['title'];
		$_desc = $_POST['description'];
		$_author = $_POST['author'];
		$_createby = $_POST['createby'];

		var_dump($_title, $_desc, $_author, $_createby);

		$posts = new Posts();
		$posts->id = $_id; 
		$posts->title = $_title; 
		$posts->description = $_desc;
		$posts->author = $_author;
		$posts->createby = $_createby;


		$posts->update();
		header("Location: ../index.php");
	}


	
	//find
	public function findPost()
	{
		if (isset($_GET['id']) && !empty($_GET['id'])) 
		{
			$posts = new Posts();
			// echo $_GET['id']; die;
			// var_dump($_GET['id']); exit();



			

			if(($posts->find($_GET['id']) != NULL))
			{
				$temp = $posts->find($_GET['id']);
				// var_dump($temp->id);
				require_once "Views/posts/editing_post.php";

				// $temp[] = $posts->find($_GET['id']);
				// var_dump($temp[0]);
				// die;
			}
			//require_once "Views/posts/editing_post.php";

			// header("Location: ../index.php");
		}
	}



}

 ?>