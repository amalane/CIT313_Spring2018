<?php

class ManageUsersController extends Controller{

    public $usersObject;
    
	protected $access = 1;

	function __construct($view, $method = null, $parameters = null) {
		$this->access = 1;
		parent::__construct($view, $method, $parameters);
    }
    
	public function index(){
        $this->usersObject = new Users();
        $users = $this->usersObject->getAllUsers();
        $this->set('users',$users);
    }
    
    public function approve($uID) {
        $this->usersObject = new Users();
        $message = $this->usersObject->approveUser($uID);

        $this->set('message', $message);

        $users = $this->usersObject->getAllUsers();
        $this->set('users',$users);
    }

    public function delete($uID) {
        $this->usersObject = new Users();
        $message = $this->usersObject->deleteUser($uID);

        $this->set('message', $message);

        $users = $this->usersObject->getAllUsers();
        $this->set('users',$users); 
    }
	
	
}

?>