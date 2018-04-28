<?php

class ManagePostsController extends Controller{
	
	public $postObject;
	public $categoryObject;
	
	protected $access = 1;

	function __construct($view, $method = null, $parameters = null) {
		$this->access = 1;
		parent::__construct($view, $method, $parameters);
	}

	public function index() {
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();

		$this->set('posts',$posts);
	}

	public function add(){

		$this->categoryObject = new Categories();
		$categories = $this->categoryObject->getCategories();
		$this->set('categories',$categories);
		$this->set('task', 'save');
	
	}


	public function save(){
		
		$this->postObject = new Post();
		
		$data = array('title'=>$_POST['post_title'],'content'=>$_POST['post_content'],'date'=>$_POST['post_date'],'categoryID'=>$_POST['post_categoryID']);

		$result = $this->postObject->addPost($data);

		$posts = $this->postObject->getAllPosts();

		$this->set('posts',$posts);
		
		$this->set('message', $result);
			
		
	}
	
	public function edit($pID){
		
		$this->postObject = new Post();

		$post = $this->postObject->getPost($pID);
		
		$this->set('pID', $post['pID']);
		$this->set('title', $post['title']);
		$this->set('content', $post['content']);
		$this->set('date', $post['date']);
		$this->set('categoryID', $post['categoryID']);
		$this->set('task', 'update');
		
		$this->categoryObject = new Categories();
		$categories = $this->categoryObject->getCategories();
		$this->set('categories',$categories);
			
		
	}

	public function update(){
		
		$this->postObject = new Post();
		
		$data = array('title'=>$_POST['post_title'],'content'=>$_POST['post_content'],'date'=>$_POST['post_date'],'categoryID'=>$_POST['post_categoryID'],'pID'=>$_POST['pID']);
		

		$result = $this->postObject->updatePost($data);
		
		$this->set('message', $result);
	}

	public function delete($pID) {
		$this->postObject = new Post();
		$result = $this->postObject->deletePost($pID);
		$posts = $this->postObject->getAllPosts();

		$this->set('posts',$posts);
		$this->set('message',"Post Deleted");
	}
	
	
}
