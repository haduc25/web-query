<?php 
require_once 'models/user.php';
class HomeController
{
   
    public function index()
    {
    	$users = user::all();

    	// var_dump($users);die;
        include "view/index.php";
    }
}


 ?>