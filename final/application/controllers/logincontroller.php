<?php

class LoginController extends Controller{
    //$this->userObject->isActive($userInfo['uID'])
	
    protected $userObject;
    
    public function index() {
        
    }
   
   public function do_login(){
       
    $this->userObject = new Users();

    if($this->userObject->checkUser($_POST['email'],$_POST['password'])) {
       
        $userInfo = $this->userObject->getUserFromEmail($_POST['email']);

        if( !$this->userObject->isActive($userInfo['uID'])  ) {
            $this->set('error','Account is still awaiting approval');
            return;
        }

        $_SESSION['uID'] = $userInfo['uID'];

        if(strlen($_SESSION['redirect']) > 0) {
            $view = ($_SESSION['redirect']);
            unset($_SESSION['redirect']);
            header('Location:'.BASE_URL.$view);
        }
        else {
            header('Location: '.BASE_URL);
        }

    }
    else {
        $this->set('error','wrong password / email combination');
    }

}

   public function logout() {

    unset($_SESSION['uID']);
    $_SESSION['loggedout'] = true;

    session_write_close();

    header('Location: '.BASE_URL);

   }
    	
}