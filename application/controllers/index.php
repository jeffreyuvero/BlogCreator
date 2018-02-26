<?php 

class Index extends CI_controller{

	public function __construct(){
		parent:: __construct();

		$this->load->library('twig');
		$this->load->helper('url');

	}

	public function index(){

		$data = array(
			'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
			);

		$this->twig->display('index_view',$data);
	}

	public function blog(){
		$data = array(
			'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
			);

		$this->twig->display('blog_view',$data);	
	}

	public function post(){
		$data = array(
			'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
			);

		$this->twig->display('post_view',$data);	
	}

	public function about(){
		$data = array(
			'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
			);

		$this->twig->display('about_view',$data);	
	}

	public function contact(){
		$data = array(
			'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
			);

		$this->twig->display('contact_view',$data);	
	}

}