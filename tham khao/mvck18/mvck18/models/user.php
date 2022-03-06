<?php 
	require_once 'BaseModel.php';
	/**
	 * summary
	 */
	class User extends BaseModel
	{
	    public $tableName = "users";
	    public $columns = ['username','password','email','avatar'];
	   
	}

 ?>