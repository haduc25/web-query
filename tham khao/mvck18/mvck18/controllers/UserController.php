<?php 
	/**
	 * summary
	 */
	class UserController
	{
	    /**
	     * summary
	     */
	    public function create()
	    {
	        include_once 'view/create.php';
	    }

	    public function save(){
	    	echo "clicked to save user";
	    	$username = $_POST['user'];
	    	$email = $_POST['email'];
	    	$password = $_POST['pass'];
	    	$avatar = $_FILES['avt'];


	    	


	    	$fileName = $avatar['name']; //set name 
			$user = new User();
	    	$user->username = $username;
	    	$user->email = $email;
	    	$user->password = $password;

	    	$fileName = null;
	    	if ($avatar['size']>0) {
	    		$fileName = 'uploads/'.time()."-".$avatar['name'];
	    		move_uploaded_file($avatar['tmp_name'],$fileName);
	    	}


	  //   	if(move_uploaded_file($avatar['tmp_name'], $fileName))
			// {
			// 	echo "done";
			// 	//have image
			// 	// $sql.=" ,avatar=:avatar";
			// }else
			// {
			// 	echo "wrong";

			// 	//no image
			// 	$fileName = null;
			// }

		// if($avatar['size'] > 0)
		// {
		// 	$fileName = 'uploads/'.time()."-".$avatar['name'];
		// }

		// if(move_uploaded_file($avatar['tmp_name'], $fileName))
		// {
		// 	echo "done";
		// 	//have image
		// 	// $sql.=" ,avatar=:avatar";
		// }else
		// {
		// 	echo "wrong";
		// 	//no image
		// 	$fileName = null;
		// }

	    	$user->avatar=$fileName;

	    	$user->insert();
	    	//header("location:index.php");
	    	



	    }
	}

 ?>