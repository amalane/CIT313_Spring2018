<?php

class BlogController extends Controller{
	
	public $postObject;
	public $commentsObject;
   
   	public function post($pID){
	   
		$this->postObject = new Post();
		$this->commentsObject = new Comments();
		$post = $this->postObject->getPost($pID);
		$comments = $this->commentsObject->getComments($pID);	    
		$this->set('post',$post);
		$this->set('comments',$comments);
	   
   	}
	
	public function index(){
		
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'Bookshelf Blog');
		$this->set('posts',$posts);
	
	}

	public function addComments() {
		$data = array('uID' => $_POST['uid'], 'commentText' => $_POST['textComment'], 'date' => date("Y-m-d H:i:s"), 'postID' => $_POST['pid']);
		$this->commentsObject = new Comments();
		$commentid = $this->commentsObject->addComment($data);

		header("Location: " . BASE_URL . "blog/post/" . $_POST['pid']);
	}

	public function deleteComment() {
		$commentID = $_POST['commentID'];
		$this->commentsObject = new Comments();
		$this->commentsObject->deleteComment($commentID);

		header("Location: " . BASE_URL . "blog/post/" . $_POST['pid']);
	}
	
	
}
