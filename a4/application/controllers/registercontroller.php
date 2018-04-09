<?php

class registerController extends Controller{
	
	public $usersObject;
	
	public function index(){
		
		$this->usersObject = new Users();
		$this->set('task', 'add');
	
	
	}
	
	public function add(){
		
			$this->usersObject = new Users();

			$password = $_POST['password'];
			$passhash = password_hash($password, PASSWORD_DEFAULT);
			
			$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'],'password'=>$passhash);
			
	
			$result = $this->usersObject->addUser($data);
			
			$this->set('message', $result);
			
		
	}
	
	
	
	
	
	
}
