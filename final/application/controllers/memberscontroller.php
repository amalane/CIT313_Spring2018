<?php

class MembersController extends Controller{
	
	public $usersObject;
   
   	public function users($uID){
	   
		$this->usersObject = new Users();
		$user = $this->usersObject->getUser($uID);	    
		$this->set('user',$user);
		$this->set('title','Manage Users');	  
   	}
	
	public function index(){
		
		$this->usersObject = new Users();
		$users = $this->usersObject->getAllUsers();
		$this->set('title', 'Members');
		$this->set('users',$users);
	
	}
	
	public function update($uID) {
		$this->userObject = new User();
		$user = $this->update($uID);
		$this->set('profile', $user);
	}

	public function profile($uID){
		$this->userObject = new Users();

		if( $uID == "" ) {
			$uID = $this->userObject->uID;
		}
		$user = $this->userObject->getUser($uID);	    
	  	$this->set('user',$user);
		$this->set('title', 'User Profile View');
		$this->set('first_name',$user['first_name']);
		$this->set('last_name',$user['last_name']);
		$this->set('email',$user['email']);
		$this->set('password',$user['password']);
	   }
	   
	public function editUserProfile($uID){
		$this->userObject = new Users();
		if($_POST['password']!=""){
		$password = $_POST['password'];

		}
		
		else{
			$password=$_POST['currentpassword'];
		}

		$passhash = password_hash($password,PASSWORD_DEFAULT);
		$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'],'password'=>$passhash,'uID'=>$_SESSION['uID']);
		$this->userObject->editUser($data);
		header("Location: " . BASE_URL . "members/profile/".$uID);
		
	}


}

  