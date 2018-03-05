<?php

class registerController extends Controller{
	
	public $usersObject;
	
	public function defaultTask(){
		
		$this->usersObject = new Users();
		$this->set('task', 'add');
	
	
	}
	
	public function add(){
		
			$this->usersObject = new Users();
			
			$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'],'password'=>$_POST['password']);
			
	
			$result = $this->usersObject->addUser($data);
			
			$this->set('message', $result);
			
		
	}
	
	
	
	
	
	
}
