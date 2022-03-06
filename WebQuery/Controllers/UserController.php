<?php 
// require_once './Models/Users.php';

class UserController
{
	public function create()
	{
		require_once "Views/users/create.php";
	}	

	public function saveUser()
	{
		echo "clicked to save user";

		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$avatar = $_FILES['avatar'];

		//md5 for pwd
		$password_md5 = md5($password);


		$fileName = $avatar['name']; //set name 
		$users = new Users();
		$users->username = $username; //set = bien username
		$users->email = $email;
		// $users->password = $password;
		//cus
		$users->password = $password_md5;


		$fileName = null;
		var_dump($avatar['size']); exit();

		if($avatar['size'] > 0)
		{
			$fileName = 'upload/'.time()."-".$avatar['name'];
		}

		if(move_uploaded_file($avatar['tmp_name'], $fileName))
		{
			//have image
			// $sql.=" ,avatar=:avatar";
		}else
		{
			//no image
			$fileName = null;
		}

		//exit();
		$users->avatar = $fileName;
		$users->insert();
		header("Location: ../index.php");


		
	}


}

 ?>
