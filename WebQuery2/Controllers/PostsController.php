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


		$fileName = $avatar['name']; 
		$posts = new Posts();
		$posts->title = $_title; 
		$posts->description = $_desc;
		$posts->author = $_author;
		$posts->createby = $_createby;


		$posts->insert();
		header("Location: ../index.php");
	}	
}

 ?>