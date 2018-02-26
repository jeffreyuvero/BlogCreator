<?php

Class Admin extends CI_controller{
	public function __construct(){
		parent:: __construct();
	    $this->load->library('twig');

		$this->load->helper('url');
	}

	public function index(){
		$data = array(
			'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',

			);
		$this->twig->display('admin/login_view',$data);
	}
}